<?php $user = $this->Session->read('Auth.User');?>
<?php $hour = $this->Session->read('Auth.User')?>

<div>
	<ul id="crumbs">
		<li><a href="/volunteeromaha/"><span class="glyphicon glyphicon-home"></span>
				Home</a></li>
		<li><a href="/volunteeromaha/users/profile/<?php echo $user['id'];?>"><span> 
				<?php if(isset($user['photo']))
						{
							echo "<li><a href='/volunteeromaha/users/profile/" . $user['id'] . "'><img src='/volunteeromaha/files/user/photo/".$user['id']. "/thumb_".$user['photo']."' width='20px' height='20px' class='img-circle'> " . $user['username'] . "</a></li>";
						} 
				?>
<li><a href="/volunteeromaha/registrations/"><span
							class="glyphicon glyphicon-list"></span> Registration List</a></li>
	
	</ul>
	<br>
</div>


<!-- Two tabs  containing a section for approving registrant for events and for decision making for approving hours -->
<div class="row">

	<div class="col-md-12">

		<!-- Approve Registrant for Events -->
		<div class="tab-pane active" id="registrants">
			<br>
			<?php echo $this->element('registrations_list'); ?>
		</div>


	</div>
</div>









