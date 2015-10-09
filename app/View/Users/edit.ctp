<div class="row">
<div class="col-md-10">
<h1>Edit Profile</h1>
</div>
<div class="col-md-2" align="center">
<?php
$user = $this->Session->read('Auth.User');
			if (!empty($user['photo'])) 
				{

				echo "<img src='/volunteeromaha/files/user/photo/".$user['id']. "/thumb_".$user['photo']."' width='60px' height='60px' class='img-thumbnail'> ";
						 
				} 
				else {
					echo "<font size='45' class='glyphicon glyphicon-user'></font>";
				}
		 	?>
			<br>
		 	<p style="font-size:10px">Choose File for Profile Picture*</p>
</div>
</div>

<div class="row">
	
	<div class="panel-heading"><h3><span class="glyphicon glyphicon-globe"></span> Basic Info:</h3></div>
	<div class="col-md-12" >
		<table>
			<?php  
			echo $this->Form->create('User', array('type' => 'file'));
		    echo $this->Form->input('first_name');
		    echo $this->Form->input('last_name');
		    echo $this->Form->input('id', array('type' => 'hidden'));
		    echo $this->Form->input('terms', array('type' => 'hidden', 'value' => '1'));
		    echo $this->Form->input('photo', array('type' => 'file', 'label'=>'Photo*'));
		    echo $this->Form->input('photo_dir', array('type' => 'hidden'));
		    echo $this->Form->input('phone');
		    echo $this->Form->input('email');
		    echo $this->Form->input('fax', array('placeholder' => ''));
		    echo $this->Form->input('Interest', array(
			    'label' => 'Interests',
			    'type' => 'select',
			    'multiple' => true, // or 'checkbox' if you want a set of checkboxes
			    'options' => $interests
			));
			
		  
			echo $this->Form->input('leaderboardopt', 
				array('type' => 'select', 
					  'label' => 'Include in leaderboard:', 
					  'div' => false, 
					  'placeholder' => 'Color Name', 'class' => 'input-medium',  
					  'options'=>array('0'=>'YES', '1'=>'NO')
				));?>
			
		</table>
	</div>
	
	
</div>
<br>

<div class="row">
	
	<div class="col-md-12">
	<div class="panel-heading"><h3><span class="glyphicon glyphicon-home"></span> Address:</h3></div>
		<table>
			<?php 
			echo $this->Form->input('address');
		    echo $this->Form->input('city');
		    echo $this->Form->input('state_id', array('empty' => ''));
		    echo $this->Form->input('zip');
		    ?>
		</table>
	</div>
</div>
<br>

<div class="row">
	<div class="col">
		<div align="right">
		<?php echo $this->Form->end('Save');?>
		</div>
	</div>
</div>
