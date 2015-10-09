
<div class="container-fluid">
	
<!-- First Row contains Profile Name and Picture of Omaha -->
	
	<div class="row">
		<div class="col-md-6">
			<h1>Profile for <strong><?php echo $user['User']['first_name']."&nbsp;".$user['User']['last_name']; ?></strong></h1> 
		</div>
		<div class="col-md-6">
			<img src="/volunteeromaha/img/Omaha.png" width="400px">
		</div>
	</div>
<br>

<!-- Second Row Divide into three col of 2, 5, 5 -->
  <div class="row">
  
 	<!-- First col will have all the administrative items -->
 	<div class="col-md-6">
 		<div class ="row">
 		
 		<div class ="col-md-4">
		
 		<div class ="row">
 		
 		  <div class="panel panel-info">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
		          <span	class="glyphicon glyphicon-globe"></span> Organizations <span class =" spangglyph glyphicon glyphicon-chevron-down"></span>
		        </a>
		      </h4>
		    </div>
		    <div id="collapseOne" class="panel-collapse">
		      <div class="panel-body">
		       <ul>
		       	<li><a href="/volunteeromaha/organizations/index">Search for Organizations</a>
					<br/><br/>
				</li>
		       	<li><a href="/volunteeromaha/organizations/add">Create a New Organization</a>
				</li>
		       </ul>
		       </div>
		    </div>
  			</div>    
		</div>
	  	<hr>
	  	
	  	<div class="row">
	  		 <div class="panel panel-success">
				    <div class="panel-heading">
				      <h4 class="panel-title">
				       <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"> <span class="glyphicon glyphicon-ok-sign"></span> 
				          My Activities 
				          <span class ="spangglyph glyphicon glyphicon-chevron-down"></span>
				        </a>
				      </h4>
				    </div>
				    <div id="collapseTwo" class="panel-collapse">
				      <div class="panel-body">
				       <ul>
				       	<li><a href="/volunteeromaha/events">Search for Events</a>
					    <br />  <br />
						</li>
				       	<li><a href="/volunteeromaha/registrations?user_id=<?php echo $user['User']['id']; ?>">My Registrations</a>
				    	<br />  <br />
						</li>
						<li><a href="/volunteeromaha/hours?user_id=<?php echo $user['User']['id']; ?>">View Hours</a> 
						</li>
				       </ul>
				       </div>
				    </div>
  			</div> 
		</div>
		<hr>
		<?php if($this->Auth->isOrgAdmin()){ ?>
		 
		<div class ="row">
			<div class="panel panel-primary">
				    <div class="panel-heading">
				      <h4 class="panel-title">
				         <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
				         	<span class="glyphicon glyphicon-list"></span> 
				         	Administer
				         	<span class =" spangglyph glyphicon glyphicon-chevron-down"></span> </a>
				      </h4>
				    </div>
				    <div id="collapseThree" class="panel-collapse">
				      <div class="panel-body">
				     
				       <ul>
				       <?php if ($this->Auth->isVoAdmin()){?>
				       	<li>
				       		<a href="/volunteeromaha/users">Search for Users</a><br /><br />
						</li>
						<li>
							<a href="/volunteeromaha/interests">Administer Interests</a><br /><br />
						</li>
				       	<li>
				    		<a href="/volunteeromaha/organizations">Administer Organizations</a><br /><br />
						</li>
						<?php }?>
						<li>
							<a href="/volunteeromaha/events">Administer Events</a><br /><br />
						</li>
						<li>
							<a href="/volunteeromaha/registrations">Administer Registrations</a><br /><br />
						</li>
						<li>
							<a href="/volunteeromaha/hours">Administer Hours</a><br /><br />
						</li>
						
				       </ul>
				      </div>
				    </div>
  			</div> 
		</div>
		
		<hr>
		 <?php  }?>
	</div>

 	
