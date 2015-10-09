<?php   ?>

<div>
<ul id="crumbs">
<li><a href="/volunteeromaha/"><span class="glyphicon glyphicon-home"></span> Home</a></li>
<li><i class="glyphicon glyphicon-check"></i> Volunteer Opportunities</li>
</ul>
<br>
</div>
<div class="row">
<div class="col-md-6">
<h1>Find Volunteer Opportunities</h1>
</div>
<div class="col-md-4">
					<img src="img/Omaha.png" height="100px">
				</div>
<div class="col-md=2">
				</div>
</div>

<br>
 <?php echo $this->Form->create('Events', array('type' => 'get', 'novalidate' => true));?>
<div class="row">
	
	<div class="col-md-6">
	<div class="well" >

<!-- Nav tabs -->

			<br>

			<ul class="nav nav-tabs">
			
			<li <?php if($searchMode == 'events'){ echo 'class="active"';}?>><a href="#events" data-toggle="tab"><b>Events</b></a></li>
  			<li <?php if($searchMode == 'organizations'){ echo 'class="active"';}?>><a href="#organizations" data-toggle="tab"><b>Organizations / Schools</b></a></li>
			</ul>

			<!-- Tab panes -->
			<div class="tab-content">
			  <div class="tab-pane <?php if($searchMode == 'events'){ echo 'active';}?>" id="events">
			  <br>
			  	
			  	  	<input type="hidden" name="latitude" class="latitude" value="" />
			  	  	<input type="hidden" name="longitude" class="longitude" value="" />
			  	  
			  	  <div class="row">
					  <div class="col-md-1">
			  	  	  <?php echo "<p></p>";?>
			  	  	  </div>
					  
					  <div class="col-md-10">
					  	<?php echo $this->Form->input('search_for', array('type' => 'hidden','value' => 'events'));?>
				  		<?php echo $this->Form->input('keyword', array('label'=>'Keyword: ', 'value' => $keyword));?>
					  </div>
					  <div class="col-md-1"></div>
				  </div>
				  
				  <div class="row">
				   	  
				   	  <div class="col-md-1">
			  	  	  <?php echo "<p></p>";?>
			  	  	  </div>
					  <div class="col-md-10">
					  <?php echo $this->Form->input('name', array('label'=>'Name: ','value' => $name));?>
					  
					  </div>
					  <div class="col-md-1"></div>
				  </div>
				  
				  <div class="row">
				  	  <div class="col-md-1">
			  	  	  <?php echo "<p></p>";?>
			  	  	  </div>
					  <div class="col-md-10">
				  	  <?php echo $this->Form->input('distance', array('label'=>'Distance: ', 'value' => $searchDistance));?>
				  	  </div>
				  	  <div class="col-md-1"></div>
				  </div>
			      
			      
				  <div class ="row">
				  	  <div class="col-md-1">
			  	  	  <?php echo "<p></p>";?>
			  	  	  </div>
				      <div class="col-md-10">
				      <?php  echo $this->Form->datePicker('start_time', array('label'=>'Start Date:','value'=> $startTime));?>
				      </div>
				      <div class="col-md-1"></div>
			      </div>
			      <div class ="row">
				  	  <div class="col-md-1">
			  	  	  <?php echo "<p></p>";?>
			  	  	  </div>
				      <div class="col-md-10">
				      <?php  echo $this->Form->datePicker('end_time', array('label'=>'End Date:','value'=> $endTime));?>
				      </div>
				      <div class="col-md-1"></div>
			      </div>
			      <div class ="row">
				  	  <div class="col-md-1">
			  	  	  <?php echo "<p></p>";?>
			  	  	  </div>
				      <div class="col-md-10">
					      <?php   echo $this->Form->input('Interest', array(
						    'label' => 'Interests',
						    'type' => 'select',
						    'multiple' => true, // or 'checkbox' if you want a set of checkboxes
						    'options' => $interests,
							'empty' => ''
						));?>
				      </div>
				      <div class="col-md-1"></div>
			      </div>
			      
			      <div class="row">
			      	  <div class="col-md-2">
			  	  	  <?php echo "<p></p>";?>
			  	  	  </div>
				      <div class="col-md-2">
					  <?php echo $this->Form->end('Search');?> 
					  </div>
					   <div class="col-md-2">
					
					  <button type="button" class="btn btn-default" style="width: 80px; height: 35px">
  					  <a href="/volunteeromaha/opportunities">Reset</a>
					  </button>
					  
					  </div>
				      <div class="col-md-6">
				      <?php echo "<p></p>";?>
				      </div>
			      </div>
			      
			      
			  </div>
			  
			  <div class="tab-pane <?php if($searchMode == 'organizations'){ echo 'active';}?>" id="organizations">
			  
    			  <br>
			  	  <?php echo $this->Form->create('Organizations', array('type' => 'get', 'novalidate' => true));?>
			  	  
			  	  	<input type="hidden" name="latitude" class="latitude" value="" />
			  	  	<input type="hidden" name="longitude" class="longitude" value="" />
			  	  
			  	  <div class="row">
			  	  	  <div class="col-md-1">
			  	  	  <?php echo "<p></p>";?>
			  	  	  </div>
					  <div class="col-md-10">
					  	<?php echo $this->Form->input('search_for', array('type' => 'hidden','value' => 'organizations'));?>
				  		<?php echo $this->Form->input('keyword', array('label'=>'Keyword: ', 'value' => $keyword));?>
					  </div>
					  <div class="col-md-1"></div>
				  </div>
				  <div class="row">
				  	  <div class="col-md-1">
			  	  	  <?php echo "<p></p>";?>
			  	  	  </div>
					  <div class="col-md-10">
					  <?php echo $this->Form->input('name', array('label'=>'Name: ', 'value' => $name));?>
					  <div class="col-md-1"></div>
					  </div>
				   </div>
				   <div class="row">
				   	  <div class="col-md-1">
			  	  	  <?php echo "<p></p>";?>
			  	  	  </div>
					  <div class="col-md-10">
				  	  <?php echo $this->Form->input('distance', array('label'=>'Distance: ', 'value' => $searchDistance));?>
				  	  </div>
				  	  <div class="col-md-1"></div>
			       </div>
			      <div class="row">
			      	  <div class="col-md-1">
			  	  	  <?php echo "<p></p>";?>
			  	  	  </div>
				      <div class="col-md-10">
				      <?php echo $this->Form->input('category_id', array('empty'=>'','label'=>'Category: ', 'value' => $category_id));?>
				      </div>
				      <div class="col-md-1"></div>
			      </div>
			      
			      <div class ="row">
				  	  <div class="col-md-1">
			  	  	  <?php echo "<p></p>";?>
			  	  	  </div>
				      <div class="col-md-10">
					      <?php   echo $this->Form->input('Interest', array(
						    'label' => 'Interests',
						    'type' => 'select',
						    'multiple' => true, // or 'checkbox' if you want a set of checkboxes
						    'options' => $interests,
							'empty' => ''
						));?>
				      </div>
				      <div class="col-md-1"></div>
			      </div>
			      
			     <div class="row">
			      	  <div class="col-md-2">
			  	  	  <?php echo "<p></p>";?>
			  	  	  </div>
				      <div class="col-md-2">
					  <?php echo $this->Form->end('Search');?> 
					  </div>
					   <div class="col-md-2">
					  <button type="button" class="btn btn-default" style="width: 80px; height: 35px">
  					  <a href="/volunteeromaha/opportunities">Reset</a>
					  </button>
					  </div>
				      <div class="col-md-6">
				      <?php echo "<p></p>";?>
				      </div>
			      </div>
			     
			  	
			  </div>
			</div>
	</div>
	</div>
	<div class="col-md-6">

				      <!-- Map Goes Here! -->
	
	<?php 
    
    if($searchMode == 'organizations'){

		foreach($organizations as $organization): ?>
		
		<?php if($organization ['Organization']['address'] && $organization ['Organization']['city'] && $organization ['State']['abbrev']) {?>
			<input class="googleMapAddresses" type="hidden" 
				value="<?php echo $organization ['Organization']['address'] . ", " . $organization ['Organization']['city'] . ", " . $organization ['State']['abbrev'];?>" 
				data-name="<?php echo $organization['Organization']['name']; ?>"
				data-description="<?php echo $organization['Organization']['short_description']; ?>"
				data-photo="/volunteeromaha/files/organization/photo/<?php echo $organization['Organization']['id'];?>/thumb_<?php echo $organization['Organization']['photo'];?>"
				data-link="/volunteeromaha/organizations/view/<?php echo $organization['Organization']['id']; ?>"	
			/>
		<?php } ?>
		
	<?php endforeach;
	
	}
	else{
	
		foreach($events as $event): ?>
		
		<?php if($event['Event']['address'] && $event['Event']['city'] && $event['State']['abbrev']) {?>
			<input class="googleMapAddresses" type="hidden" value="<?php echo $event['Event']['address'] . ", " . $event['Event']['city'] . ", " . $event['State']['abbrev']; ?>"
				data-name="<?php echo $event['Event']['name']; ?>"
				data-description="<?php echo $event['Event']['description']; ?>"
				data-photo="/volunteeromaha/files/event/photo/<?php echo $event['Event']['id'];?>/thumb_<?php echo $event['Event']['photo'];?>"
				data-link="/volunteeromaha/events/view/<?php echo $event['Event']['id']; ?>"	
			 />
		<?php } ?>
		
	<?php endforeach; 
	}
	?>
	
	<div id="map-canvas" style="height: 450px; box-shadow: rgb(190, 190, 190) 0px 0px 5px 1px"></div>
	<!-- Map Ends Here! -->	 
	</div>
