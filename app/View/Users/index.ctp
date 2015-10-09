<div>
				<ul id="crumbs">
					<li><a href="/volunteeromaha/"><span
							class="glyphicon glyphicon-home"></span> Home</a></li>
					<li><span class="glyphicon glyphicon-user"></span> Users</li>
				</ul>
				<br>
</div>
<h1>User List</h1>

<div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
         <span class ="glyphicon glyphicon-user"></span> Search for Users <span class ="spangglyph glyphicon glyphicon-chevron-down" ></span>
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse">
      <div class="panel-body">
      <?php 
	    echo $this->Form->create('User', array('type' => 'get', 
	    		'novalidate' => true
	    ));
	    echo $this->Form->input('first_name');
	    echo $this->Form->input('last_name');
	    /*echo $this->Form->input('role_id', array(
		    'options' => $roles,
		    'empty' => '(choose one)'
		));*/
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
			    'options' => $interests,
				'empty' => ''
			));
	    echo $this->Form->end('Search');
	    ?>
      </div>
    </div>
  </div>
</div>

<table class="table">
    <tr>
    	<?php  if($this->Auth->isVoAdmin()){ ?>
        <th>Id</th>
        <?php } ?>
        <th>User Id</th>
        <th>Name</th>
        <!-- TODO: more -->
        
        <?php  if($this->Auth->isVoAdmin()){ ?>
        <th>Created</th>
        <?php } ?>
        <th>Address</th>
        <th>City</th>
        <th>State</th>
        <th>Zip</th>
        <th>Email</th>
        <th>Phone</th>
        <?php  if($this->Auth->isVoAdmin()){ ?>
        <th>Actions</th>
        <?php } ?>
    </tr>

    <?php foreach ($users as $user): ?>
    <tr>
    	<?php  if($this->Auth->isVoAdmin()){ ?>
        <td><?php echo $user['User']['id']; ?></td>
        <?php } ?>
        
        <td><?php echo $user['User']['username']; ?></td>
        <td>
            <?php echo $this->Html->link($user['User']['first_name'] . ' ' . $user['User']['last_name'], array('action' => 'profile', $user['User']['id'])); ?>
        </td>
        <?php  if($this->Auth->isVoAdmin()){ ?>
        <td>
            <?php echo $user['User']['created']; ?>
        </td>
        <?php } ?>
        <td>
            <?php echo $user['User']['address']; ?>
        </td>
        <td>
            <?php echo $user['User']['city']; ?>
        </td>
        <td>
            <?php echo $user['State']['abbrev']; ?>
        </td>
        <td>
            <?php echo $user['User']['zip']; ?>
        </td>
        <td>
            <?php echo $user['User']['email']; ?>
        </td>
        <td>
            <?php echo $user['User']['phone']; ?>
        </td>
        
        <?php  if($this->Auth->isVoAdmin()){ ?>
        <td>
			<?php echo $this->Html->link('Edit', array('action' => 'edit', $user['User']['id'])); ?>
        </td>
        <?php }?>
    </tr>
    <?php endforeach; ?>
    
</table>