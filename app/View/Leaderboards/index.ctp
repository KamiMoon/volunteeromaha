<?php 

?>
<div>
<ul id="crumbs">
<li><a href="/volunteeromaha/"><span class="glyphicon glyphicon-home"></span> Home</a></li>
<li><i class="glyphicon glyphicon-list"></i> Leaderboard</li>
</ul>
<br>
</div>
<div class="row">
<div class="col-md-4">
<h1>Leaderboard</h1>
</div>
<div class="col-md-4">
					<img src="img/Omaha.png" width="400px">
				</div>
<div class="col-md=4">
				</div>
</div>
<br>
<div class="row">
<div class="col-md-4">
<div class="panel panel-info">
			<div class="panel-body">
				<i class="glyphicon glyphicon-fire"></i> <b>Top 5 Students</b>
			</div>
			<div class="panel-footer">
				<table class="table">
					
					<tr>
					<th>ID</th>
					<th></th>
					<th>Name</th>
					<th></th>
					<th>Hours</th>
					<th>Rating</th>
					</tr>
					
					<?php $i=1;?>
					<?php foreach ($hoursList as $hours): ?>
					
					<tr>
					<td><b><?php echo $i.'.'; ?></b></td>
					<td><?php
						if (!empty($hours['User']['photo'])) 
							{
			
							echo "<img src='/volunteeromaha/files/user/photo/".$hours['User']['id']. "/".$hours['User']['photo']."' width='30px' height='30px' class='img-circle'> ";
									 
							} 
							else {
								echo "<img src='/volunteeromaha/img/Default.png' width='30px' height='30px' class='img-circle'> ";
							}
					 	?>
					</td>
					<td><?php echo $hours['User']['first_name'];?>&nbsp;<?php echo $hours['User']['last_name'];?></td>
					<td>&nbsp;&nbsp;</td>
					<td><?php echo $hours['0']['total'];?></td>
					<td><?php echo $this->Leaderboard->getBadgeforUser($hours['0']['total']);?></td>
					<?php $i++;?>
					</tr>
					<?php if ($i==6){
						break;	
					}?>
					<?php endforeach; ?>
					</table>
			</div>
		</div>
</div>
<div class="col-md-4">
<div class="panel panel-info">
			<div class="panel-body">
				<i class="glyphicon glyphicon-fire"></i> <b>Top 5 Schools</b>
			</div>
			<div class="panel-footer">
				<table class="table">
					<tr>
					<th>ID</th>
					<th></th>
					<th>Name</th>
					<th></th>
					<th>Hours</th>
					<th>Rating</th>
					
					</tr>
					<tr>
					<?php $i=1;?>
					<?php foreach ($schoolsHr as $schoolHr): ?>
					<tr>
					<td><b><?php echo $i.'.'; ?></b></td>
					<td>
					<?php
					if(isset($schoolHr['Organization']['photo']))
								{
									echo "<img src='/volunteeromaha/files/organization/photo/".$schoolHr['Organization']['id']. "/".$schoolHr['Organization']['photo']."' width='30px' height='30px' class='img-circle'> ";
								} 
							else{
									echo "<img src='/volunteeromaha/img/Default.png' width='30px' height='30px' class='img-circle'>";
								} 
				 	?>
					</td>
					<td>
						<a href="/volunteeromaha/organizations/view/<?php echo $schoolHr['Organization']['id'];?>"><?php echo $schoolHr['Organization']['name'];?></a>
						
					</td>
					<td>&nbsp;&nbsp;</td>
					<td><?php echo $schoolHr['0']['total']; ?></td>
					
					<?php $i++;?>
					<td><?php echo $this->Leaderboard->getBadgeforSchool($schoolHr['0']['total']);?></td>
					</tr>
					<?php if ($i==6){
						break;	
					}?>
					<?php endforeach; ?>
					</table>
			</div>
		</div>
</div>
<div class="col-md-4">
<div class="panel panel-info">
			<div class="panel-body">
				<i class="glyphicon glyphicon-fire"></i> <b>Top 5 Organizations</b>
			</div>
			<div class="panel-footer">
				<table class="table">
					<tr>
					<th>ID</th>
					<th></th>
					<th>Name</th>
					<th></th>
					<th>Hours</th>
					<th>Rating</th>
					</tr>
					<?php $i=1;?>
					<?php foreach ($organizationsHr as $organizationHr): ?>
					<tr>
					<td><b><?php echo $i.'.'; ?></b></td>
					<td>
					<?php
					if(isset($organizationHr['Organization']['photo']))
								{
									echo "<img src='/volunteeromaha/files/organization/photo/".$organizationHr['Organization']['id']. "/".$organizationHr['Organization']['photo']."' width='30px' height='30px' class='img-circle'> ";
								} 
							else{
									echo "<img src='/volunteeromaha/img/Default.png' width='30px' height='30px' class='img-circle'>";
								} 
				 	?>
					</td>
					<td>
						<a href="/volunteeromaha/organizations/view/<?php echo $organizationHr['Organization']['id'];?>"><?php echo $organizationHr['Organization']['name'];?></a>
					</td>
					<td>&nbsp;&nbsp;</td>
					<td><?php echo $organizationHr['0']['total']; ?></td>
					<?php $i++;?>
					<td><?php echo $this->Leaderboard->getBadgeForOrganization($organizationHr['0']['total']);?></td>
					</tr>
					<?php if ($i==6){
						break;	
					}?>
					<?php endforeach; ?>
					</table>
			</div>
		</div>
