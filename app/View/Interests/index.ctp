<div>
<ul id="crumbs">
<li><a href="/volunteeromaha/"><span class="glyphicon glyphicon-home"></span> Home</a></li>
<li><span class="glyphicon glyphicon-tasks"></span> Administer Interests</li>
</ul>
<br>
</div>


<table class="table">
	<thead>
    <tr>
        <th>Name</th>
        <th>Actions</th>
    </tr>
    </thead>
	<tbody>
    <?php foreach ($interests as $interest): ?>
    <tr>
        <td>
            <b><?php echo $interest['Interest']['interests'];?></b>
        </td>

        <td>
            <?php if($this->Auth->isVoAdmin()){ ?>
            
            <?php
                echo $this->Html->link(
                    'Edit', array('action' => 'edit', $interest['Interest']['id'])
                );
            ?>
            <?php
                echo $this->Form->postLink(
                    'Delete',
                    array('action' => 'delete', $interest['Interest']['id']),
                    array('confirm' => 'Are you sure?')
                );
            ?>
            
            
       		 <?php }?>
        </td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>


<?php
echo $this->Form->create('Interest', array('action' => 'add'));
echo $this->Form->input('interests', array('type' => 'text', 'label' => 'Add New Interest'));
echo $this->Form->end('Create');
?>