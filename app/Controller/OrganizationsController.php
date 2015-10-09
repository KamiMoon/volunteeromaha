<?php
class OrganizationsController extends AppController {

	public $components = array('RequestHandler');
	
	
	public function beforeFilter() {
		parent::beforeFilter ();
		
		$this->Auth->allow('view', 'index', 'calendarjson');
	}
	
	public function isAuthorized($user) {
	
		$action = $this->action;
	
		if($action === 'add'){
			return $this->_isLoggedIn();
		}
		else if(in_array($action, array('edit', 'admin', 'saveApprovedOrganizations'))){
			
			$organizationId = $this->request->params['pass'][0];
			
			return $this->_isOrgAdminFor($organizationId);
		}
		else if($action === 'updateMemberStatus'){
				
			//TODO - this is not correct
			return $this->_isOrgAdmin();
		}
		
		return parent::isAuthorized($user);
	}
	
	//return the events data for an organization in the correct JSON format
	public function calendarjson($id = null){
		
		$params = array();
		$query = "SELECT  `Event`.`id` ,  `Event`.`name` ,  `Event`.`description` ,  `Event`.`created`,  `Event`.`start_time`, `Event`.`end_time` 
			FROM  `events` AS  `Event`";
		
		if(isset($id)){
			$query .= " WHERE  `Event`.`organization_id` = ?";
			array_push($params, $id);
		}
		
		$query .= " ORDER BY Event.created DESC";
				
		$db = $this->Organization->getDataSource();
		
		$events = $db->fetchAll($query, $params);
		
		$jsonResult = array();
		
		foreach ($events as $event){
			array_push($jsonResult, array(
				'id' => $event['Event']['id'],
				'title' => $event['Event']['name'],
				'start' => $event['Event']['start_time'],
				'end' => $event['Event']['end_time'],
				'url' => '/volunteeromaha/events/view/' . $event['Event']['id']
			));
		}
		
		
		$this->set(compact('jsonResult'));
		$this->set('_serialize', 'jsonResult');
	}
	
	
	//VoAdmin only
	public function index() {
		$conditions = $this->_buildSearchConditions('Organization');
		
		if(!$this->_isVoAdmin()){
			$conditions['Organization.status_id' ] = '2';
		}
		
		$this->set('organizations', $this->Organization->find('all', array(
				'conditions' => $conditions, 
				'order' => array('Organization.id' => 'asc') )
		));	
		$this->_setStateDropDown();
		$this->_setCategoryDropDown();
		$this->_setInterests();
	}
	
