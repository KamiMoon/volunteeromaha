<div>
<ul id="crumbs">
<li><a href="/volunteeromaha/"><span class="glyphicon glyphicon-home"></span> Home</a></li>
<li><a href="/volunteeromaha/organizations"><span class="glyphicon glyphicon-globe"></span> Organizations</a></li>
<li><span class="glyphicon glyphicon-plus-sign"></span> Create Organization / School</li>
</ul>
<br>
</div>
<h1>Create Organization / School</h1>
<?php 			echo $this->Form->create('Organization',array('type' => 'file'));?>
<div class="row">
	
	<div class="col-md-12" >
	<div class="panel-heading"><h3><span class="glyphicon glyphicon-globe"></span> Basic Info:</h3></div>
	
		<?php
			echo $this->Form->input('id', array('type' => 'hidden'));
			echo $this->Form->input('name');
			echo $this->Form->input('photo', array('type' => 'file'));
			echo $this->Form->input('photo_dir', array('type' => 'hidden'));
			echo $this->Form->input('category_id', array('empty' => ''));
			echo $this->Form->input('short_description', array('type' => 'textarea', 'rows' => '2', 'cols' => '5'));
			echo $this->Form->input('long_description', array('type' => 'textarea', 'rows' => '5', 'cols' => '5'));
		?>
		
	</div>	
</div>


<div class="row">
	
	<div class="col-md-6">
	<div class="panel-heading"><h3><span class="glyphicon glyphicon-user"></span> Contact Info:</h3></div>
	
		<?php 	
			echo $this->Form->input('email');
			echo $this->Form->input('phone');
			echo $this->Form->input('fax');
			echo $this->Form->input('url');
		?>
		
	</div>
	<div class="col-md-6">
	<div class="panel-heading"><h3><span class="glyphicon glyphicon-home"></span> Address:</h3></div>
		
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




