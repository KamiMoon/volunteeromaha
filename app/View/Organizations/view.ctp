<div>
	<ul id="crumbs">
		<li><a href="/volunteeromaha/"><span class="glyphicon glyphicon-home"></span> Home</a></li>
		<li><a href="/volunteeromaha/organizations"><span class="glyphicon glyphicon-globe"></span> Organizations</a></li>
		<li><?php if(isset($organization['Organization']['photo']))
						{ echo "<img src='/volunteeromaha/files/organization/photo/".$organization['Organization']['id']. "/thumb_".$organization['Organization']['photo']."' width='15px' height='15px'> " . $organization['Organization']['name'];
						} else 	{
						   echo "<img src='/volunteeromaha/img/Default.png' width='15px' height='15px' class='img-circle'> ". $organization['Organization']['name'];
			}?>
		</li>
	</ul>
	<br>
</div>

<!-- First Row: consists of three col: organization photo/short , carousel slide and Basic Info -->
	<br>
<div class="row">
		<div class="col-md-7"  align="center">
				<?php if (!empty($organization['Organization']['photo'])) 
				{
					echo "<img height=270px src='/volunteeromaha/files/organization/photo/".$organization['Organization']['id']. "/".$organization['Organization']['photo']."' > ";		 
				} 
				else {?>
			<!-- TODO Make this bigger -->
				<?php 	echo "<img src='/volunteeromaha/img/Default.png' width='100px' height='100px' class='img-thumbnail'>";
				}?>
				<br><br>
			 	<?php echo '"'.$organization['Organization']['short_description'].'"';?>
		</div>
			
		<div class="col-md-5">
			<div class="panel panel-info">
				<div class="panel-body"><span class="glyphicon glyphicon-globe"></span> Basic Info:
				</div>
				<div class="panel-footer">
					
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
			    			<td><?php echo date ("F d, Y", strtotime($organization['Organization']['created']));?>
			    			</td>
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
						<a href="/volunteeromaha/members/add/<?php echo $organization ['Organization']['id'];?>">Request Admin Rights for <?php echo $organization['Organization']['name']; ?> Now</a>
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
<hr>

<!-- Second Row Consists of Long description for the organization -->
	
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
		<hr>
<!-- Third Row Consists of Two columns: Upcoming events and MAP -->
		
		<div class="row">
			<div class="col-md-5">
				<div class="panel panel-danger">
					<div class="panel-heading"><span class="glyphicon glyphicon-calendar"></span>Schedule of Events
					</div>
					
					<div class="panel-body">
						<?php foreach ($events as $event): ?>
						
							<h4><?php echo $event['Event']['name'];?> </h4>
							<?php 
							echo date ("l F d, Y", strtotime($event['Event']['created']));?>
							<p>
							<?php 
			    			echo substr($event['Event']['description'], 0,200);
			    		?>...
							</p>
							<p><a href="/volunteeromaha/events/view/<?php echo $event['Event']['id'];?>" ><button type="button" class="btn btn-link btn-sm"><span class="glyphicon glyphicon-plus"></span> More</button></a></p>
							<hr>
							
						<?php endforeach; ?>
						
						
						<?php if($organization['Organization']['status_id']  == 2 &&  ($this->Auth->isOrgAdminFor($organization['Organization']['id']))) { ?>
							
						<a align="left" href="/volunteeromaha/events/add/<?php echo $organization['Organization']['id']; ?>"><button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-plus-sign"></span> Add Event</button></a>
						
						<?php }?>
						
						
						<a align="right" href="/volunteeromaha/users/calendar?orgId=<?php echo $organization['Organization']['id']; ?>"><button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-tasks"></span> View All Events</button></a>
					</div>	
				</div>
			</div>
			

			<div class="col-md-7">
				<div class="panel panel-warning">
					<div class="panel-heading"><span class="glyphicon glyphicon-map-marker"></span> MAP
					</div>
					
					<div class="panel-body">
			
			<table style="border-spacing: 1px; border-collapse: separate">
	    			<tr>
	    			<td style="vertical-align: top;"><label>Address: </label></td>
	    			<td><br>
	    				<address>
						  <?php echo $organization['Organization']['address']; ?><br>
						  <?php echo $organization['Organization']['city']; ?> 
						  
						  <?php if(isset($organization['State']['abbrev'])){
						  	echo ', ';
						  }
						  ?>						  
						  
						  <?php echo $organization['State']['abbrev']; ?> <?php echo $organization['Organization']['zip']; ?><br>
						  
						</address>
	    			</td>
	    			</tr>
	    	</table>
					
					<?php if(isset($mapAddress)) {?>
				    	<input id="mapAddress" type="hidden" value="<?php echo $mapAddress; ?>" />
						<div id="map-canvas" style="height: 390px; box-shadow: rgb(190, 190, 190) 0px 0px 5px 1px"></div>
				    			   			 <?php }?>
					
					</div>
				</div>
			</div>
		</div>
		
