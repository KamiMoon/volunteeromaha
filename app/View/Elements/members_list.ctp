<table class="table">
    <tr>
        <th>User</th>
        <th>Organization</th>
        <th>Role</th>
        <th>Status</th>
        <th>Action</th>
    </tr>
    <?php foreach ($members as $member): ?>
    <tr>
        <td><?php echo $this->Html->link($member['User']['first_name']." ".$member['User']['last_name'], array('controller' => 'users', 'action' => 'profile', $member['User']['id'])); ?></td>
        <td><?php echo $this->Html->link($member['Organization']['name'], array('controller' => 'organizations', 'action' => 'view', $member['Organization']['id'])); ?></td>
        <td><?php echo $member['Role']['name']; ?></td>
        <td><?php echo $member['Status']['status']; ?></td>
        <td>
        	<?php
        	
        		$temp_role_id = $member['Member']['role_id'];
        		$temp_org_id = $member['Member']['organization_id'];
        	
        		//if they are a secondary org admin, only primary org admins can approve or dissaprove
        		if( ($temp_role_id == 3) && $this->Auth->isOrgAdmin($temp_org_id, 2)){
					echo $this->element('update_status', 
						array(
							'orgId' => $temp_org_id,
							'statusId' => $member['Status']['id'], 
							'updateId' => $member['Member']['id'], 
							'defaultAction' => 'updateMemberStatus'
					));
				}
				
				//if they are a student - any org admin can approve
				else if( ($temp_role_id == 4) && ($this->Auth->isOrgAdminFor($temp_org_id))){
					echo $this->element('update_status',
						 array(
							'orgId' => $temp_org_id,
							'statusId' => $member['Status']['id'], 
							'updateId' => $member['Member']['id'], 
							'defaultAction' => 'updateMemberStatus'
					));
				}
        	
        	?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>