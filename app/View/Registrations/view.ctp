<h1 align="center">Registration Information:</h1>
<br>
<br>
<div>
<div class="row">
	<div class="col-md-6" >
	<div class="panel panel-success">
		<div class="panel-heading"><span class="glyphicon glyphicon-user"></span><Strong> User Info:</Strong></div>
		<div class="panel-body">
		<center> <?php if(isset($registration['User']['photo'])){echo "<img src='/volunteeromaha/files/user/photo/".$registration['User']['id']. "/".$registration['User']['photo']."'  height='300px'> " . "<br>";} ?></center>
			<br>
			<br>
			<table style="border-spacing: 5px; border-collapse: separate">
		    			<tr >
			    			<td style="vertical-align: top; width:10px"><label>Name:</label></td>
			    			<td> 
			    				<a href="/volunteeromaha/users/profile/<?php echo $registration['User']['id']; ?>"><?php echo $registration['User']['first_name']; ?> <?php echo $registration['User']['last_name'] ?></a>
			    			</td>	
						</tr>
			    		<tr>
			    			<td><label>User id: </label></td>
			    			<td><?php echo $registration['Registration']['user_id'];?> </td>
			    		</tr>
			    		<tr>
			    			<td style="vertical-align: top; width:10px"><label>Comments:</label></td>
			    			<td><?php echo $registration['Registration']['comment'];?></td>
			    		</tr>
	    		</table>
		</div>
	</div>
	</div>
	
	<div class="col-md-6">
		<div class="panel panel-danger">
		<div class="panel-heading"><span class="glyphicon glyphicon-home"></span><strong> Event Info</strong></div>
		<div class="panel-body">
			<center><?php if(isset($registration['Event']['photo'])){echo "<img src='/volunteeromaha/files/event/photo/".$registration['Event']['id']. "/".$registration['Event']['photo']."'  height='300px'> " . "<br>";} ?></center>
			<br>
			<br>
			<table style="border-spacing: 5px; border-collapse: separate">
		    			<tr>
			    			<td style="width:100px"><label>Name:</label></td>
			    			<td><a href="/volunteeromaha/events/view/<?php echo $registration['Event']['id']; ?>"><?php echo $registration['Event']['name']; ?></a>  </td>	
						</tr>
			    		<tr>
			    			<td><label>Start time:  </label></td>
			    			<td><?php echo $registration['Registration']['start_time'];?> </td>
			    		</tr>
			    		<tr>
			    			<td style="vertical-align: top; width:10px"><label>Due to end at:</label></td>
			    			<td><?php echo $registration['Registration']['end_time'];?></td>
			    		</tr>
	    	</table>
		
		
		</div>	 	
		</div>
	</div>
	
	<?php if($registration['Registration']['status_id'] == 2 || $this->Auth->isOrgAdminFor($registration['Event']['organization_id'])){?>
				
				<?php 
				if(isset($registration['Hour']['hours'])) { ?>
					<button type="button" class="btn btn-default btn-sm"
				id="buttonlink">
					<span class="glyphicon glyphicon-pencil"></span> <?php echo $this->Html->link('Edit hours', array('controller' => 'hours', 'action' => 'edit', $registration['Hour']['id'])); ?></button>					
				<?php }else{ ?>
						<button type="button" class="btn btn-default btn-sm"
				id="buttonlink">
					<span class="glyphicon glyphicon-pencil"></span> <?php echo $this->Html->link('Log hours', array('controller' => 'hours', 'action' => 'add', $registration['Registration']['id'])); ?></button>					
				
				<?php }?>
				
				<?php }?>
	
</div>

 
 </div>
 