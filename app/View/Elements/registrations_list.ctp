<table class="table">
	<tr>
		<th style="width:100px">User</th>
		<th style="width:200px">Event</th>
		<th>Start Time</th>
		<th>End Time</th>
		<th></th>
		<th>Action</th>
	</tr>
    <?php foreach ($registrations as $registration): ?>
    <tr>
		<td>
            <?php echo $this->Html->link($registration['User']['first_name']." ".$registration['User']['last_name'], array('controller' => 'users', 'action' => 'profile', $registration['User']['id'])); ?>
        </td>
		<td>
            <?php echo $this->Html->link($registration['Event']['name'], array('controller' => 'events', 'action' => 'view', $registration['Event']['id'])); ?>
        </td>
		<td>
            <?php echo $registration['Registration']['start_time']; ?>
        </td>
		<td>
            <?php echo $registration['Registration']['end_time']; ?>
        </td>
		<td>
        
        	<?php if($this->Auth->isMine($registration['Registration']['user_id']) || $this->Auth->isOrgAdminFor($registration['Event']['organization_id'])){ ?>
        
				<button type="button" class="btn btn-default btn-sm"
				id="buttonlink">
				<span class="glyphicon glyphicon-pencil"></span> <?php echo $this->Html->link('Edit', array('controller' => 'registrations', 'action' => 'edit', $registration['Registration']['id'])); ?></button>
			
				<button type="button" class="btn btn-default btn-sm"
				id="buttonlink">
				<span class="glyphicon glyphicon-eye-open"></span> <?php echo $this->Html->link('View', array('controller' => 'registrations', 'action' => 'view', $registration['Registration']['id'])); ?></button>
				
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
						        
			<?php } ?>
			
		</td>
		<td>
			
			<?php if($this->Auth->isOrgAdminFor($registration['Event']['organization_id'])){ ?>
		
				<?php echo $this->element('update_status', 
					array(
						'orgId' => $registration['Event']['organization_id'],
						'statusId' => $registration['Status']['id'], 
						'updateId' => $registration['Registration']['id'], 
						'defaultAction' => 'updateRegistrationStatus'
					));?>
		
			<?php }?>
		</td>
	</tr>
	<?php endforeach; ?>
</table>