<?php
class OpportunitiesController extends AppController {
	
	public function beforeFilter() {
		parent::beforeFilter ();
	
		$this->Auth->allow('index');
	}
	
	function _getDistance($latitude, $longitude, $model, $modelString){
		$apiUrl = "https://maps.googleapis.com/maps/api/distancematrix/json?";
		//$apiUrl .= "origins=" . $this->request->data['latitude'] . "," . $this->request->data['longitude'];
		$apiUrl .= "origins=" . $latitude . "," . $longitude;
		$apiUrl .= "&destinations=" . urlencode($model[$modelString]['address'] . ", " . $model[$modelString]['city'] . ", " . $model['State']['abbrev']);
		$apiUrl .= "&mode=driving&language=en-EN&sensor=true&units=imperial";
		
		$geocode = file_get_contents($apiUrl);
		
		$output= json_decode($geocode);
		
		if(isset($output->rows[0]->elements[0]->distance)){
			return $output->rows[0]->elements[0]->distance->text;
		}else{
			return "";
		}
	}
	
	public function index() {
		
		$this->loadModel('Organization');
		$this->loadModel('Event');
		
		$queryParams = $this->request->query;
		
		$modelName = 'Event';
		$searchMode = 'events';
		
		$latitude = '';
		$longitude = '';
		
		$keyword = '';
		$name = '';
		
		$searchDistance = '';
		
		$category_id = '';
	
		$startTime = '';
		$endTime = '';
		
		if($queryParams){
			
			$searchMode = $queryParams['search_for'];
			
			if (! $this->request->data) {
				$this->request->data = $queryParams;
				//Debugger::dump($this->request->data);
			}
			
			if(!empty($queryParams['keyword'])){
				$keyword = $queryParams['keyword'];
			}
			
			if(!empty($queryParams['name'])){
				$name = $queryParams['name'];
			}
			
			if(!empty($queryParams['category_id'])){
				$category_id = $queryParams['category_id'];
			}
	
			if(!empty($queryParams['latitude'])){
				$latitude = $this->request->data['latitude'] =$queryParams['latitude'];
				$this->request->query['latitude'] = '';
			}
			
			if(!empty($queryParams['longitude'])){
				$longitude = $this->request->data['longitude'] =$queryParams['longitude'];
				$this->request->query['longitude'] = '';
			}
			
			
			if(!empty($queryParams['distance'])){
				$searchDistance = $queryParams['distance'];
				$this->request->query['distance'] = '';
			}
			
			if($searchMode == 'organizations'){
				$modelName = 'Organization';
				$this->request->query['search_for'] = '';
			}else {
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
					
					
				if(!empty($latitude) && !empty($longitude)){
						
					$x = 0;
						
					foreach ($organizations as $organization) {
						$distance = $this->_getDistance($latitude, $longitude, $organization, 'Organization');
						$organizations[$x]['Organization']['distance'] = $distance;
						$x++;
					}
						
				}
				
				//filter by distance if needed
				if(!empty($searchDistance)){
					foreach ($organizations as $key => $value) {
						if($value['Organization']['distance'] > $searchDistance) {
							unset($organizations[$key]);
						}
					}
				}
				
					
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
					
				if(!empty($latitude) && !empty($longitude)){
			
					$x = 0;
			
					foreach ($events as $event) {
						$distance = $this->_getDistance($latitude, $longitude, $event, 'Event');
						$events[$x]['Event']['distance'] = $distance;
						$x++;
					}
			
				}
					
				//filter by distance if needed
				if(!empty($searchDistance)){
					foreach ($events as $key => $value) {
						if($value['Event']['distance'] > $searchDistance) {
							unset($events[$key]);
						}
					}
				}
				
				
				$this->set('events',  $events);
				$this->set('organizations',  array());
			}
		}else{
			$this->set('organizations',  array());
			$this->set('events',  array());
		}
		
		
		$this->set('searchMode',  $searchMode);
		$this->set('keyword',  $keyword);
		$this->set('name',  $name);
		$this->set('searchDistance',  $searchDistance);
		$this->set('category_id',  $category_id);
		
		$db = $this->Organization->getDataSource();
		//if no start time defualt it to the minimum
		if(!$startTime){
			$startTime = $db->fetchAll('SELECT MIN(start_time) as startTime FROM events', array());
			$startTime = $startTime[0][0]['startTime'];
		}
		
		if(!$endTime){
			$endTime = $db->fetchAll('SELECT MAX(end_time) as endTime FROM events', array());
			$endTime = $endTime[0][0]['endTime'];
		}
		
		$this->set('startTime',  $startTime);
		$this->set('endTime',  $endTime);
		
		$this->_setStateDropDown();
		$this->_setInterests();
	
		$categories = $this->Organization->Category->find('list');
		$this->set ( compact ( 'categories' ) );
		
		}
		
		function _setCategoryDropDown(){
		
		
			$categories = $this->Organization->Category->find('list', array(
					'fields' => array('Category.id', 'Category.name')
			));
		
		
			$this->set ( compact ( 'categories' ) );
		}
	}