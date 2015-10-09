<?php
class HoursController extends AppController {
	
	public function beforeFilter() {
		parent::beforeFilter ();
	}

	public function isAuthorized($user) {
	
		$action = $this->action;
	
		if($action === 'index'){
			return $this->_isLoggedIn();
		}
		else if($action === 'add'){
			$registration_id = $this->request->params['pass'][0];
			$user_id = $this->_getUserId();
			
			$this->loadModel('Registration');
				
			$registration = $this->Registration->find('first', array('conditions' => array(
					'Registration.id' => $registration_id)));
				
			if($this->_isMine($registration['Registration']['user_id']) || $this->_isOrgAdminFor($registration['Event']['organization_id'])){
				return $this->_isLoggedIn();
			}else{
				$this->Session->setFlash('You are not yet registered for this event.');
				return false;
			}
			
		}
		else if($action === 'edit'){
			$hour_id = $this->request->params['pass'][0];
			
			$hour = $this->Hour->findById($hour_id);
			
			if (!$hour) {
				throw new NotFoundException('Invalid, Hour Not Found');
			}
			
			$this->loadModel("Event");
			
			$event = $this->Event->findById($hour['Registration']['event_id']);
			
			//can only edit the hour if I am an admin
			$isOrgAdminForHour = $this->_isOrgAdminFor($event['Event']['organization_id']);
			$isHourApproved = $hour['Hour']['status_id'] == 2;
			
			if($isOrgAdminForHour || (!$isOrgAdminForHour && !$isHourApproved)){
				return $this->_isLoggedIn();
			}else{
				$this->Session->setFlash('You are not authorized to edit this hour.');
				return false;
			}
			
		}else if($action === 'view'){
			$hour_id = $this->request->params['pass'][0];
			
			$hour = $this->Hour->findById($hour_id);
			
			if (!$hour) {
				throw new NotFoundException('Invalid, Hour Not Found');
			}
			
			$this->loadModel("Event");
			
			$event = $this->Event->findById($hour['Registration']['event_id']);
			
			//can only edit or view the hour if it is mine or I am an admin
			if($this->_isMine($hour['Hour']['user_id']) || $this->_isOrgAdminFor($event['Event']['organization_id'])){
				return $this->_isLoggedIn();
			}else{
				$this->Session->setFlash('This is not your hour to view.');
				return false;
			}
			
		}
	
		return parent::isAuthorized($user);
	}
	
	
	
	public function index() {
		$user_id=$this->Session->read('Auth.User');
		//$role_id = $user_id['role_id'];
		
		$conditions = array();
		
		$query = $this->_buildHoursQuery();
		$queryParams = $this->request->query;
		if($queryParams){
			if($queryParams['user_id']){
				$query .= ' WHERE `Hour`.`user_id` = ?';
				$conditions[0] = $queryParams['user_id'];
			}
		}
		//$query .= ' WHERE `Hour`.`user_id` = ?';
		
		$db = $this->Hour->getDataSource();
		
		$hours = $db->fetchAll($query, $conditions);//, array($user_id['id']));
		$this->set('hoursList', $hours);
		//TODO
	}

	public function view($id) {
		if (!$id) {
			throw new NotFoundException('Invalid registration');
		}

		$hour = $this->Hour->findById($id);
		if (!$hour) {
			throw new NotFoundException('Invalid hour');
		}
		$this->set('hour', $hour);
	}

	public function add($registration_id) {
		$user_id =  $this->Session->read('Auth.User');
		$user_id = $user_id['id'];
		
		$this->loadModel('Registration');
		$registration = $this->Registration->findById($registration_id);
		$orgId = $registration['Event']['organization_id'];
		
		$this->set('registration_id', $registration_id);
		
		if ($this->request->is('post')) {

			if ($this->Hour->save($this->request->data)) {
				$this->Session->setFlash('Your hour has been saved.  They still need to be approved by an organization admin.', 'success');
				
				
				if($this->_isOrgAdminFor($orgId)){
					return $this->redirect($this->referer());
				}
				else{
					return $this->redirect(array('action' => 'index', '?' => array('user_id' => $user_id)));
				}
				
			}

		}
		
		
		$this->set('user_id', $user_id );
	}

	public function edit($id = null) {
		if (!$id) {
			throw new NotFoundException('Invalid Hour');
		}

		$hour = $this->Hour->findById($id);
		if (!$hour) {
			throw new NotFoundException('Invalid, Hour Not Found');
		}
		
		$user_id =  $this->Session->read('Auth.User');
		$user_id = $user_id['id'];
		

		if ($this->request->is('post') || $this->request->is('put')) {
			$this->Hour->id = $id;
			if ($this->Hour->save($this->request->data)) {
				$this->Session->setFlash('Your hour(s) has been updated.', 'success');
				
				
				return $this->redirect($this->referer());
			} else {
				$this->Session->setFlash('Unable to update your hour(s).');
			}
		}

		if (!$this->request->data) {
			$this->request->data = $hour;
		}
	}
	
}