	//Publicly viewable with lots of things on the page only visible to admins
	public function view($id) {
		if (!$id) {
			throw new NotFoundException('Invalid organization');
		}
	
		$organization = $this->Organization->findById($id);
		if (!$organization) {
			throw new NotFoundException('Invalid organization');
		}
		$this->set('organization', $organization);
		
		if ($organization ['Organization']['address'] && $organization ['Organization']['city'] && $organization ['State']['abbrev']) {
				$mapAddress = $organization ['Organization']['address'] . ", " . $organization ['Organization']['city'] . ", " . $organization ['State']['abbrev'];
				$this->set ( 'mapAddress', $mapAddress );
		}
		
		$query =  <<< EOD
	
            SELECT  `Event`.`id` ,  `Event`.`name` ,  `Event`.`description` ,  `Event`.`created`
			FROM  `events` AS  `Event`
            WHERE  `Event`.`organization_id` = ?
            ORDER BY Event.created DESC
            LIMIT 3
		
		
EOD;
		
		$db = $this->Organization->getDataSource();
		$events = $db->fetchAll($query, array($organization['Organization']['id']));
		$this->set('events', $events);
		
// Total hours for this event --- this includes hours of non-students + users who do not want to be included on the leaderboard
	//	to remove students' hr who do not want to be included in leaderboard
			//		AND User.leaderboardopt = 0 /*user permission to display information in leaderboard, default is 0 for yes*/
	//to remove non students: 
			//AND members.role_id = 4 /*only students*/ 
		$queryTH = <<< EOD
				SELECT 
					 SUM(Hour.hours) AS total
				FROM hours as Hour, members, users as User
				WHERE Hour.user_id = User.id
					And members.organization_id = ?
					AND members.user_id = User.id
					AND Hour.status_id = 2 /* only use approved hours */
					AND members.role_id = 4 /*only students*/ 
					AND members.status_id = 2 /*approved members*/
					AND User.leaderboardopt = 0 /*user permission to display information in leaderboard, default is 0 for yes*/
				ORDER BY total desc;
					
EOD;
		$THShours = $db->fetchAll($queryTH , array($id));
		$this->set('THShoursList', $THShours);


//Count all student for this organization
		$queryTHS = <<< EOD
				SELECT
					count(members.id) AS totalcount
				FROM members
				WHERE members.status_id = 2 /*  approved members*/
					AND members.organization_id = ?
					AND members.role_id = 4 /* only student*/
					AND members.status_id = 2 /*approved members*/;
EOD;
		
		$THhours = $db->fetchAll($queryTHS , array($id));
		$this->set('THhoursList', $THhours);		



//Top Students
		$queryHr = <<< EOD
				SELECT 
				members.role_id, User.id, User.first_name, User.last_name, User.photo, Hour.id, Hour.user_id, Hour.registration_id, SUM(Hour.hours) AS total
				FROM hours as Hour, members, users as User
				WHERE Hour.user_id = User.id
				And members.organization_id = ?
				AND members.user_id = User.id
				AND Hour.status_id = 2 /* only use approved hours */
				AND members.role_id = 4 /*only students*/ 
				AND members.status_id = 2 /*approved members*/
				AND User.leaderboardopt = 0 /*user permission to display information in leaderboard, default is 0 for yes*/
				GROUP BY Hour.user_id
				ORDER BY total desc
				LIMIT 5;
EOD;
		
		$hours = $db->fetchAll($queryHr , array($id));
		$this->set('hoursList', $hours);		
		
//Recent students: New Student Registration
		$queryNs = <<< EOD
				SELECT 
					User.id, User.first_name, User.last_name, User.photo, Member.id, Member.user_id, Member.organization_id
				FROM members as Member
					INNER JOIN users as User on Member.user_id = User.id
				WHERE Member.status_id = 2 
					AND Member.organization_id = ?
					AND Member.status_id =2 /*only approved members*/
					AND Member.role_id = 4 /* oly students*/
					AND User.leaderboardopt = 0 /*user permission to display information in leaderboard, default is 0 for yes*/
				GROUP BY Member.user_id
				ORDER BY Member.id desc
				LIMIT 5;
EOD;
		
		$stud = $db->fetchAll($queryNs , array($id));
		$this->set('studentList', $stud);

//TODO- Top Event
		$queryTe = <<< EOD
				SELECT
					Event.id, 
					Event.name,
					Event.photo,   
					SUM(registrations.user_id) AS total
				FROM events AS Event, registrations     
				WHERE Event.organization_id = 12
				AND   Event.id = registrations.event_id
				GROUP BY Event.id
				ORDER BY total desc
				LIMIT 5;
EOD;
		
		$topevent = $db->fetchAll($queryTe , array());
		$this->set('eventLists', $topevent);
	
		$this->set('approvedOrgs', $this->_getApprovedOrganizations($organization['Organization']['id']));
		
	//school has a different looking view
		if ($organization['Organization']['category_id'] == 1){
			$this->render('school');
		}
		else{
			$this->render('view');
		}
	}
	
	
	private function _getEventListReport($orgId){
		$query = <<< EOD
		select Event.id, Event.name, count(Registration.id) as totalRegistered, sum(Hour.hours) as totalHours
		from events as Event left outer join
		registrations as Registration on Event.id = Registration.event_id
		inner join users as User on Registration.user_id = User.id
		inner join hours as Hour on Registration.id = Hour.registration_id
		where Event.organization_id = ? and
		Hour.status_id = 2 /* only use approved hours */ AND User.activated = 1
		group by Event.id
		ORDER BY totalHours desc;
EOD;
		$db = $this->Organization->getDataSource();
		return $db->fetchAll($query , array($orgId));
	}
	
	
	public function admin($id){

		if (!$id) {
			throw new NotFoundException('Invalid organization');
		}
		
		$organization = $this->Organization->findById($id);
		if (!$organization) {
			throw new NotFoundException('Invalid organization');
		}
		$this->set('organization', $organization);
		
		if ($this->request->is('post') || $this->request->is('put')) {
			$this->Organization->id = $id;
			
			if ($this->Organization->save($this->request->data)) {
				
				$this->Session->setFlash('Your organization has been updated.', 'success');
				$this->redirect(array('action' => 'admin', $id));
			
			} else {
				$this->Session->setFlash('Unable to update your organization.');
			}
				
		}
			
		if($this->_isOrgAdminFor($organization['Organization']['id'])){
			//get the members to approve
			$this->loadModel('Member');
			$this->set('members', $this->Member->find('all', array('conditions' => 'Member.organization_id = ' . $organization['Organization']['id'])));
				
			$registrationConditions =  array('conditions' => 'Event.organization_id ='. $organization['Organization']['id']);
				
			//get the registrations to approve
			$this->loadModel('Registration');
			$this->set('registrations', $this->Registration->find('all', $registrationConditions));
		
			//get the hours to approve
			$this->loadModel('Hour');
			//$hourConditions =  array('conditions' => 'Registration.event_id IN(select event_id from events where events.organization_id = ' . $organization['Organization']['id'] . ')');
			$hourConditions = array();
			$query = $this->_buildHoursQuery();
				
			$query .= ' WHERE `Organization`.`id` = ?';
			$hourConditions[0] = $organization['Organization']['id'];
		
			$db = $this->Hour->getDataSource();
				
			$hours = $db->fetchAll($query, $hourConditions);//, array($user_id['id']));
			$this->set('hoursList', $hours);
//For All Organization List 		
			$organizations = $this->Organization->find('list', array('fields' => array('Organization.id', 'Organization.name')));
			$this->set(compact('organizations'));	

			//get the events

			//get the members to approve
			$this->loadModel('Event');
			
			$events = $this->_getEventListReport($organization['Organization']['id']);
			$this->set('events', $events);
			
		}
		
		
	}
	
