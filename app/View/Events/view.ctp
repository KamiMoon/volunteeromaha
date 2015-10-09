<div>
<ul id="crumbs">
<li><a href="/volunteeromaha/"><span class="glyphicon glyphicon-home"></span> Home</a></li>
<li><a href="/volunteeromaha/events"><i class="glyphicon glyphicon-tasks"></i> Events</a></li>
<li><i class="glyphicon glyphicon-bell"></i> <?php echo $event['Event']['name']; ?></li>
</ul>
<br>
</div>

<!-- First Row: consists of two col: image and event details -->
		<div class="row">
		
<!-- Event Image -->
			<div class="col-md-7">
						<div align="center" style="max-height:350px;overflow:auto;">
							<a><?php if(isset($event['Event']['photo'])){?><img src="/volunteeromaha/files/event/photo/<?php echo $event['Event']['id']?>/<?php echo $event['Event']['photo']?>"  alt="Event Profile Image" style="max-width:600px; max-height:350px" />
							   <?php }?>
							</a>	
						</div>
						<br>
			</div>
			
<!-- Event Contact Information: when, where who etc -->
			<div class="col-md-5">
				<div class="panel panel-warning">
					<div class="panel-heading"><span class="glyphicon glyphicon-briefcase"></span> EVENT DETAILS for <strong><?php echo $event['Event']['name']; ?></strong></div>
					<div class="panel-body">
					
					<table style="border-spacing: 10px; border-collapse: separate">
		    			<tr >
			    			<td style="vertical-align: top; width:10px"><label>Where:</label></td>
			    			<td>
			    				<address>
								  <?php echo $event['Event']['address']; ?><br>
								  <?php echo $event['Event']['city']; ?> 
								  
								  <?php if(isset($event['State']['abbrev'])){
								  	echo ', ';
								  }
								  ?>						  
								  <?php echo $event['State']['abbrev']; ?> <?php echo $event['Event']['zip']; ?>	
								 </address>	
							</td>	
						</tr>
			    		<tr>
			    			<td><label>When:</label></td>
			    			<td><?php echo "From -> ".date("l, F d, Y - g:i A", strtotime($event['Event']['start_time']))."<br>To ->  ".date("l, F d, Y - g:i A", strtotime($event['Event']['end_time']));?>
			    			</td> 
			    		</tr>
			    		<tr>
			    			<td style="vertical-align: top; width:10px"><label>Contact:</label></td>
			    			<td>
			    			
			    			<?php echo $event['Event']['contact_first_name']; ?> <?php echo $event['Event']['contact_last_name']; ?> <br>
			    			<a href="mailto:<?php echo $event['Event']['email']; ?>"><?php echo $event['Event']['email']; ?></a><br>
			    			<?php $phone_number= $event['Event']['phone']; 
			    			echo substr($phone_number, 0,3)."-".substr($phone_number,3,3). "-". substr($phone_number,-4);
			    			?>
			    			
			    			</td>
			    		</tr>
			    		
			    		<?php if($this->Auth->isLoggedIn()){ ?>
			    		<tr>
			    			<td><label>Register:</label></td>
			    			<td><a href="/volunteeromaha/registrations/add/<?php echo $event['Event']['id']; ?>"> Volunteer NOW!!!</a></td>
			    		</tr>
			    		<?php }?>
			    		
			    		<tr>
			    			<td><label><small>Posted on:</small></label></td>
			    			<td><?php echo date ("F d, Y", strtotime($event['Event']['created'])) ?></td>
			    		</tr>
			    		
			    		<?php if($this->Auth->isOrgAdminFor($event['Event']['organization_id']) ){ ?>
			    		<tr>
			    			<td>
								<button type="button" class="btn btn-default btn-sm" id="buttonlink"><span class="glyphicon glyphicon-pencil"></span> <?php echo $this->Html->link('Edit', array('action' => 'edit', $event['Event']['id'])); ?></button>
					 		</td>
					 		<td>	
								<button type="button" class="btn btn-default btn-sm" id="buttonlink"><span class="glyphicon glyphicon-pencil"></span> <?php echo $this->Html->link('Admin', array('action' => 'admin', $event['Event']['id'])); ?></button>
							</td>
			    		</tr>
			    		<?php ;}?>
	    	</table>
</div>
</div>
</div>			
</div>			
		<hr>
		
