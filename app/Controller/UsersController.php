<?php
class UsersController extends AppController {
	public $uses = array('User', 'Interest');
	public function beforeFilter() {
		parent::beforeFilter ();
		
		// allow additional processing in login
		$this->Auth->autoRedirect = false;
		
		// these are all public and allowed without login
		$this->Auth->allow ( 'report', 'register',  'thanks', 'confirm', 'logout', 'home', 'activate', 'about', 'contact', 'login', 'calendar', 'opportunities', 'faq');
		
		// require activated flag to be set
		$this->Auth->userScope = array (
				'User.activated' => 1 
		);
	
	}

	public function isAuthorized($user) {
	
		$action = $this->action;
		
		if($action === 'edit'){
			$user_id = $this->request->params['pass'][0];
			
			//I am a voadmin - can edit anyone's profile
			//Or it is my own profile
			return $this->_isVoAdmin() || ($user_id === $this->Auth->user( 'id' ));
		}
		else if($action === 'profile' || $action === 'index'){
			return $this->_isLoggedIn();
		}
		
		return parent::isAuthorized($user);
	}
	
	public function home() {
		
		$query =  <<< EOD
		
            SELECT  `Event`.`id` ,  `Event`.`name` ,  `Event`.`description` ,`Event`.`photo`, `Event`.`created`
			FROM  `events` AS  `Event`
            ORDER BY Event.created DESC
            LIMIT 3;
		
		
EOD;
		
		$db = $this->User->getDataSource();
		$events = $db->fetchAll($query, array());
				$this->set('events', $events);
		
		$queryO =  $this->_getOrganizationsQuery() . " LIMIT 4";
				
		$db = $this->User->getDataSource();
		$organizations = $db->fetchAll($queryO, array());
		$this->set('organizations', $organizations);
				
//Top 5 Students
		$queryHr = $this->_getTopStudentsQuery() . " LIMIT 5";
		
		$hours = $db->fetchAll($queryHr , array());
		$this->set('hoursList', $hours);

//Top 5 Organizations	
		$queryOHr = $this->_getTopOrganizationsQuery() . " LIMIT 5";

		$organizationsHr = $db->fetchAll($queryOHr, array());
		$this->set('organizationsHr', $organizationsHr);
		

//Top 5 School		
		$querySHr = $this->_getTopSchoolsQuery() . " LIMIT 5";
		$schoolsHr = $db->fetchAll($querySHr, array());
		$this->set('schoolsHr', $schoolsHr);
		
		// homepage static
	}
	public function thanks() {
		// static
	}
	public function about() {
		// static
	}
	public function contact() {
		// static
	}
	public function calendar() {
		$orgId = "";
		
		$queryParams = $this->request->query;
		if($queryParams && !empty($queryParams['orgId'])){
			$orgId = $queryParams['orgId'];
		}
		
		$this->set('orgId', $orgId);
		
	}
	public function map() {
		
	}
	public function faq() {
	
	}
	public function profile($id = null) {
		$this->User->id = $id;
		if (! $this->User->exists ()) {
			throw new NotFoundException ( __ ( 'Invalid user' ) );
		}
		
		$user = $this->User->read ( null, $id );
		
		$this->set ( 'user', $user );
		
		if ($user['User']['address'] && $user['User']['city'] && $user['State']['abbrev']) {
			$mapAddress = $user['User']['address'] . ", " . $user['User']['city'] . ", " . $user['State']['abbrev'];
			$this->set ( 'mapAddress', $mapAddress );
		}
			
		$this->set ( 'roles', $this->_getRoles());
		
// pull data for My registration table		
		$queryRg = <<< EOD
		SELECT
			sum(Hour.hours) AS total,
			User.first_name, User.last_name, 
			Event.id, Event.name, Event.organization_id,
			Organization.name, Organization.id, 
			Registration.start_time, Registration.end_time, Registration.user_id,  Registration.id,
			Status.id, Status.status
		FROM 
			users as User, events as Event, registrations as Registration, organizations as Organization, statuses as Status, hours as Hour
		WHERE
			User.id = Registration.user_id
			AND Registration.user_id = Hour.user_id
			AND Registration.event_id = Event.id
			AND Organization.id = Event.organization_id
			AND Status.id = Registration.status_id
			AND User.id = ?
			AND User.activated = 1 /* only use activated users */
			Group By Registration.user_id
			Order By total;
			
EOD;
		$db = $this->User->getDataSource();
		$registrations = $db->fetchAll($queryRg, array($id));
		$this->set('registrations', $registrations);

		
	}
	
	public function register() {
		if ($this->request->is ( 'post' )) {
			
			$this->User->create ();
			if ($this->User->save ( $this->request->data )) {
				
				$this->__sendActivationEmail ( $this->User->id );
				
				return $this->redirect ( array (
						'action' => 'thanks' 
				) );
			}
			$this->Session->setFlash ( 'Application for registration is not possible without agreeing with Volunteer Omaha Terms and Conditions.' );
		}
		
	}
	
