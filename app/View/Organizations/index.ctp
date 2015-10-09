<div>
<ul id="crumbs">
<li><a href="/volunteeromaha/"><span class="glyphicon glyphicon-home"></span> Home</a></li>
<li><span class="glyphicon glyphicon-globe"></span> Organizations</li>
</ul>
<br>
</div>
<div class="row">
<div class="col-md-6">
<h1>Organizations / Schools List</h1>
</div>
<div class="col-md-4">
					<img src="img/Omaha.png" width="400px">
				</div>
<div class="col-md=2">
				</div>
</div>
<br>

<div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
           <span class="glyphicon glyphicon-globe"></span> 
           	Search for Organizations / Schools 
           <span class =" spangglyph glyphicon glyphicon-chevron-down"></span>
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse">
      <div class="panel-body">
      <?php 
    echo $this->Form->create('Organization', array('type' => 'get', 
    		'novalidate' => true ));
    echo $this->Form->input('name');
    echo $this->Form->input('category_id', array ('options' => $categories, 'empty' => ''));
    echo $this->Form->input('address');
    echo $this->Form->input('city');
    echo $this->Form->input('state_id', array(
		    'options' => $states,
		    'empty' => ''
		));
    echo $this->Form->input('zip');
    echo $this->Form->input('phone');
    echo $this->Form->input('email');
    echo $this->Form->input('fax');
    echo $this->Form->input('Interest', array(
    		'label' => 'Interests',
    		'type' => 'select',
    		'multiple' => true, // or 'checkbox' if you want a set of checkboxes
    		'options' => $interests
    ));
    echo $this->Form->end('Search');
    ?>
      </div>
    </div>
  </div>
</div>

<span class="glyphicon glyphicon-plus-sign"></span> <?php echo $this->Html->link('Add Organization', array('action' => 'add')); ?>
<table class="table" >
	<thead>
    <tr>
        <th>Id</th>
        <th></th>
        <th>Name</th>
        <th>Category</th>
        <th>Created</th>
        <th>Actions</th>
        
    </tr>
    </thead>
    <tbody>
	<?php foreach ($organizations as $organization): ?>
    <tr>
        <td><b><?php echo $organization['Organization']['id']; ?>.</b></td>
        <td>
        	<?php
			if(isset($organization['Organization']['photo']))
						{
							echo "<img src='/volunteeromaha/files/organization/photo/".$organization['Organization']['id']. "/".$organization['Organization']['photo']."' width='60px' height='60px' class='img-thumbnail'> ";
						} 
					else{
							echo "<img src='/volunteeromaha/img/Default.png' width='60px' height='60px' class='img-thumbnail'>";
						} 
		 	?>
        </td>
        <td>
            <b><?php echo $this->Html->link($organization['Organization']['name'], array('action' => 'view', $organization['Organization']['id'])); ?></b>
        </td>
        <td><?php echo $organization['Category']['name']; ?></td>
        <td>
            <?php echo $organization['Organization']['created']; ?>
        </td>
        
        
        <td>
        	<div class="row">
            <div class="col-md-3">
            
           	<?php if($this->Auth->isOrgAdminFor($organization['Organization']['id']) ){ ?>
            
            
            <button type="button" class="btn btn-default btn-sm" id="buttonlink"><span class="glyphicon glyphicon-pencil"></span> <?php echo $this->Html->link('Edit', array('action' => 'edit', $organization['Organization']['id'])); ?></button>
        	
        	<?php }?>
        	
        	</div>
        	<div class="col-md-9" align="center">
        	<?php
        	
        		if($this->Auth->isVoAdmin()){
        			echo $this->element('update_status', 
						array(
							'orgId' => $organization['Organization']['id'],
							'statusId' => $organization['Status']['id'], 
							'updateId' => $organization['Organization']['id'],
							'defaultAction' => 'updateOrganizationStatus'
						));
				}
        	?>
        	</div>
        	</div>
        </td>
        
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>