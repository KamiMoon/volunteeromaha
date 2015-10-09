
<table class="table">
	<tr>
		<th>User</th>
		<th>Reg Id.</th>
		<th>Event</th>
		<th>Hours</th>
		
		<th>Action</th>
       
	</tr>
    <?php 
    $total_hours = 0;
    
    foreach ($hoursList as $hour): ?>
    	
    <tr>
		<td>
            <?php echo $this->Html->link($hour['User']['username'], array('controller' => 'users', 'action' => 'profile', $hour['User']['id'])); ?>
        </td>
		<td style="text-align: center;">
            <?php echo $this->Html->link($hour['Registration']['id'], array('controller' => 'registrations', 'action' => 'view', $hour['Registration']['id'])); ?>
        </td>
		<td>
       		<?php echo $this->Html->link($hour['Event']['name'], array('controller' => 'events', 'action' => 'view', $hour['Event']['id'])); ?>
       </td>
		<td>
        
        <?php 
        
        	$isOrgAdminForHour = $this->Auth->isOrgAdminFor($hour['Event']['organization_id']);
        	$isHourApproved = $hour['Hour']['status_id'] == 2;
        if ($isOrgAdminForHour ||  (!$isOrgAdminForHour && !$isHourApproved)) 
			        	{	
            
					
					if (isset ( $hour ['Hour'] ['hours'] )) {
						echo $this->Form->create ( 'Hour', array (
								'url' => array (
										'action' => 'edit',
										'controller' => 'hours',
										$hour ['Hour'] ['id'] 
								) 
						) );
					} else {
						echo $this->Form->create ( 'Hour', array (
								'url' => array (
										'action' => 'add',
										'controller' => 'hours',
										$hour ['Registration'] ['id'] 
								) 
						) );
					}
					
			?>
			<div class="row">
			<div class="col-md-3">
			<?php
					echo $this->Form->input ( 'user_id', array (
							'type' => 'hidden',
							'value' => $hour ['User'] ['id'] 
					) );
					echo $this->Form->input ( 'id', array (
							'type' => 'hidden',
							'value' => $hour ['Hour'] ['id'] 
					) );
					echo $this->Form->input ( 'registration_id', array (
							'type' => 'hidden',
							'value' => $hour ['Registration'] ['id'] 
					) );
					
					echo $this->Form->input ( 'hours', array (
							'label' => '',
							'value' => $hour ['Hour'] ['hours'] 
					) );
			?>
			</div>
			<div class="col-md-3">
			<?php 
					/* TODO - notifications */
					echo $this->Form->end ( 'Save' );
					?>
			</div>
			<div class ="col-md-6">
			</div>
			</div>	
			<?php } else {
					echo $hour ['Hour'] ['hours'];
			}?>	
        </td>
		<td>
        <?php 
        	if ($this->Auth->isOrgAdminFor($hour['Event']['organization_id'])) {
				echo $this->element ('update_status', 
					array (
						'orgId' => $hour['Event']['organization_id'],
						'statusId' => $hour ['Status'] ['id'],
						'updateId' => $hour ['Hour'] ['id'],
						'defaultAction' => 'updateHourStatus' 
					) 
				);
			} 
		?>
        </td>
	</tr>
    <?php 
    
    if($hour ['Hour'] ['hours']){
		$total_hours += $hour ['Hour'] ['hours'];
	}
    
    endforeach; ?>
</table>

Total Hours: <?php echo $total_hours;?>