<!-- Second Row: consists of Event Description and organization short_Desciption -->
<div class="row">
	<!-- TODO make this a fixed height, any additional content needs to be scrollable -->
	<!-- EVENT Description  -->
			<div class="col-md-7" >
				<div class="panel panel-warning">
						<div class="panel-heading"><span class="glyphicon glyphicon-th-list"></span><strong> Event Description</strong></div>
					<div class="panel-body" >
						<pre style="height: 390px"><?php echo $event['Event']['description']; ?></pre>
					</div>	
				</div>
			</div>

<!-- Registration portlet -->		
		
				
	<div class="col-md-5">
		<?php 
				if($this->Auth->isLoggedIn()){
								
				if($registration_mode){ 
					
				?>
		<div class="panel panel-warning" >
				
				<div class="panel-heading"><span class="glyphicon glyphicon-registration-mark"></span> 
							<b><?php 
								if($registration_mode == "ADD"){
									echo "Register for ".$event['Event']['name'];	
								}else{
									echo "Current Registration for ".$event['Event']['name'];
								}
							?>
							</b>
				</div>
				<div class="panel-body" style="height: 425px">
					<br>
					<br>
							<?php 
						if($registration_mode == "ADD"){
							echo $this->Form->create('Registration', array(
									'url' => array('controller' => 'registrations', 'action' => 'add', $event['Event']['id'])
							));
							echo $this->Form->input('user_id', array('type' => 'hidden','value' => $user_id));
							echo $this->Form->input('event_id', array('type' => 'hidden','value' => $event['Event']['id']));
							echo $this->Form->datePicker('start_time');
							echo $this->Form->datePicker('end_time');
							echo $this->Form->input('comment', array('type' => 'textarea', 'rows' => '5', 'cols' => '5'));
							echo $this->Form->end('Save');
						}
						else{
	
							echo '<label>Start Time: &nbsp;</label>' . date ("l F d, Y", strtotime($registration['Registration']['start_time'])); '<br /><br />';
							echo '<label>End Time: &nbsp;</label>' . $registration['Registration']['end_time'] . '<br /><br />';
							echo '<label>Comment: &nbsp;</label>' . $registration['Registration']['comment'] . '<br /><br />';
						}?>
				</div>
		</div>
					<?php }}
					else {?>
					<div class="panel panel-warning">
						<div class="panel-heading"><span class="glyphicon glyphicon-registration-mark"></span><b> Register for <?php echo $event['Event']['name']; ?></b>
						</div>
						<div class="panel-body" style="height: 425px">
						<br><br><br><br><br><br><br>
						<p align="center" style="font-size:24px">Please 
							<b><a href="/volunteeromaha/login">Login</a></b> or 
							<b><a href="/volunteeromaha/register">Sign up</a></b><br>
						to Participate in this event.
						</p>
						</div>
					</div>
					<?php } ?>
		
	</div>
			
			
</div>
		<hr>
<!-- Third row: last row: Consists of MAp and Registration protlet -->

		
<div class="row">
<!-- Make this possibly long description as the map col is a fixed set -->
<!-- ORGANIZATION information use 'short_description' -->
		<!-- ??What if there are multiple organizations sponsoring? soln- include only the primary??-->
			<div class="col-md-7">
				<div class="panel panel-default">
					<div class="panel-heading"><span class="glyphicon glyphicon-star"></span>
					  Sponsor Organization: <strong><a href="/volunteeromaha/organizations/view/<?php echo $event['Organization']['id']?>"><?php echo $event['Organization']['name']?></a></strong>
					</div>
					<div class="panel-body" align="center" style="word-wrap:normal; vertical-align:center">
						<pre style="height: 390px"><?php echo $event['Organization']['long_description']; ?></pre>
					</div>
				</div>
			</div>
<!--  MAP -->
			<div class="col-md-5">
				<div class="panel panel-warning">
					<div class="panel-heading"><span class="glyphicon glyphicon-map-marker"></span> MAP</div>
					<div class="panel-body">
						<?php if(isset($mapAddress)) {?>
					    	<input id="mapAddress" type="hidden" value="<?php echo $mapAddress; ?>" />
							<div id="map-canvas" style="height: 390px; box-shadow: rgb(190, 190, 190) 0px 0px 5px 1px;"></div>
			   			 <?php }?>
					</div>
				</div>
			</div>

			
				
</div>
