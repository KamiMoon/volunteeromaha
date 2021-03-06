<div>
<ul id="crumbs">
<li><a href="/volunteeromaha/"><span class="glyphicon glyphicon-home"></span> Home</a></li>
<li><i class="glyphicon glyphicon-tasks"></i> Events</li>
</ul>
<br>
</div>
<div class="row">
<div class="col-md-4">
<h1>Events List</h1>
</div>
<div class="col-md-4">
					<img src="img/Omaha.png" width="400px">
				</div>
<div class="col-md=4">
				</div>
</div>
<br>
<div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
         <span class="glyphicon glyphicon-tasks"></span> 
          Search for Events
        <span class =" spangglyph glyphicon glyphicon-chevron-down"></span>
          
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse">
      <div class="panel-body">
      <?php 
    echo $this->Form->create('Event', array('type' => 'get', 
    		'novalidate' => true
    ));
    echo $this->Form->input('name');
    echo $this->Form->input('address');
    echo $this->Form->input('city');
    echo $this->Form->input('state_id', array(
		    'options' => $states,
		    'empty' => ''
		));
    echo $this->Form->input('zip');
    echo $this->Form->input('phone');
    echo $this->Form->input('email');
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


<table class="table">
	<thead>
    <tr>
        <th>Name</th>
        <th>Organization</th>
        <th>Description</th>
        <th></th>
        <th>Contact Name</th>
        <th>Email</th>
        <th>Actions</th>
    </tr>
    </thead>
	<tbody>
	
    <?php foreach ($events as $event): ?>
    <tr>
  
        <td>
            <b><?php echo $this->Html->link($event['Event']['name'], array('action' => 'view', $event['Event']['id'])); ?></b>
        </td>
        <td>
            <b><?php echo $this->Html->link($event['Organization']['name'], array('controller' => 'organizations',  'action' => 'view', $event['Organization']['id'])); ?></b>
        </td>
        <td>
	        <div class="row" align="justify">
	           <?php echo substr($event['Event']['description'], 0,220); ?>...<br>
	           <a href="/volunteeromaha/events/view/<?php echo $event['Event']['id'];?>" ><button type="button" class="btn btn-link btn-sm"><span class="glyphicon glyphicon-plus"></span> More</button></a>
	        </div>
        </td>
        <td></td>
        <td>
            <b><?php echo $event['Event']['contact_first_name'] .' ' . $event['Event']['contact_last_name']; ?></b>
        </td>
        <td>
           <a href="mailto:<?php echo $event['Event']['email']; ?>"><?php echo $event['Event']['email']; ?></a>  
        </td>
        <td>
            <?php if($this->Auth->isOrgAdminFor($event['Event']['organization_id']) ){ ?>
            <button type="button" class="btn btn-default btn-sm" id="buttonlink"><span class="glyphicon glyphicon-pencil"></span> <?php echo $this->Html->link('Edit', array('action' => 'edit', $event['Event']['id'])); ?></button>
       		 <?php }?>
        </td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>