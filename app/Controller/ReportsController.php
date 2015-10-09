<?php
class ReportsController extends AppController {

	public function beforeFilter() {
		parent::beforeFilter ();
	
		$this->Auth->allow('index');
	}
	public function index() {
		$this->loadModel('Organization');
		$this->loadModel('Event');
		
		$queryParams = $this->request->query;
		
		$modelName = 'Event';
		$searchMode = 'events';
		
		$startTime = '';
		$endTime = '';
		$reportorg = $this->Organization->find('list', array('condition'=> 'Organization.name'));
		$this->set('reportorg', $reportorg);
		
		$reportevent = $this->Event->find('list', array('condition' => 'Event.name'));
		$this->set('reportevent', $reportevent);
		
		if($queryParams){
			
			$searchMode = $queryParams['search_for'];
			
			if (! $this->request->data) {
				$this->request->data = $queryParams;
				//Debugger::dump($this->request->data);
			}
			
			if($searchMode == 'organizations'){
				$modelName = 'Organization';
				$this->request->query['search_for'] = '';
			}
			else {
				$modelName = 'Event';
				$this->request->query['search_for'] = '';
				$startTime = $this->parseDatePickerField('start_time');
				$endTime = $this->parseDatePickerField('end_time');
			}
			
			$conditions = $this->_buildSearchConditions($modelName);
			
			if($searchMode == 'organizations'){
				$conditions[$modelName . '.' . 'status_id' ] = '2';
				$organizations = $this->Organization->find('all', array(
						'conditions' => $conditions,
						'order' => array('Organization.id' => 'asc')));
							
						
					
				$this->set('organizations',  $organizations);
				$this->set('events',  array());
			}
			else{
					
				if (!empty($startTime)){
			
					$conditions['Event.start_time >= ?'] = array($startTime);
				}
				
				if (!empty($endTime)){
						
					$conditions['Event.end_time <= ?'] = array($endTime);
				}
				
					
				$events = $this->Event->find('all', array(
						'conditions' => $conditions,
						'order' => array('Event.id' => 'asc')));
	
				
				
				$this->set('events',  $events);
				$this->set('organizations',  array());
			}
		}else{
			$this->set('organizations',  array());
			$this->set('events',  array());
		}
		
		
		$this->set('searchMode',  $searchMode);
		
		$this->set('startTime',  $startTime);
		$this->set('endTime',  $endTime);
		}
		

}