	public function login() {
		if ($this->request->is ( 'post' )) {
			if ($this->Auth->login ()) {
				
				$user = $this->getUserById ( $this->Auth->user ( 'id' ) );
				
				// don't allow users who are not activated to login
				if ($user ['User'] ['activated'] == 0) {
					$this->Session->setFlash ( 'Your account has not been activated yet!' );
					$this->Auth->logout ();
					$this->redirect ( array (
							'action' => 'login' 
					) );
				} else {
					$this->Session->setFlash ( 'Logged In', 'success');
					
					
					$redirectURL = $this->Auth->redirectUrl();
					
					if ($redirectURL === "/") {
						return $this->redirect ( array (
								'action' => 'profile',
								$user ['User'] ['id'] 
						) );
					}
					
					return $this->redirect ( $redirectURL );
				}
			} else {
				$this->Session->setFlash ( __ ( 'Username or password is incorrect' ), 'default', array (), 'auth' );
			}
		}
	}
	public function logout() {
		$this->Session->setFlash ( 'Logged out', 'success');
		//destory session data such as roles
		$this->Session->destroy();
		
		return $this->redirect ( $this->Auth->logout () );
	}
	function __sendActivationEmail($user_id) {
		$user = $this->getUserById ( $user_id );
		if ($user === false) {
			debug ( __METHOD__ . " failed to retrieve User data for user.id: {$user_id}" );
			return false;
		}
		
		$username = $this->data ['User'] ['username'];
		$activationUrl = 'http://' . env ( 'SERVER_NAME' ) . '/volunteeromaha/users/activate/' . $user ['User'] ['id'] . '/' . $this->User->getActivationHash ();
		
		$Email = new CakeEmail ();
		$Email->config ( 'gmail' );
		$Email->template ( 'registration_confirm' );
		$Email->sender ( 'capstoneconsultants3@gmail.com', 'Volunteer Omaha' );
		$Email->from ( array (
				'capstoneconsultants3@gmail.com' => 'Volunteer Omaha' 
		) );
		$Email->to ( $user ['User'] ['email'] );
		$Email->subject ( 'Confirm Registration' );
		$Email->emailFormat ( 'html' );
		$Email->viewVars ( array (
				'username' => $username,
				'activate_url' => $activationUrl 
		) );
		$Email->send ();
	}
	function getUserById($user_id) {
		return $this->User->find ( 'first', array (
				'conditions' => array (
						'User.id' => $user_id 
				) 
		) );
	}
	function activate($user_id = null, $in_hash = null) {
		$this->User->id = $user_id;
		
		if ($this->User->exists () && ($in_hash == $this->User->getActivationHash ())) {
			$this->User->read(null, $user_id);
			$this->User->set ( 'activated', 1 );
			$this->User->save ();
			
			$this->Session->setFlash ( 'Your account has been activated, please log in below.', 'success');
			$this->redirect ( 'login' );
		}
	}
	public function edit($id = null) {
		if (! $id) {
			throw new NotFoundException ( 'Invalid user' );
		}
		
		$user = $this->User->findById ( $id );
		if (! $user) {
			throw new NotFoundException ( 'Invalid user' );
		}
		
		if ($this->request->is ( 'post' ) || $this->request->is ( 'put' )) {
			$this->User->id = $id;
			
			Debugger::dump($this->request->data);
			if ($this->User->saveAll ( $this->request->data )) {
				$this->Session->setFlash ( 'Your profile has been updated.', 'success');
				$this->redirect ( array (
						'action' => 'profile',
						$id 
				) );
			} else {
				
				$this->Session->setFlash ( 'Unable to update your profile.' );
			}
		}
		
		if (! $this->request->data) {
			$this->request->data = $user;
		}
		
		$this->_setStateDropDown();

		$interests = $this->Interest->find('list', array('fields' => array('Interest.id', 'Interest.interests')));		    
		$this->set(compact('interests'));	
	}

	
	
	
	public function index(){
		
		$conditions = $this->_buildSearchConditions('User');
		
		$this->set('users', $this->User->find('all', array('conditions' => $conditions)));
		
		//$roles = $this->User->Role->find ( 'list' );				
		//$this->set('roles', $roles);
		
		$this->_setStateDropDown();
		
		$this->_setInterests();
	}
	
	
	public function report(){
		$this->loadModel('Organization');
		$this->loadModel('Event');
		$reportorg = $this->Organization->find('list', array('condition'=> 'Organization.name'));
		$this->set('reportorg', $reportorg);
		
		$reportevent = $this->Event->find('list', array('condition' => 'Event.name'));
		$this->set('reportevent', $reportevent);
	}
}