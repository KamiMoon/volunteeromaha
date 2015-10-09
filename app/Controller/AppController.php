<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');
App::uses('CakeEmail', 'Network/Email');


/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
	
	public $components = array(
			/*'Acl',*/
			'Session',
			'Auth' => array(
					'logoutRedirect' => array(
							'controller' => 'users',
							'action' => 'home'
					),
					'Form' => array(
							'passwordHasher' => array(
									'className' => 'Simple',
									'hashType' => 'sha256'
							)
					),
					'authError' => 'Not authorized',
					/*'authorize' => array(
							'Actions' => array('actionPath' => 'controllers')
					)*/
					'authorize' => array('Controller')
			)
	);
	
	public function isAuthorized($user) {
		//vo admin can do everything
		if($this->_isVoAdmin()){
			return true;
		}
		
		$action = $this->action;
		
		if(in_array($action, array('updateMemberStatus', 'updateRegistrationStatus', 'updateHourStatus'))){
			$organizationId = $this->request->params['pass'][0];
			return $this->_isOrgAdminFor($organizationId);
		}
	
		// Default deny
		return false;
	}

	//the datepicker field has many garbage fields - condense this into one time string for use in a SQL query
	public function parseDatePickerField($fieldName){
		$formattedDate = '';
	
		$month = '';
		$day = '';
		$year = '';
		$hour = '';
		$min = '';
		$meridian = '';
	
		$queryParams = $this->request->query;
	
		if($queryParams){
				
			if($queryParams[$fieldName]){
				$timeArray = $queryParams[$fieldName];
				$month = $timeArray['month'];
				$day = $timeArray['day'];
				$year = $timeArray['year'];
				$hour = $timeArray['hour'];
				$min = $timeArray['min'];
				$meridian = $timeArray['meridian'];
	
				if($meridian == 'pm'){
					$hour += 12;
				}
	
				//desired format: '2014-03-18 18:15:00'
				$formattedDate = "$year-$month-$day $hour:$min:00";
	
				//delete theses fields
				$this->request->query[$fieldName] = '';
			}
				
		}
	
		return $formattedDate;
	}
	
	public $helpers = array (
			'Form' => array (
					'className' => 'Bootstrap3Form'
			),
			'Auth' => array('className' => 'Auth'),
			'Leaderboard' => array('className' => 'Leaderboard')
	);
	
	function _buildSearchConditions($modelStr){
		
		$conditions = array();
		$queryParams = $this->request->query;
		if($queryParams){
				
			foreach ($queryParams as $key => $val){

				if(!empty($val)){
						

						if(is_numeric($val)){
							$conditions[$modelStr . '.' . $key] = $val;
						}
						else{
							if($key == 'keyword'){
								if($modelStr == 'Event'){
									$conditions["OR"]  = array(
											$modelStr . '.' . 'name' . ' LIKE' => '%' .$val . '%',
											$modelStr . '.' . 'description' . ' LIKE' => '%' .$val . '%'
											);
									
								}
								else if($modelStr == 'Organization'){
									
									$conditions["OR"]  = array(
											$modelStr . '.' . 'name' . ' LIKE' => '%' .$val . '%',
											$modelStr . '.' . 'short_description' . ' LIKE' => '%' .$val . '%',
											$modelStr . '.' . 'long_description' . ' LIKE' => '%' .$val . '%'
									);

								}
							}
							else if($key == 'Interest'){
								$interestsQuery = "";
								
								//remove the interests from the query params
								if($this->request->query && $this->request->query['Interest']){
									$interestsQuery = $this->request->query['Interest'];
									$this->request->query['Interest'] = '';
								}
								
								//build interest ids
								$interest_ids = "";
									
								if($interestsQuery && sizeof($interestsQuery) > 0){
									$interest_ids = array();
								
									foreach ($interestsQuery as $interestQ){
											
										array_push($interest_ids, $interestQ);
									}
										
									$interest_q = join(", ", $interest_ids);
								
									if($modelStr == 'User'){
										$conditions["User.id in (select user_id from interests_users where interest_id in (?))"] = array($interest_q);
										
									}else if($modelStr == 'Organization'){
										$conditions["Organization.id in (select organization_id from interests_organizations where interest_id in (?))"] = array($interest_q);
									}
									else if($modelStr == 'Event'){
										$conditions["Event.id in (select event_id from events_interests where interest_id in (?))"] = array($interest_q);
									}
									
								}
							}
							else{
								$conditions[$modelStr . '.' . $key . ' LIKE'] = $val . '%';
							}
							
						}

				}
			}
		}
		
		$this->request->data[$modelStr] = $queryParams;
		
		return $conditions;
	}
	
	function _setStateDropDown(){
		$this->loadModel('User');
		
		$states = $this->User->State->find('list', array(
				'fields' => array('State.id', 'State.abbrev')
		));
	
		
		$this->set ( compact ( 'states' ) );
	}
	

	
	
	function _updateStatus($model, $orgId, $id, $status_id){
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
		
		$obj = $model->read(null, $id);
		$model->set('status_id', $status_id);
		$model->save();
		
		$this->Session->setFlash('Status updated', 'success');
		
		//force update of the session
		$this->_getRoles(true);
		
		$status = $status_id == 2 ? 'Approved': 'Dissaproved';
		
		if($model->name == 'Organization'){			
			$text = "Your organization <a href=\"" . $this->_getBaseUrl() . "organizations/view/" . $orgId . "\">" . $obj['Organization']['name'] . "</a> has been " . $status;
			$title = "Organization " . $status;
			
			//send the email to the primary admin of the organization
			$member = $this->_getOrgAdminPrimaryEmail($orgId);
			$to = $member['User']['email'];
			
			$this->_sendEmail(null, $to, $title, null, $text);
		}
		else if($model->name == 'Member'){
			$text = "Your membership in  <a href=\"" . $this->_getBaseUrl() . "organizations/view/" . $orgId . "\">" . $obj['Organization']['name'] . "</a> has been " . $status;
			$title = "Membership " . $status;
				
			//send the email to the person being approved
			$user_id = $obj['Member']['user_id'];			
			$user = $this->_getEmailByUserId($user_id);
			$to = $user['User']['email'];
				
			$this->_sendEmail(null, $to, $title, null, $text);
		}
		else if($model->name == 'Registration'){
			$text = "Your " . "<a href=\"" . $this->_getBaseUrl() . "registrations/view/" . $id . "\">registration</a> has been " . $status . ".";
			if($status == "Approved"){
				$text .= " You can now add hours for this event registration.";
			}
			$title = "Registration " . $status;
		
			//send the email to the person being registered
			$user_id = $obj['Registration']['user_id'];
			$user = $this->_getEmailByUserId($user_id);
			$to = $user['User']['email'];
		
			$this->_sendEmail(null, $to, $title, null, $text);
		}
		else if($model->name == 'Hour'){
			
			//if the user is a student of a school
			
			
			
			
			$text = "Your " . "<a href=\"" . $this->_getBaseUrl() . "hours/view/" . $id . "\">hours</a> have been " . $status;
			$title = "Hours " . $status;
			
			//send the email to the person
			$user_id = $obj['Hour']['user_id'];
			$user = $this->_getEmailByUserId($user_id);
			$to = $user['User']['email'];
			
			$this->_sendEmail(null, $to, $title, null, $text);
		}
		
		return $this->redirect($this->referer());
	}
	
	
	
	function _getUser(){
		return $this->Session->read('Auth.User');
	}
	
	function _getUserId(){
		$user = $this->_getUser();
		return $user['id'];
	}
	
	function _isLoggedIn(){
		$user = $this->_getUser();
		return !empty($user);
	}
	
	function _isVoAdmin(){
		$privileges = $this->_getPrivileges();
		return $privileges['isVoAdmin'];
	}
	
	function _isMine($user_id){
		$my_id = $this->_getUserId();
		return $this->_isVoAdmin() || ($user_id === $my_id);
	}
	
	//has specific org admin powers for a specific organization
	//passing in nothing will just check if it has any org admin powers at all for any organization
	function _isOrgAdmin($organizationId = false, $roleId = false){
		
		if($organizationId && $roleId){
			$privileges = $this->_getPrivileges();
			
			$isAdmin = false;
			
			//do i have active org admin privileges of the desired kind?
			if(isset($privileges['orgAdmins']) && isset($privileges['orgAdmins'][$organizationId]) && isset($privileges['orgAdmins'][$organizationId][$roleId])){
				if($privileges['orgAdmins'][$organizationId][$roleId] == 2){
					return true;
				}
			}
			
			return $privileges['isVoAdmin'] || $isAdmin;
		}else{
			$privileges = $this->_getPrivileges();
			return $privileges['isVoAdmin'] || $privileges['isOrgAdmin'];
		}
		
		
	}
	
	function _isOrgAdminFor($organizationId){
		return $this->_isOrgAdmin($organizationId, 2) || $this->_isOrgAdmin($organizationId, 3);
	}
	
	
	
	
	function _getRoles($forceRefresh = false){
		
		if(!$forceRefresh){
			//read from session if available
			
			$roles = $this->Session->read('roles');
			
			if(isset($roles)){
				return $roles;
			}
		}
		
		//reread from the database and rebuild
		
		
		$this->loadModel('Member');
		$user = $this->_getUser();
	
		$query =  <<< EOD
SELECT  `Member`.`id` ,  `Member`.`user_id` ,  `Member`.`organization_id` ,  `Member`.`role_id` ,  `Member`.`status_id` ,  `User`.`id` , `User`.`first_name` ,  `User`.`last_name` ,  `User`.`username` ,   `Organization`.`id` ,  `Organization`.`name` , `ORG_Status`.`status`,   `Role`.`id` , `Role`.`name` ,  `Status`.`id` ,  `Status`.`status` 
FROM  `members` AS  `Member` 
LEFT JOIN  `users` AS  `User` ON (  `Member`.`user_id` =  `User`.`id` ) 
LEFT JOIN  `organizations` AS  `Organization` ON (  `Member`.`organization_id` =  `Organization`.`id` ) 
LEFT JOIN `statuses` AS  `ORG_Status` ON (  `Organization`.`status_id` =  `ORG_Status`.`id` ) 		
				
LEFT JOIN  `roles` AS  `Role` ON (  `Member`.`role_id` =  `Role`.`id` ) 
LEFT JOIN  `statuses` AS  `Status` ON (  `Member`.`status_id` =  `Status`.`id` ) 
WHERE  `Member`.`user_id` = ?			
EOD;
		
		$db = $this->Member->getDataSource();
		
		$roles = $db->fetchAll($query, array($user['id']));
		
		//write to session
		$this->Session->write('roles', $roles);
		
		//setup privileges based on roles
		$this->_setupPrivileges();
		
		return $roles;
		
	}
	
	function _setupPrivileges(){
		$roles = $this->_getRoles();
		
		$privileges = array();
		
		$isVoAdmin = false;
		$isOrgAdmin = false;
		
		$orgAdmins = null;
		
		
		foreach ($roles as $role){
				
			$id = $role['Role']['id'];				
			
			if($id == 1){
				$isVoAdmin = true;
			}
			else if($id == 2 || $id == 3){
				//is some type of org admin somehere
				$isOrgAdmin = true;
				
				if(!isset($orgAdmins)){
					$orgAdmins = array();
				}
				
				$orgAdmins[$role['Member']['organization_id']] = array();
				$orgAdmins[$role['Member']['organization_id']][$role['Member']['role_id']] = $role['Member']['status_id'];
				
			}
			
		}
		
		//it is enough to say he is a vo admin
		$privileges['isVoAdmin'] = $isVoAdmin;
		$privileges['isOrgAdmin'] = $isOrgAdmin;
		$privileges['orgAdmins'] = $orgAdmins;
		
		
		$this->Session->write('privileges', $privileges);
		
	}
	
	function _getPrivileges(){
		return $this->Session->read('privileges');
	}
	
	
	function _sendEmail($template, $to, $subject, $viewVarsArray, $text = ""){
		
		$Email = new CakeEmail ();
		$Email->config ( 'gmail' );
		$Email->sender ( 'capstoneconsultants3@gmail.com', 'Volunteer Omaha' );
		$Email->from ( array (
				'capstoneconsultants3@gmail.com' => 'Volunteer Omaha'
		) );
		$Email->to ($to);
		$Email->subject ( $subject );
		
		if(!empty($text)){
			$Email->emailFormat ( 'html' );
			$Email->send ($text);
		}else{
			$Email->emailFormat ( 'html' );
			$Email->template ( $template );
			$Email->viewVars ($viewVarsArray);
			$Email->send ();
		}
		
	}
	
	function _buildHoursQuery(){
		$query =  <<< EOD
	
	SELECT `Hour`.`id`, `Hour`.`status_id`, `Hour`.`user_id`, `Hour`.`registration_id`,
		`Hour`.`hours`, `Hour`.`school_status`, `Hour`.`created`, `Hour`.`modified`,
		`User`.`id`, `User`.`first_name`, `User`.`last_name`, `User`.`address`, `User`.`city`,
		`User`.`state_id`, `User`.`zip`, `User`.`phone`, `User`.`email`, `User`.`fax`,
		`User`.`username`, `User`.`password`, `User`.`activated`, `User`.`created`,
		`User`.`modified`, `User`.`photo`, `User`.`photo_dir`,
		 `Status`.`id`, `Status`.`status`, `Registration`.`id`, `Registration`.`user_id`,
		`Registration`.`status_id`, `Registration`.`event_id`, `Registration`.`start_time`,
		`Registration`.`end_time`, `Registration`.`comment`,
		`Event`.`name`,  `Event`.`id`, `Event`.`organization_id`, Organization.id, Organization.name
		FROM `hours` AS `Hour` LEFT JOIN `users` AS `User` ON (`Hour`.`user_id` = `User`.`id`)
		LEFT JOIN `statuses` AS `Status` ON (`Hour`.`status_id` = `Status`.`id`)
		LEFT JOIN `registrations` AS `Registration` ON (`Hour`.`registration_id` = `Registration`.`id`)
		INNER JOIN `events` AS `Event` ON (`Registration`.`event_id` = `Event`.`id`)
		INNER JOIN organizations AS Organization ON (Event.organization_id = Organization.id)
EOD;
		return $query;
	}

	function updateOrganizationStatus($orgId, $id, $status_id){
		$this->loadModel('Organization');
		$this->_updateStatus($this->Organization, $orgId, $id, $status_id);
	}
	
	function updateMemberStatus($orgId, $id, $status_id){
		$this->loadModel('Member');
		$this->_updateStatus($this->Member, $orgId, $id, $status_id);
	}
	
	function updateRegistrationStatus($orgId, $id, $status_id){
		$this->loadModel('Registration');
		$this->_updateStatus($this->Registration, $orgId, $id, $status_id);
	}
	
	function updateHourStatus($orgId, $id, $status_id){
		$this->loadModel('Hour');
		$this->_updateStatus($this->Hour, $orgId, $id, $status_id);
	}
	
	function _getOrgAdminPrimaryEmail($orgId){
		$query =  <<< EOD
		
		SELECT Member.user_id, User.email
		FROM members as Member
		INNER JOIN users as User on Member.user_id = User.id
		WHERE Member.organization_id = ? AND Member.role_id =  2;
		
EOD;
		$this->loadModel('Member');
		
		$db = $this->Member->getDataSource();
		
		$member = $db->fetchAll($query, array($orgId));
		
		return $member['0'];
	}
	
	function _getEmailByUserId($user_id){
		$query =  <<< EOD
	
		SELECT User.email
		FROM users as User
		WHERE User.id = ?
	
EOD;
		$this->loadModel('User');
	
		$db = $this->User->getDataSource();
	
		$user = $db->fetchAll($query, array($user_id));
	
		return $user['0'];
	}
	
	
	function _getBaseUrl(){
		return 'http://' . env ( 'SERVER_NAME' ) . '/volunteeromaha/';
	}
	
	function _setInterests(){
		$this->loadModel('Interest');
		$interests = $this->Interest->find('list', array('fields' => array('Interest.id', 'Interest.interests')));
		$this->set(compact('interests'));
	}
	
	function _getOrganizationsQuery(){
		$queryO =  <<< EOD
		
            SELECT  `Organization`.`id` ,  `Organization`.`name` ,  `Organization`.`short_description` , `Organization`.`photo` , `Organization`.`created`
			FROM  `organizations` AS  `Organization`
            ORDER BY Organization.created DESC
EOD;
		return $queryO;
	}
	
	function _getTopStudentsQuery(){
		//Top All Students
		$queryHr = <<< EOD

				SELECT
					members.role_id, User.id, User.first_name, User.last_name, User.photo, Hour.id, Hour.user_id, Hour.registration_id, SUM(Hour.hours) AS total
				FROM hours as Hour, members, users as User
				WHERE Hour.user_id = User.id
					AND members.user_id = User.id
					AND Hour.status_id = 2 /* only use approved hours */
					AND members.role_id = 4 /*only students*/ 
					AND User.leaderboardopt = 0 /*user permission to display information in leaderboard, default is 0 for yes*/
				GROUP BY Hour.user_id
				ORDER BY total desc
				
				
EOD;
		return $queryHr;
	}
	
	function _getTopSchoolsQuery(){
		//Top all School
		$querySHr = <<< EOD
		
SELECT Organization.id, Organization.name, Organization.photo, sum(Organization.hours) as total
FROM (

/* get all hours completed by a student in the school for any organization */
SELECT Organization.id, Organization.name, Organization.photo, Hour.hours
FROM organizations as Organization 
INNER JOIN
	members as Member on Organization.id = Member.organization_id
INNER JOIN
	hours as Hour on Member.user_id = Hour.user_id
INNER JOIN
	users as User on Hour.user_id = User.id    
WHERE 
	Organization.category_id = 1
	AND Member.role_id = 4
	AND Member.status_id = 2
	AND Hour.status_id = 2
    AND User.activated = 1
    AND User.leaderboardopt = 0


UNION

/* get all hours completed for events owned by the school */
SELECT Organization.id, Organization.name, Organization.photo, Hour.hours
FROM organizations as Organization 
INNER JOIN
	events as Event on Organization.id = Event.organization_id
INNER JOIN
	registrations as Registration on Event.id = Registration.event_id
INNER JOIN
	hours as Hour on Registration.id = Hour.registration_id
INNER JOIN
	users as User on Hour.user_id = User.id      
WHERE 
	Organization.category_id = 1
	AND Hour.status_id = 2
    AND User.activated = 1
    AND User.leaderboardopt = 0

    
) AS Organization

GROUP BY Organization.id
ORDER BY total desc
		
EOD;
		return $querySHr;
	}
	
	function _getTopOrganizationsQuery(){
		//Top all Organizations
		$queryOHr = <<< EOD
SELECT
			Organization.id, Organization.name,`Organization`.`photo` , SUM(Hour.hours) AS total
		FROM hours as Hour
			INNER JOIN users as User on Hour.user_id = User.id
			INNER JOIN registrations as Registration on Hour.registration_id = Registration.id
			INNER JOIN events as Event on Registration.event_id = Event.id
			INNER JOIN organizations as Organization on Event.organization_id = Organization.id
			INNER JOIN members on Organization.id = members.organization_id				
		WHERE
			Hour.status_id = 2 /* only use approved hours */
			AND Organization.category_id != 1 /* don't use schools */
			AND User.activated = 1 /* only use activated users */
		GROUP BY Organization.id
				
				
		ORDER BY total desc
		
		
EOD;
		return $queryOHr;
	}
	
}
