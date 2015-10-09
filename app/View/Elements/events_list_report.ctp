
<table class="table">
<thead>
<tr>
<th>Name</th>
<th>Registered</th>
<th>Total Hours</th>
</tr>
</thead>
<tbody>
    <?php foreach ($events as $event): ?>
    <tr>
        <td>
            <b><?php echo $this->Html->link($event['Event']['name'], array('controller' => 'events', 'action' => 'view', $event['Event']['id'])); ?></b>
        </td>        
        <td>
			<?php echo $event['0']['totalRegistered'];?>
        </td>
         <td>
			<?php echo $event['0']['totalHours'];?>
        </td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>