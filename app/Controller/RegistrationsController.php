<?php

class RegistrationsController extends AppController {

	public function beforeFilter() {
		parent::beforeFilter ();
			
	}
	
	public function isAuthorized($user) {
	
		$action = $this->action;
	
		if($action === 'add'){
			$event_id = $this->request->params['pass'][0];
			$user_id = $this->_getUserId();

			//TODO - needs to be an approved member for org
			
			//am i already registered?
			$registration = $this->Registration->find('all', array('conditions' => array(
				'Registration.event_id' => $event_id,
				'Registration.user_id' => $user_id	
			)));
			
			if(count($registration) > 0){
				$this->Session->setFlash('You have already registered for this event.');
				return false;
			}else{
				return $this->_isLoggedIn();
			}
		}
		else if($action === 'index'){
			return $this->_isLoggedIn();
		}
		else if($action === 'edit' || $action === 'view'){
			$id = $this->request->params['pass'][0];
			
			$registration = $this->Registration->findById($id);
			if (!$registration) {
				throw new NotFoundException('Invalid Registration');
			}
			
			//can only edit the registration if it is mine or I am an admin
			if($this->_isMine($registration['Registration']['user_id']) || $this->_isOrgAdminFor($registration['Event']['organization_id'])){
				return $this->_isLoggedIn();
			}else{
				$this->Session->setFlash('This is not your registration.');
				return false;
			}			
		}
	
		return parent::isAuthorized($user);
	}
	
	
	public function index() {
		
		$conditions = array();
		$queryParams = $this->request->query;
		if($queryParams){
				
			foreach ($queryParams as $key => $val){
				if(!empty($val)){
						
					if(is_numeric($val)){
						$conditions['Registration.' . $key] = $val;
					}
					else{
						$conditions['Registration.' . $key . ' LIKE'] = $val . '%';
					}
		
				}
			}
		}
		
		$registrations = $this->Registration->find('all', array(
				'recursive' => 1,
				'conditions' => $conditions,
				'order' => array('Registration.id' => 'desc')
				)
		);
		
		$this->set('registrations', $registrations);	
	}

	public function view($id) {
			if (!$id) {
			throw new NotFoundException('Invalid registration');
		}
	
		$registration = $this->Registration->findById($id);
		if (!$registration) {
			throw new NotFoundException('Invalid registration');
		}
		$this->set('registration', $registration);
	}
	
	public function add($event_id) {
		
		$user_id =  $this->Session->read('Auth.User');
		$user_id = $user_id['id'];
		
		if ($this->request->is('post')) {

			if ($this->Registration->save($this->request->data)) {
				$this->Session->setFlash('Your registration has been saved. A button to log hours will be available on your registration once your registration has been approved.', 'success');
				$this->_sendRegistrationConfirmationEmail($event_id);
				return $this->redirect(array('action' => 'index', '?' => array('user_id' => $user_id)));
				
			}

		}
		$this->set('event_id', $event_id);
		
		$this->set('user_id', $user_id );

		//load event 
		$this->loadModel('Event');
		$this->set('event', $this->Event->findById($event_id));
		
	}
	
	public function edit($id = null) {
			if (!$id) {
			throw new NotFoundException('Invalid registration');
		}
	
		$registration = $this->Registration->findById($id);
		if (!$registration) {
			throw new NotFoundException('Invalid Registration');
		}
	
		if ($this->request->is('post') || $this->request->is('put')) {
			$this->Registration->id = $id;
			if ($this->Registration->save($this->request->data)) {
				$this->Session->setFlash('Your registration has been updated.', 'success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Unable to update your registration.');
			}
		}
	
		if (!$this->request->data) {
			$this->request->data = $registration;
		}
	}
	
	function _sendRegistrationConfirmationEmail($event_id) {
		$user =  $this->Session->read('Auth.User');
		$this->loadModel('Event');
		$event = $this->Event->findById($event_id);

		$username = $user['username'];
		$eventUrl = 'http://' . env ( 'SERVER_NAME' ) . '/volunteeromaha/events/view/' . $event['Event']['id'];
	
		$Email = new CakeEmail ();
		$Email->config ( 'gmail' );
		$Email->template ( 'event_registration_confirm' );
		$Email->sender ( 'capstoneconsultants3@gmail.com', 'Volunteer Omaha' );
		$Email->from ( array (
				'capstoneconsultants3@gmail.com' => 'Volunteer Omaha'
		) );
		$Email->to ($user['email'] );
		$Email->subject ( 'Event registration confirmation' );
		$Email->emailFormat ( 'html' );
		$Email->viewVars ( array (
				'username' => $username,
				'event_url' => $eventUrl,
				'event_name' => $event['Event']['name']
		) );
		$Email->send ();
	}

}