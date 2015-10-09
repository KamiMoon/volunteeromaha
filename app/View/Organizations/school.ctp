
<div>
	<ul id="crumbs">
		<li><a href="/volunteeromaha/"><span class="glyphicon glyphicon-home"></span>
				Home</a></li>
		<li><a href="/volunteeromaha/organizations/"><span
				class="glyphicon glyphicon-book"></span> Schools</a></li>
		<li><?php
		if (isset ( $organization ['Organization'] ['photo'] )) {
			echo "<img src='/volunteeromaha/files/organization/photo/" . $organization ['Organization']['id'] . "/thumb_" . $organization ['Organization'] ['photo'] . "' width='15px' height='15px'> " . $organization ['Organization'] ['name'];
		} else {
			echo "<span class='glyphicon glyphicon-book'></span> " . $organization ['Organization'] ['name'];
		}
		?>
</li>
	</ul>

	<br>
</div>

<!-- Div Row 1 here! First col: Join/school photo/short desc|| second col: school Stats -->

<?php if($this->Auth->isLoggedIn()){ ?>
					
<?php }?>	
<div class="row">
	<div class="col-md-6">
		<div class="row">
			<div class="col-md-12" align="center">
			<center><button type="button" class="btn btn-default btn-sm" id="buttonlink"><span class="glyphicon glyphicon-plus-sign"></span> <a href="/volunteeromaha/members/add/<?php echo $organization ['Organization']['id'];?>">Join <?php echo $organization['Organization']['name']; ?> Now</a></button></center>		        
			
			<?php if (isset ( $organization ['Organization'] ['photo'] )) {?>
			<br><img src="/volunteeromaha/files/organization/photo/<?php echo $organization['Organization']['id']?>/<?php echo $organization['Organization']['photo']?>" alt="Profile Image" height="420px" />
			<?php }?>
			
			<br>
			
				<div class="panel-body" align="center" style="word-wrap:normal; vertical-align:center">
					<?php echo $organization['Organization']['short_description'];?>
				</div>
			</div>
			
		</div>
	</div>
	
<!-- Second col: school Stats -->	
	<div class="col-md-6" >
		<div class="row">
			<BR>
<!-- Second col:first row is broken to 2 col: contains total volunter hrs/students registered and recent 5 joined students -->	
			<div class="col-md-12">
				<div class="panel panel-info">
					<div class="panel-body" >
					<span class="glyphicon glyphicon-stats"></span> <b>School Statistics</b>
					</div>
					<div class="panel-footer" >
<!-- R1:C2(R1:C1): Totals students hrs/registerations  -->
				<div class ="row">
					<div class = "col-md-6">
					<br><br>
					<b>Hours Volunteered:</b>
					<?php foreach ($THShoursList as $THShours):?>
					<?php 
						if (!empty ($THShours['0']['total']))
						{
							echo $THShours['0']['total']; 
						}
						else{
							echo '';}	?>
						
					<?php endforeach; ?>
					<br>
					<b>Student Registered: 
					<?php foreach ($THhoursList as $THhours):?>
					<?php 
						if (!empty ($THhours['0']['totalcount']))
						{
							echo $THhours['0']['totalcount']; 
						}
						else{
							echo '';}	?>
					<?php endforeach; ?>		
					</b>
					<br><br>
		<!-- TODO- fix this button: add a query? -->
					<button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-time"></span> Previous Years</button>
				</div>
				
<!-- R1:C2(R1:C2):	Recently Joined Students -->		
				<div class="col-md-6">
					<b><span class="glyphicon glyphicon-fire"></span> Recently Joined Student</b>
					<br><br>
					<table>	
						<?php $j=1;?>
						<?php foreach ($studentList as $stud): ?>
					
						<tr>
							<td><b><?php echo $j.'.'; ?></b>
							<?php if (!empty($stud['User']['photo'])) 
								{ echo "<img src='/volunteeromaha/files/user/photo/".$stud['User']['id']. "/".$stud['User']['photo']."' width='20px' height='20px' class='img-circle'> ";
								} else {
								echo "<img src='/volunteeromaha/img/Default.png' width='20px' height='20px' class='img-circle'> ";
								}
							?>
							<?php echo $stud['User']['first_name'];?>&nbsp;<?php echo $stud['User']['last_name'];?></td>
						<td>&nbsp;&nbsp;</td>
						<?php $j++;?>
					</tr>
					<?php endforeach; ?>
					</table>
				</div>
				</div>
					<hr>
				
