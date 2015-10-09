<?php
class LeaderboardsController extends AppController {
	public function beforeFilter() {
		parent::beforeFilter ();
	
	
		// these are all public and allowed without login
		$this->Auth->allow ( 'index' );
	
	
	}
	
	public function index(){
		$this->loadModel('Hour');
		
		$db = $this->Hour->getDataSource();
		$organizations = $db->fetchAll($this->_getOrganizationsQuery(), array());
		$this->set('organizations', $organizations);
		
		$hours = $db->fetchAll($this->_getTopStudentsQuery() , array());
		$this->set('hoursList', $hours);

		$schoolsHr = $db->fetchAll($this->_getTopSchoolsQuery(), array());
		$this->set('schoolsHr', $schoolsHr);

		$organizationsHr = $db->fetchAll($this->_getTopOrganizationsQuery(), array());
		$this->set('organizationsHr', $organizationsHr);
	}
}