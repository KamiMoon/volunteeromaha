<div>
<ul id="crumbs">
<li><a href="/volunteeromaha/"><i class="glyphicon glyphicon-home"></i> Home</a></li>
<li><a href="/volunteeromaha/events"><i class="glyphicon glyphicon-tasks"></i> Events</a></li>
<li><i class="glyphicon glyphicon-plus-sign"></i> Create Event</li>
</ul>
<br>
</div>

<div style="margin-bottom: 25px" align="center">
<a><img src="/volunteeromaha/img/Logoblack.png" alt="Volunteer Omaha" height=60px></a>
</div>

<h1>Create Event</h1>

<?php echo $this->Form->create('Event',array('type' => 'file'));?>
<div class="row">	
	<div class="col-md-12" >
	<h3><span class="glyphicon glyphicon-globe"></span> Event Info:</h3>
		
			<?php
			echo $this->Form->input('organization_id', array('type' => 'hidden', 'value' => $organization_id));
			echo $this->Form->input('name');
			echo $this->Form->input('photo', array('type' => 'file'));
			echo $this->Form->input('photo_dir', array('type' => 'hidden'));
			echo $this->Form->input('description', array('type' => 'textarea', 'rows' => '6', 'cols' => '5'));
			echo $this->Form->input('status', array('type' => 'hidden'));
			echo $this->Form->datePicker('start_time');
			echo $this->Form->datePicker('end_time');
			?>
		
	</div>
</div>
<div class="row">	
	<div class="col-md-6">
	<h3><span class="glyphicon glyphicon-user"></span> Contact Info:</h3>
			<?php 
			/*$cont_name.="Form->input('contact_first_name')";
			$cont_name.="Form->input('contact_last_name')";
			echo $cont_name;*/
			echo $this->Form->input('contact_first_name', array('label'=>'First Name'));
			echo $this->Form->input('contact_last_name',array('label'=>'Last Name'));
			echo $this->Form->input('email');
			echo $this->Form->input('phone');
			
			/*echo $this->Form->input('created', array('type' => 'hidden'));*/
			/*echo $this->Form->input('modified', array('type' => 'hidden'));*/
			/* TODO - more */

			?>
	</div>
	<div class="col-md-6">
	<h3><span class="glyphicon glyphicon-home"></span> Address:</h3>
			<?php 
			echo $this->Form->input('address');
			echo $this->Form->input('city');
			echo $this->Form->input('state_id', array('empty' => ''));
			echo $this->Form->input('zip');
			?>
	</div>

</div>

<br>
<div class="row">
	<div class="col-md-12">
		<div align="right">
		<?php echo $this->Form->end('Save');?>
		</div>
	</div>
</div>