</div>
</div>
<hr>
<div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <span	class= "glyphicon glyphicon-user"></span> <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
         Students Leaderboard <span class=" spangglyph glyphicon glyphicon-chevron-down"></span> 
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse">
      <div class="panel-body">
        <table class="table">
					
					<tr>
					<th>ID</th>
					<th></th>
					<th>Name</th>
					<th></th>
					<th>Total Hours</th>
					<th>Rating</th>
					</tr>
	
					
					
					<?php $i=1;?>
					<?php foreach ($hoursList as $hours): ?>
					
					<tr>
					<td><b><?php echo $i.'.'; ?></b></td>
					<td><?php
						if (!empty($hours['User']['photo'])) 
							{
			
							echo "<img src='/volunteeromaha/files/user/photo/".$hours['User']['id']. "/".$hours['User']['photo']."' width='50px' height='50px' class='img-circle'> ";
									 
							} 
							else {
								echo "<img src='/volunteeromaha/img/Default.png' width='50px' height='50px' class='img-circle'> ";
							}
					 	?>
					</td>
					<td><?php echo $hours['User']['first_name'];?>&nbsp;<?php echo $hours['User']['last_name'];?></td>
					<td>&nbsp;&nbsp;</td>
					<td><?php echo $hours['0']['total'];?></td>
					
					<td><?php echo $this->Leaderboard->getBadgeForUser($hours['0']['total']);?></td>
					<?php $i++;?>
					</tr>
					<?php endforeach; ?>
					</table>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <span	class="glyphicon glyphicon-book"></span> <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
          Schools Leaderboard <span class=" spangglyph glyphicon glyphicon-chevron-down"></span> 
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse">
      <div class="panel-body">
        <table class="table">
					<tr>
					<th>ID</th>
					<th></th>
					<th>Name</th>
					<th></th>
					<th>Total Hours</th>
					<th>Rating</th>
					</tr>
					<tr>
					<?php $i=1;?>
					<?php foreach ($schoolsHr as $schoolHr): ?>
					<tr>
					<td><b><?php echo $i.'.'; ?></b></td>
					<td>
					<?php
					if(isset($schoolHr['Organization']['photo']))
								{
									echo "<img src='/volunteeromaha/files/organization/photo/".$schoolHr['Organization']['id']. "/".$schoolHr['Organization']['photo']."' width='50px' height='50px' class='img-circle'> ";
								} 
							else{
									echo "<img src='/volunteeromaha/img/Default.png' width='50px' height='50px' class='img-circle'>";
								} 
				 	?>
					</td>
					<td>
						<a href="/volunteeromaha/organizations/view/<?php echo $schoolHr['Organization']['id'];?>"><?php echo $schoolHr['Organization']['name'];?></a>
						
					</td>
					<td>&nbsp;&nbsp;</td>
					<td><?php echo $schoolHr['0']['total']; ?></td>
					<?php $i++;?>
					<td><?php echo $this->Leaderboard->getBadgeForSchool($schoolHr['0']['total']);?></td>
					</tr>
					<?php endforeach; ?>
					</table></div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <span class="glyphicon glyphicon-globe"></span> <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
          Organizations Leaderboard<span class=" spangglyph glyphicon glyphicon-chevron-down"></span> 
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse">
      <div class="panel-body">
        <table class="table">
					<tr>
					<th>ID</th>
					<th></th>
					<th>Name</th>
					<th></th>
					<th>Total Hours</th>
					<th>Rating</th>
					</tr>
					<?php $i=1;?>
					<?php foreach ($organizationsHr as $organizationHr): ?>
					<tr>
					<td><b><?php echo $i.'.'; ?></b></td>
					<td>
					<?php
					if(isset($organizationHr['Organization']['photo']))
								{
									echo "<img src='/volunteeromaha/files/organization/photo/".$organizationHr['Organization']['id']. "/".$organizationHr['Organization']['photo']."' width='50px' height='50px' class='img-circle'> ";
								} 
							else{
									echo "<img src='/volunteeromaha/img/Default.png' width='50px' height='50px' class='img-circle'>";
								} 
				 	?>
					</td>
					<td>
						<a href="/volunteeromaha/organizations/view/<?php echo $organizationHr['Organization']['id'];?>"><?php echo $organizationHr['Organization']['name'];?></a>
					</td>
					<td>&nbsp;&nbsp;</td>
					<td><?php echo $organizationHr['0']['total']; ?></td>
					<?php $i++;?>
					<td><?php echo $this->Leaderboard->getBadgeForOrganization($organizationHr['0']['total']);?></td>
					
					</tr>
					<?php endforeach; ?>
					</table>
        </div>
    </div>
  </div>
</div>
<!--BACK TO TOP STARTS (Remove Comment to Enable Back to Top Button)-->
<!-- <a href="#" rel="nofollow" style="display:scroll;position:fixed;bottom:10px;right:5px;" title="Back to Top" class="seoquake-nofollow"><img src="/volunteeromaha/img/bttb.png" title="Back to top" height="50px"></a>  -->
<!--BACK TO TOP ENDS-->