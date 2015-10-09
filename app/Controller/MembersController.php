<?php

class MembersController extends AppController {
	
	public function beforeFilter() {
		parent::beforeFilter ();
		
		// these are all public and allowed without login
		$this->Auth->allow ( 'add', 'edit');
		
	}
	
	public function index() {
		$members = $this->Member->find('all');
		$this->set('members', $members);
	}

	
	public function add($organization_id) {
		if ($this->request->is('post')) {

			if ($this->Member->save($this->request->data)) {
				$this->Session->setFlash('Your application for the organization is pending approval.', 'success');
				
				$this->_getRoles(true);
				
				//$this->_sendRegistrationConfirmationEmail($event_id);
				return $this->redirect(array('controller' => 'users', 'action' => 'profile', $this->_getUserId()));
			}

		}
		
		$this->set('organization_id', $organization_id);
		
		$user_id =  $this->Session->read('Auth.User');
		
		$user_id = $user_id['id'];
		$this->set('user_id', $user_id );

		//load event
		$this->loadModel('Organization');
		$organization = $this->Organization->findById($organization_id);
		$this->set('organization', $organization);
		
		//remove user if not working for add/join page
		$this->loadModel('User');
		$this->set('user', $this->User->findById($user_id));
		
		$this->loadModel('Role');
		
		
		//don't allow a student to join an organization
		//organizations are category 2
		//students are role 4
		
		$dissallowedRoles = '1, 2';
		
		if($organization['Organization']['category_id'] == 2){
			$dissallowedRoles = '1, 2, 4';
		}
		
		$roles = $this->Role->find('list', array('conditions' => 'Role.id NOT IN (' . $dissallowedRoles . ') AND Role.id NOT IN(select role_id from members where user_id = ' . $user_id . ' and organization_id = ' . $organization_id . ')'));
		$this->set('roles', $roles);
		
		
		//TODO: condition for add/join page to list all the roles a user might already have for an organization
		//this has to be limited to the organization that the user is trying to join to.
		$conditions = array();
		$queryParams = $this->request->query;
		if($queryParams){
		
			foreach ($queryParams as $key => $val){
				if(!empty($val)){
		
					if(is_numeric($val)){
						$conditions['Member.' . $key] = $val;
					}
					else{
						$conditions['Member.' . $key . ' LIKE'] = $val . '%';
					}
		
				}
			}
		}
		
		$members = $this->Member->find('all', array(
				'conditions' => $conditions,
				'order' => array('Member.id' => 'desc')
		)
		);
		
		$this->set('members', $members);
		
		//TODO end of condition
		
		
		

	}
	
}