<!-- Second Col : Profile Information -->
    <div class="col-md-8">
    
    	<div class="panel panel-danger">
		  <div class="panel-heading">
		    <h3 class="panel-title"><i class="glyphicon glyphicon-user"></i> Basic Info</h3>
		  </div>
		  <div class="panel-body">
		  
		  	<center>
		  	<?php
			if (!empty($user['User']['photo'])) 
				{

				echo "<img src='/volunteeromaha/files/user/photo/".$user['User']['id']. "/thumb_".$user['User']['photo']."' width='100px' height='100px' class='img-thumbnail'> ";
						 
				} 
				else {
					echo "&nbsp;&nbsp;&nbsp;<font size='45' class='glyphicon glyphicon-user'></font>";
				}
		 	?>
		 	</center>
		 	<br>
		  	<div class ="row">
		  		<div class = "col-md-4">
		  			<label>Name:</label>
		  		</div>
		  		<div class = "col-md-8">
		  			<?php echo $user['User']['first_name']; ?> <?php echo $user['User']['last_name']; ?>
		  		</div>
		  	</div>
		  	<div class ="row">
		  		<div class = "col-md-4">
		  			<label>Username:</label>
		  		</div>
		  		<div class = "col-md-8">
		  			<?php echo $user['User']['username']; ?>
		  		</div>
		  	</div>
		  	<div class ="row">
		  		<div class = "col-md-4">
					<label>Email:</label>
		  		</div>
		  		<div class = "col-md-8">
					<a href="mailto:<?php echo $user['User']['email']; ?>"><?php echo $user['User']['email']; ?></a>
		  		</div>
		  	</div>
		  	<div class ="row">
		  		<div class = "col-md-4">
					<label>Address:</label>
		  		</div>
		  		<div class = "col-md-8" style="vertical-align: top;">
					
						  <?php echo $user['User']['address']; ?><br>
						  <?php echo $user['User']['city']; ?> 
						  
						  <?php if(isset($user['State']['abbrev'])){
						  	echo ', ';
						  }
						  ?>						  
						  
						  <?php echo $user['State']['abbrev']; ?> <?php echo $user['User']['zip']; ?>	
		  		</div>
		  	</div>
		  	<div class ="row">
		  		<div class = "col-md-4">
					<label>Phone:</label>
		  		</div>
		  		<div class = "col-md-8">
					<?php $phone_number= $user['User']['phone']; 
			    			echo substr($phone_number, 0,3);echo "-"; echo substr($phone_number,3,3); echo "-"; echo substr($phone_number,-4);
			    		?>
		  		</div>
		  	</div>
		 	<div class ="row">
		  		<div class = "col-md-4">
					<label><?php if(isset($user['User']['fax'])){ echo "Fax:" ?></label>
		  		</div>
		  		<div class = "col-md-8">
					<?php echo $user['User']['fax']; }?>
		  		</div>
		  	</div>
		  	<div class ="row">
		  		<div class = "col-md-4">
					<label>Joined:</label>
		  		</div>
		  		<div class = "col-md-8">
					<?php  echo date ("F d, Y", strtotime($user['User']['created'])) ?>
		  		</div>
		  	</div>
		  	<?php if($this->Auth->isMine($user['User']['id'])){ ?>
		  	<div class ="row">
		  		<div class = "col-md-4">
					<label>Include in Leaderboard:</label>
		  		</div>
		  		<div class = "col-md-8">
					<?php if($user['User']['leaderboardopt'] == 0){ 
	    					echo "YES";
	    					} else { 
							echo "NO";
							}; ?>
		  		</div>
		  	</div>
		  	<div class ="row">
		  		<div class = "col-md-4">
					<label>Interests:</label>
		  		</div>
		  		<div class = "col-md-8">
					<?php 
	    			$interests = $user['Interest'];
	    			foreach ($interests as $interest){
	    			echo $interest['interests'].'<br>';
	    			}
	    			?>
		  		</div>
		  	</div> 
		  	<div class ="row">
		  		<div class = "col-md-4">
			       <button type="button" class="btn btn-default btn-sm">
			       		<span class="glyphicon glyphicon-pencil"></span> 
			       		<?php echo $this->Html->link('Edit', array('action' => 'edit', $user['User']['id'])); ?>
			       </button>	    		
		  		
		  		</div>
		  		<div class = "col-md-8">
		  		</div>
		  	</div>	
	    		<?php }?>
		</div>
		</div>
    </div>
  </div>
  
 <!-- Insert map here -->  
 <?php if(isset($mapAddress)) {?>
  <div class ="row">
    	<div class = "col-md-12">
    	<div class="panel panel-warning">
    	<div class ="panel-heading">
    		<h3 class="panel-title"><i class="glyphicon glyphicon-globe"></i> Location</h3>
    	</div>
		  <div class="panel-body">
    		
	    	<input id="mapAddress" type="hidden" value="<?php echo $mapAddress; ?>" />
			<div id="map-canvas" style="height: 400px; box-shadow: rgb(190, 190, 190) 0px 0px 5px 1px;"></div>
	    	
		 
    	</div>
       </div>
    </div>
  </div>
     <?php }?>
 
 </div>
 
   