</div>
<br>

<?php 
    if($searchMode == 'organizations'){

?>
<table class="table" >
	<thead>
    <tr>
        <th></th>
        <th>
        <div class="row">
        	<div class="col-md-3">
        	</div>
        	<div class="col-md-9">
        	Search Results
        	</div>
        </div>
        </th>
        <th></th>
        <th>Category</th>
        <th>Interests</th>
        <th></th>
        <th>Miles Away</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
<?php 

	}
	else{

?>
<table class="table" >
	<thead>
    <tr>
    	<th></th>
        <th>
        <div class="row">
        	<div class="col-md-3">
        	</div>
        	<div class="col-md-9">
        	Search Results
        	</div>
        </div>
        </th>
        <th></th>
        <th>Start Date</th>
        <th></th>
        <th>End Date</th>
        <th>Interests</th>
        <th></th>
        <th>Miles Away</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
<?php 

	}

?>

    <?php 
    $i=1;
    if($searchMode == 'organizations'){
foreach($organizations as $organization): ?>

    <tr>
        <td></td>
        <td>
        <div class="row">
        <div class="col-md-3" align="center">
        <img src="/volunteeromaha/files/organization/photo/<?php echo $organization['Organization']['id'];?>/thumb_<?php echo $organization['Organization']['photo'];?>"  alt="Profile Image" />
        </div>
        <div class="col-md-9">
        	<div class="row">
    		<b><?php echo $organization['Organization']['name']; ?></b>
        	</div>
        	<div class="row" align="justify">
        	<?php echo substr($organization['Organization']['long_description'],0,220);?>...<br>
        	<a href="/volunteeromaha/organizations/view/<?php echo $organization['Organization']['id'];?>" ><button type="button" class="btn btn-link btn-sm"><span class="glyphicon glyphicon-plus"></span> More</button></a>
        	</div>
        </div>
        </div>
        </td>
        <td></td>
        <td><strong><?php echo $organization['Category']['name']; ?></strong></td>
        <td>
        	<?php foreach ($organization['Interest'] as $orgInterest): ?>
        		<b><?php echo $orgInterest['interests']; ?></b><br>
        	<?php endforeach; ?>
        </td>
        <td>
        
        	<div class="mapstyle">
				<p align="center" class="textinside">
					<?php 
					if(isset($organization['Organization']['distance'])){
						echo $organization['Organization']['distance']; 
					}
					?>
				</p>
			</div>
        </td>
        <td></td>
    </tr>
    
    
    <?php endforeach;?>

    <?php 

	}
	else{

foreach($events as $event): ?>

    <tr>
        <td></td>
        <td>
        <div class="row">
        <div class="col-md-3" align="center">
        <img src="/volunteeromaha/files/event/photo/<?php echo $event['Event']['id'];?>/thumb_<?php echo $event['Event']['photo'];?>"  alt="Profile Image" />
        </div>
        <div class="col-md-9">
        	<div class="row">
    		<b><?php echo $event['Event']['name']; ?></b>
        	</div>
        	<div class="row" align="justify">
        	<?php echo substr($event['Event']['description'], 0, 220);?>...<br>
        	<a href="/volunteeromaha/events/view/<?php echo $event['Event']['id'];?>" ><button type="button" class="btn btn-link btn-sm"><span class="glyphicon glyphicon-plus"></span> More</button></a>
        	</div>
        </div>
        </div>
        </td>
        <td></td>
        <td><?php echo $event['Event']['start_time']; ?></td>
        <td></td>
        <td><?php echo $event['Event']['end_time']; ?></td>
        <td>
        	<?php foreach ($event['Interest'] as $eventInterest): ?>
        		<?php echo $eventInterest['interests']; ?>
        	<?php endforeach; ?>
        </td>
        <td>
        
	        <div class="mapstyle">
					<p align="center" class="textinside">
					<?php
					if(isset($event['Event']['distance'])){
						echo $event['Event']['distance']; 
					}		
					?>
					</p>
			</div>
        </td>
        <td></td>
    </tr>
    
    <?php endforeach;?>
<?php 
}
?> 
</tbody>
</table>
<br />

<script>
$(function() {
	navigator.geolocation.getCurrentPosition(function(position){
		$(".latitude").each(function(){
			$(this).val(position.coords.latitude);
		});
		$(".longitude").each(function(){
			$(this).val(position.coords.longitude);
		});
	});

});
</script>
