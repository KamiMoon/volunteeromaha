<?php

class EventsController extends AppController {

	public function beforeFilter() {
		parent::beforeFilter ();
		
		$this->Auth->allow('view', 'index');
	}
	
	public function isAuthorized($user) {
	
		$action = $this->action;
	
		if($action === 'add'){
			$organizationId = $this->request->params['pass'][0];
			
			$this->loadModel('Organization');

			$organization = $this->Organization->findById($organizationId);
			
			//is this organization approved
			if($organization['Organization']['status_id']  != 2){
				$this->Session->setFlash('This organization must be approved before adding new events.');
				return false;
			}
			
			//am I an organization admin of some kind for this organization?
			return $this->_isOrgAdminFor($organizationId);
		}
		else if($action === 'edit' || $action === 'admin'){
			$event_id = $this->request->params['pass'][0];
			
			$event = $this->Event->findById($event_id);
			if (!$event) {
				throw new NotFoundException('Invalid event');
			}
			
			$organizationId = $event['Event']['organization_id'];
		
			//am I an organization admin of some kind for this organization?
			return $this->_isOrgAdminFor($organizationId);
		}
	
		return parent::isAuthorized($user);
	}
	
	
	public function index() {
		$conditions = $this->_buildSearchConditions('Event');
		
		$this->set('events', $this->Event->find('all', array(
				'conditions' => $conditions, 
				'order' => array('Event.id' => 'asc') )
		));
		$this->_setStateDropDown();
		$this->_setInterests();
	}
	
	public function view($id) {
		if (!$id) {
			throw new NotFoundException('Invalid event');
		}
	
		$event = $this->Event->findById($id);
		if (!$event) {
			throw new NotFoundException('Invalid event');
		}
		$this->set('event', $event);
		
		if ($event['Event']['address'] && $event ['Event']['city'] && $event ['State']['abbrev']) {
			$mapAddress = $event['Event']['address'] . ", " . $event['Event']['city'] . ", " . $event['State']['abbrev'];
			$this->set('mapAddress', $mapAddress );
		}
		
		$user_id =  $this->Session->read('Auth.User');
		
		if($user_id){
			$user_id = $user_id['id'];
			
			$this->set('user_id', $user_id);
			
			//get current registration if there is one
			$this->loadModel('Registration');
			$registration = $this->Registration->find('first', array('conditions' => array(
					'Registration.user_id' => $user_id,
					'Registration.event_id' => $event['Event']['id']
				)
			));
			
			if($registration){
				$this->set('registration_mode', 'VIEW');
				$this->set('registration', $registration);
			}else{
				$this->set('registration_mode', 'ADD');
			}
			
		}
		
	}
	
	public function admin($id){
		if (!$id) {
			throw new NotFoundException('Invalid event');
		}
		
		$event = $this->Event->findById($id);
		if (!$event) {
			throw new NotFoundException('Invalid event');
		}
		$this->set('event', $event);
		
		$event_id = $event['Event']['id'];
		
		if($this->_isOrgAdminFor($event['Event']['organization_id'])){
			
			$registrationConditions =  array('conditions' => 'Event.id ='. $event_id);
		
			//get the registrations to approve
			$this->loadModel('Registration');
			$this->set('registrations', $this->Registration->find('all', $registrationConditions));
		
			//get the hours to approve
			$this->loadModel('Hour');
			$hourConditions = array();
			$query = $this->_buildHoursQuery();
		
			$query .= ' WHERE `Event`.`id` = ?';
			$hourConditions[0] = $event_id;
		
			$db = $this->Hour->getDataSource();
		
			$hours = $db->fetchAll($query, $hourConditions);//, array($user_id['id']));
			$this->set('hoursList', $hours);
		
		}
		
		
	}
	
	
	public function add($organization_id) {
		if ($this->request->is('post')) {
	
			if ($this->Event->save($this->request->data)) {
				$this->Session->setFlash('Your event has been saved.', 'success');
				return $this->redirect(array('action' => 'index'));
			}
		}
		
		$this->set('organization_id', $organization_id);
		$this->_setStateDropDown();
	}
	
	public function edit($id = null) {
		if (!$id) {
			throw new NotFoundException('Invalid event');
		}
	
		$event = $this->Event->findById($id);
		if (!$event) {
			throw new NotFoundException('Invalid event');
		}
	
		if ($this->request->is('post') || $this->request->is('put')) {
			$this->Event->id = $id;
			if ($this->Event->save($this->request->data)) {
				$this->Session->setFlash('Your event has been updated.', 'success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Unable to update your event.');
			}
		}
	
		if (!$this->request->data) {
			$this->request->data = $event;
		}
		
		$this->_setStateDropDown();
		$this->_setInterests();
	}

}