	public function saveApprovedOrganizations($orgId){
		$data = $this->request->data;
		Debugger::dump($data);
		
		
		if($data){
			$db = $this->Organization->getDataSource();
			$db->rawQuery("DELETE FROM approveorgs WHERE organization_id = $orgId");
			
			Debugger::dump($data['Approveorg']);			
				
			foreach ($data['Approveorg'] as $key => $value){
				$db->rawQuery("INSERT INTO approveorgs (organization_id, approved_org_id) VALUES($orgId, $value)");
				
			}
			
			$this->Session->setFlash('Your organization has been updated.', 'success');
			
		}
		
		$this->redirect($this->referer());
		
	}
	
	private function _getApprovedOrganizations($orgId){
		$db = $this->Organization->getDataSource();
		
		$query = "select Approveorg.organization_id, Approveorg.approved_org_id, Organization.name, Organization.id, Organization.photo as 'photo' FROM approveorgs as Approveorg inner join organizations as Organization on Approveorg.approved_org_id = Organization.id WHERE Approveorg.organization_id = ?";
		
		return $db->fetchAll($query, array($orgId));
	}
	
	
	public function upload() {
		debug($this->request->data);
	}
	

	//used for creating new organizations - already approved
	function _addPrimaryOrgAdmin($organizationId){
	
		$data = array('Member' => array(
			'user_id' => $this->_getUserId(),
			'organization_id' => $organizationId,
			'role_id' => 2,
			'status_id' => 2,
		));
		
		$this->loadModel('Member');
		$result = $this->Member->save($data, false);
		
		//force update of the session
		$this->_getRoles(true);
		
		return $result;
		
	}
	
	//have to be logged in
	public function add() {
		if ($this->request->is('post')) {

			if ($this->Organization->save($this->request->data)) {
				$this->Session->setFlash('Your organization has been saved.  It will be pubicly viewable for search once it has been approved.', 'success');
				
				$id = $this->Organization->id;
				
				$this->_addPrimaryOrgAdmin($id);
				
				return $this->redirect(array('action' => 'view', $id));
			}
		}
		
		$this->_setStateDropDown();
		$categories = $this->Organization->Category->find('list');
		$this->set ( compact ( 'categories' ) );
			
	}
	
	//org admin only
	public function edit($id = null) {
		if (!$id) {
			throw new NotFoundException('Invalid organization');
		}
	
		$organization = $this->Organization->findById($id);
		if (!$organization) {
			throw new NotFoundException('Invalid organization');
		}
	
		if ($this->request->is('post') || $this->request->is('put')) {
			$this->Organization->id = $id;
			if ($this->Organization->save($this->request->data)) {
				$this->Session->setFlash('Your organization has been updated.', 'success');
				$this->redirect(array('action' => 'view', $id));
			} else {
				$this->Session->setFlash('Unable to update your organization.');
			}
		}
	
		if (!$this->request->data) {
			$this->request->data = $organization;
			$categories = $this->Organization->Category->find('list');
			$this->set ( compact ( 'categories' ) );
		}
		
		$this->_setStateDropDown();
		
		$this->_setInterests();
	}
	
	function _setCategoryDropDown(){
		
	
		$categories = $this->Organization->Category->find('list', array(
				'fields' => array('Category.id', 'Category.name')
		));
	
	
		$this->set ( compact ( 'categories' ) );
	}
}