<!-- R1:C2(R2:C1): Top 5 students -->		
				<div class="row">			
					<div class="col-md-6">
					<b><span class="glyphicon glyphicon-fire"></span> Top Students</b>
					<table>
						<tr>
							<th style="width:200px">Name</th>
							<th style="width:100px">Total Hours</th>
						</tr>
					
					<?php $i=1;?>
					<?php foreach ($hoursList as $hours): ?>
						<tr>
							<td>
								<b><?php echo $i.'.';?></b>
								<?php echo ' '.$hours['User']['first_name'];?>&nbsp;<?php echo $hours['User']['last_name'];?>
							</td>
							
							<td>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<?php echo $hours['0']['total'];?>
							</td>
							<?php $i++;?>
						</tr>
					<?php endforeach; ?>
				</table>
				<br>
				</div>
				
<!-- R1:C2(R2:C2): Top 5 Event : Events and total number of students -->
				<div class="col-md-6">
					<b><span class="glyphicon glyphicon-fire"></span>Top Events</b>
				<table>
					
					<tr>
						<th style="width:200px">Name</th>					
						<th style="width:100px">Total Students</th>
					</tr>
					
					<?php $k=1;?>	
				<?php foreach ($eventLists as $topevent): ?>
									
					<tr>
						<td><b><?php echo $k.'.'; ?></b>&nbsp;
							   <?php echo $topevent['Event']['name'];?></td>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<?php echo $topevent['0']['total'];?></td>
							<?php $k++;?>
					</tr>
					<?php endforeach; ?>
				</table>
				</div>
			</div>
			<div>
	<!-- Button - Full leaderboard -->
			<a align="right" href="/volunteeromaha/leaderboards"><button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-list"></span> Full Leaderboard</button></a>
			<br>
			</div>				
		</div>
		</div>	
	</div>
</div>
</div>
</div>
<br>

<!-- Div Row 2 here!: two col: schedule of events and Basic Info sections-->


<div class="row">
<!-- R2:C1 : Schedule of Events -->

	<div class="col-md-6">
		<div class="panel panel-info">
			<div class="panel-heading">
				<span class="glyphicon glyphicon-calendar"></span> <b>Schedule of Events</b>
			</div>
			<div class="panel-body">
			
				<?php foreach ($events as $event): ?>
						
							<h4><?php echo $event['Event']['name'];?>  <?php echo date ("l F d, Y", strtotime($event['Event']['created']))?> </h4>
							<p>
							<?php 
			    			echo substr($event['Event']['description'], 0,200);
			    		?>...
							</p>
							<p><a href="/volunteeromaha/events/view/<?php echo $event['Event']['id'];?>" ><button type="button" class="btn btn-link btn-sm"><span class="glyphicon glyphicon-plus"></span> More</button></a></p>
							<hr>
						<?php endforeach; ?>
						
						<?php if($this->Auth->isOrgAdminFor($organization['Organization']['id'])){ ?>	
						<a align="left" href="/volunteeromaha/events/add/<?php echo $organization['Organization']['id']; ?>"><button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-plus-sign"></span> Add Event</button></a>
						<?php }?>
						<a align="right" href="/volunteeromaha/users/calendar?orgId=<?php echo $organization['Organization']['id']; ?>"><button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-tasks"></span> View All Events</button></a>
			
			</div>
		</div>
	</div>

<!-- R2:C2 : Basic Info -->
	<div class="col-md-6">
			<div class="panel panel-success">
					<div class="panel-heading"><span class="glyphicon glyphicon-globe"></span> Basic Info:
					</div>
					
					<div class="panel-body">
					
					<div class= "row">
					<div class ="col-md-1">
					<p> <?php echo ' ';?></p>
					</div>
					<div class = "col-md-11">
					<table style="border-spacing: 5px; border-collapse: separate">
		    			<tr>
			    			<td style="vertical-align: top; width:10px"><label>Name:</label></td>
			    			<td> <?php echo $organization['Organization']['name']; ?></td>	
						</tr>
			    		<tr>
			    			<td style="vertical-align: top; width:10px"><label>Email:</label></td>
			    			<td><a href="mailto:<?php echo $organization['Organization']['email']; ?>" target="_top"><?php echo $organization['Organization']['email']; ?></a></td>
			    		</tr>
			    		<tr>
			    			<td><label>Phone:</label></td>
			    			<td><?php $phone_number= $organization['Organization']['phone']; 
			    			echo substr($phone_number, 0,3)."-".substr($phone_number,3,3)."-".substr($phone_number,-4);
			    		?></td>
			    		</tr>
			    		<tr>
			    			<td><label>Website:</label></td>
			    			<td>
			    				<?php if($organization['Organization']['url']){?>
			    				<a href="//<?php echo $organization['Organization']['url']; ?>">Go to Website</a>
			    				<?php }?>
			    			</td>
			    		</tr>
			    		<tr>
			    			<td><label>Joined:</label></td>
			    			<td><?php echo date ("F d, Y", strtotime($organization['Organization']['created'])); ?></td>
			    		</tr>
						<tr>
			    			<td><label>Fax:</label></td>
			    			<td><?php echo $organization['Organization']['fax']; ?></td>
			    		</tr>
			    		<tr><td valign="top"><label>Interests:</label></td><td>
	    		
	    		
	    			<?php 
	    			$interests = $organization['Interest'];
	    			
	    			foreach ($interests as $interest){
	    			

	    			echo $interest['interests'].'<br>';
	    			}
	    			?></td>
	    		</tr>
	    			</table>