<!-- Second Col : Role and Registration Lists -->
    <?php if($this->Auth->isMine($user['User']['id'])){ ?>
	<div class ="col-md-6"> 
		<!-- Roles section -->	
			<div class="row">
					<div class="panel panel-warning">
					  <div class="panel-heading">
					    <h3 class="panel-title"><i class="glyphicon glyphicon-time"></i> Roles</h3>
					  </div>
					  <div class="panel-body">
					  
					    <table class="table">
						    <tr>
						        <th>Role</th>
						        <th>Role Status</th>
						        <th>Organization</th>
						        <th>Organization Status</th>
						    </tr>
						    
						    <?php foreach ($roles as $member): ?>
						    <tr>
						        <td><?php echo $member['Role']['name']; ?></td>
						        <td><?php echo $member['Status']['status']; ?></td>
						        <td>
						        	
						        	<?php 
										if(!isset($member['Organization']['name'])){
											echo "<a href='/volunteeromaha/organizations/index'>All</a>";
										}
										else{
											echo $this->Html->link($member['Organization']['name'], array('controller' => 'organizations', 'action' => 'view', $member['Organization']['id']));
										}
						        	
						        	?>
						        </td>
						        <td><?php echo $member['ORG_Status']['status']; ?></td>
						    </tr>
						    <?php endforeach; ?>
						    
						</table>
					</div>
				</div>
			</div>

  	<hr>


	<!-- 2nd Row on the third col containing all registraion table for this profile/user -->
			<div class = "row">	
				 <div class="panel panel-warning">
					  <div class="panel-heading">
					    <h3 class="panel-title"><i class="glyphicon glyphicon-time"></i> All  registrations</h3>
					  </div>
					  <div class="panel-body">
				
				 <?php // debugger::dump($registrations); ?>
				<!-- Registartions for events table -->			 
						<table class="table">
							<tr>
								<th style="width:300px">Event</th>
								<th style="width:300px">Organization</th>
								<th>Start Time</th>
								<th>End Time</th>
								<th> Hour </th>
								<th>Status</th>
							</tr>
							
						    <?php foreach ($registrations as $registration): ?>
						    <tr>
								<td>
								<?php echo $this->Html->link($registration['Event']['name'], array('controller' => 'events', 'action' => 'view', $registration['Event']['id']));?>
						        </td>
						        <td>
								<?php echo $this->Html->link($registration['Organization']['name'], array('controller' => 'organizations', 'action' => 'view', $registration['Organization']['id']));?>
						        </td>
								<td>
						            <?php echo $registration['Registration']['start_time']; ?>
						        </td>
								<td>
						            <?php echo $registration['Registration']['end_time']; ?>
						        </td>
						        <td>
						        	<?php echo $registration['0']['total'];?>
						        </td>
								<td>
									<?php echo $registration['Status']['status'];?>
								</td>
							</tr>
							
							<?php endforeach; ?>
						</table>
				<!-- End -->
					
					</div>
					</div>
				</div>
					<?php }?>
	</div>
</div>
<!-- end of second row with 3 col -->

</div>

