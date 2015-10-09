
<h1 align="center">Join <?php echo $organization['Organization']['name'];?>:</h1>
<p align="center" >Please select the Role you want to have.</p>
<br>

<?php
echo $this->Form->create('Member');
?>
<div class ="row">
<div class="col-md-4">
	<p> </p>
</div>
<div class="col-md-4">
<?php 
echo $this->Form->input('user_id', array('type' => 'hidden','value' => $user_id));
echo $this->Form->input('organization_id', array('type' => 'hidden','value' => $organization_id));
echo $this->Form->input('role_id');
?>
</div>
<div class="col-md-1">
<?php 
echo $this->Form->end('Send Request');
?>
</div>

</div>
<center><i>(The Request will be sent to the Organization Administrator for Approval.)</i></center>

<br>

<!-- TODO: If a user is already a member of this organization there should be a section that shows which roles he is already a part of 
<div>		

		<?php 	
				
				echo 'You Currently have the following roles for this organization:';
				
				foreach ($members as $member):				
				echo $member['']['id'];
				endforeach;
		

		?>
</div>
-->
<br>
<div>
<div class="row">
	<div class="col-md-6" >
	<div class="panel panel-success">
		<div class="panel-heading"><span class="glyphicon glyphicon-user"></span><Strong> Your Info:</Strong></div>
		<div class="panel-body">
		
		<center> 
		<?php
			if (!empty($user['User']['photo'])) 
				{

				echo "<img src='/volunteeromaha/files/user/photo/".$user['User']['id']. "/thumb_".$user['User']['photo']."' width='100px' height='100px' class='img-thumbnail'> ";
						 
				} 
				else {
					echo "&nbsp;&nbsp;&nbsp;<font size='300' class='glyphicon glyphicon-user'></font>";
				}
		 	?>
		
		</center>
			<br>
			<br>
			<table style="border-spacing: 5px; border-collapse: separate">
		    			<tr >
			    			<td style="vertical-align: top; width:10px"><label>Name:</label></td>
			    			<td><?php echo $this->Html->link($user['User']['first_name']." ".$user['User']['last_name'], array('controller' => 'users', 'action' => 'profile', $user['User']['id'])); ?></td>
			    		</tr>
			    		<tr>
			    			<td><label>Email: </label></td>
	    					<td><a href="mailto:<?php echo $user['User']['email']; ?>"><?php echo $user['User']['email']; ?></a></td>
			    		</tr>
			    		<tr>
			    			<td style="vertical-align: top; width:10px"><label>Phone:</label></td>
			    			<td><?php $phone_number= $user['User']['phone']; 
			    				echo substr($phone_number, 0,3);echo "-"; echo substr($phone_number,3,3); echo "-"; echo substr($phone_number,-4);?>
			   				</td>
			    		</tr>

			    	</table>

		</div>
	</div>
	</div>
	
	<div class="col-md-6">
		<div class="panel panel-danger">
		<div class="panel-heading"><span class="glyphicon glyphicon-globe"></span><strong> Organization Info</strong></div>
		<div class="panel-body">
			<center>
				<?php
				if (!empty($organization['Organization']['photo'])) 
				{

				echo "<img height=270px src='/volunteeromaha/files/organization/photo/".$organization['Organization']['id']. "/".$organization['Organization']['photo']."' > ";
				
				} 
				else {
				?>
				<!-- to do Make this bigger -->
				<?php 	echo "<font size='270' class='glyphicon glyphicon-globe'></font>";
				}
		 		?>
		 	</center>			<br>
			<br>
			<table style="border-spacing: 5px; border-collapse: separate">
		    			<tr>
			    			<td style="width:100px"><label>Name:</label></td>
			    			<td><?php echo $this->Html->link($organization['Organization']['name'], array('controller' => 'organizations', 'action' => 'view', $organization['Organization']['id'])); ?></td>
			 			</tr>
			    		<tr>
			    			<td><label>Description</label></td>
			    			<td><?php echo $organization['Organization']['short_description'];?> </td>
			    		</tr>
			    		
	    	</table>
		
		
		</div>	 	
		</div>
	</div>
	
</div>

 
 </div>
 