<!-- Three buttons -->	 
<!-- Join Now button TODO Add conditions so to verify a user is already a member or not-->	
	    			   			
					<?php if($this->Auth->isLoggedIn()){ ?>
					<button type="button" class="btn btn-default btn-sm" id="buttonlink">
						<span class="glyphicon glyphicon-plus-sign"></span> 
						<a href="/volunteeromaha/members/add/<?php echo $organization ['Organization']['id'];?>">Join <?php echo $organization['Organization']['name']; ?> Now</a>
					</button>					
					<?php }?>
					<?php if($this->Auth->isOrgAdminFor($organization['Organization']['id']) ){ ?>	
		   			 <button type="button" class="btn btn-default btn-sm" id="buttonlink"><span class="glyphicon glyphicon-pencil"></span> <?php echo $this->Html->link('Edit', array('action' => 'edit', $organization['Organization']['id'])); ?></button>
					 <button type="button" class="btn btn-default btn-sm" id="buttonlink"><span class="glyphicon glyphicon-pencil"></span> <?php echo $this->Html->link('Admin', array('action' => 'admin', $organization['Organization']['id'])); ?></button>
<!-- End three buttons -->					
					<?php ;}?>

					<br /><br />
					</div>
					</div>
					
						
					</div>	
			</div>
			</div>
</div>

<!-- Description goes below -->

<div class="row">
	<div class="col-md-12">
		<div class="panel panel-success">
			<div class="panel-heading"><span class ="glyphicon glyphicon-user"></span> <Strong>Description</Strong>
			</div>
			<div class="panel-body">
				<pre style="background-color: white"><?php echo $organization['Organization']['long_description'];?></pre>
			</div>
		</div>
	</div>
</div>

<!-- Div Row 2 here! First col: School Events - calendar and Second Col: Map -->
<div class="row">
<!--  First col: School Events - calendar  -->	
	<div class="col-md-6">
			<a href="/volunteeromaha/users/calendar?orgId=<?php echo $organization['Organization']['id']; ?>"><img
					src="/volunteeromaha/img/Calendar.png" width="550px"/></a>
	</div>
	
<!-- Second Col: Map-->
			<div class="col-md-6">
				<div class="panel panel-warning" >
					<div class="panel-heading"><span class="glyphicon glyphicon-map-marker"></span> MAP
					</div>
					
					<div class="panel-body" align="Left">
	    			<b>Address:  </b>
	    			<?php echo $organization['Organization']['address'].','. $organization['Organization']['city']; ?><?php if(isset($organization['State']['abbrev'])){
						  	echo ', ';
						  }?>						  
						  <?php echo $organization['State']['abbrev']; ?> <?php echo $organization['Organization']['zip']; ?>
					<center>
					<?php if(isset($mapAddress)) {?>
				    	<input id="mapAddress" type="hidden" value="<?php echo $mapAddress; ?>" />
						<div id="map-canvas" style="height: 390px; box-shadow: rgb(190, 190, 190) 0px 0px 5px 1px;"></div>
				    	<?php }?>
					</center>
					</div>
				</div>
			</div>
<!-- Map ends -->
</div>


<div class="row">
	<div class="col-md-12">
		<div class="panel panel-success">
			<div class="panel-heading"><span class ="glyphicon glyphicon-user"></span> <Strong>Approved Organizations</Strong>
			</div>
			<div class="panel-body">
			
				<table class="table" >
					<thead>
				    <tr>
				    	<th></th>
				        <th>Name</th>
				    </tr>
				    </thead>
				    <tbody>
				   
					<?php foreach ($approvedOrgs as $approvedOrg): ?>
					
				    <tr>
				        <td>
				        	<?php
							if(isset($approvedOrg['Organization']['photo']))
										{
											echo "<img src='/volunteeromaha/files/organization/photo/".$approvedOrg['Organization']['id']. "/".$approvedOrg['Organization']['photo']."' width='60px' height='60px' class='img-thumbnail'> ";
										} 
									else{
											echo "<img src='/volunteeromaha/img/Default.png' width='60px' height='60px' class='img-thumbnail'>";
										} 
						 	?>
				        </td>
				        <td>
				            <b><?php echo $this->Html->link($approvedOrg['Organization']['name'], array('controller' => 'organizations', 'action' => 'view', $approvedOrg['Organization']['id'])); ?></b>
				        </td>
				    </tr>
				    <?php endforeach; ?>
				    </tbody>
				</table>
			</div>
		</div>
	</div>
</div>
