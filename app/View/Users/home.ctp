
<div class="row">

	<div class="col-md-4">
		<br> <a><img src="/volunteeromaha/img/Logoblack.png"
			alt="Volunteer Omaha" height=60px></a>
	</div>
	<div class="col-md-8">
		<img src="/volunteeromaha/img/Omaha.png" width="600px">
	</div>
</div>

<hr>

<div class="row">
	<div class="col-md-12">
		<div id="carousel-example-generic" class="carousel slide"
			data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#carousel-example-generic" data-slide-to="0"
					class="active"></li>
				<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				<li data-target="#carousel-example-generic" data-slide-to="2"></li>
				<li data-target="#carousel-example-generic" data-slide-to="3"></li>
				<li data-target="#carousel-example-generic" data-slide-to="4"></li>
				<li data-target="#carousel-example-generic" data-slide-to="5"></li>
				<li data-target="#carousel-example-generic" data-slide-to="6"></li>
				<li data-target="#carousel-example-generic" data-slide-to="7"></li>
				<li data-target="#carousel-example-generic" data-slide-to="8"></li>
				
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner" style="max-height: 400px">
				<div class="item active">
					<img width="1300px" class="img-thumbnail"
						class="img-responsive" alt="First slide"
						src="/volunteeromaha/img/slide1.png">
					<div class="carousel-caption">
						<h3></h3>
						<p>
							<strong><font color="green">Volunteer Omaha is the best!!</font></strong>
						</p>
					</div>
				</div>
				<div class="item">
					<img width="1300px" class="img-thumbnail"
						class="img-responsive" alt="Second slide"
						src="/volunteeromaha/img/slide2.png">
				</div>
				<div class="item">
					<img width="1300px" class="img-thumbnail"
						class="img-responsive" alt="Third slide"
						src="/volunteeromaha/img/slide3.png">
				</div>
				<div class="item">
					<img width="1300px" class="img-thumbnail"
						class="img-responsive" alt="Fourth slide"
						src="/volunteeromaha/img/slide4.png">
				</div>
				<div class="item">
					<img width="1300px" class="img-thumbnail"
						class="img-responsive" alt="Fifth slide"
						src="/volunteeromaha/img/slide5.png">
				</div>
				<div class="item">
					<img width="1300px" class="img-thumbnail"
						class="img-responsive" alt="Fifth slide"
						src="/volunteeromaha/img/slide6.png">
				</div>
				<div class="item">
					<img width="1300px" class="img-thumbnail"
						class="img-responsive" alt="Fifth slide"
						src="/volunteeromaha/img/slide7.png">
				</div>
				<div class="item">
					<img width="1300px" class="img-thumbnail"
						class="img-responsive" alt="Fifth slide"
						src="/volunteeromaha/img/slide8.png">
				</div>
				<div class="item">
					<img width="1300px" class="img-thumbnail"
						class="img-responsive" alt="Fifth slide"
						src="/volunteeromaha/img/slide9.png">
				</div>
				
			</div>

			<!-- Controls -->
			<a class="left carousel-control" href="#carousel-example-generic"
				data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span>
			</a> <a class="right carousel-control"
				href="#carousel-example-generic" data-slide="next"> <span
				class="glyphicon glyphicon-chevron-right"></span>
			</a>
		</div>
	</div>
	<script>

			$(document).ready(function(){
				$('.carousel').carousel();
			});
			
			
		</script>
</div>

<hr>

<div class="row">
	<div class="col-md-6">
		<div class="panel panel-info">
			<div class="panel-heading">
				<i class="glyphicon glyphicon-flash"></i> <b>Upcoming Events</b>
			</div>
			<div class="panel-body">
			<?php $i=1; ?>
				<?php foreach ($events as $event): ?>
				
				<div class="row">
					<div class="col-md-3" align="center" style="margin-top: 10px;">
						<p>
							<a
								href="/volunteeromaha/events/view/<?php echo $event['Event']['id'];?>">
						<?php if(isset($event['Event']['photo'])){?>
						<img
								src="/volunteeromaha/files/event/photo/<?php echo $event['Event']['id']?>/<?php echo $event['Event']['photo']?>"
								alt="<?php echo $event['Event']['name'];?>" height=80px
								width=80px class="img-thumbnail" />
						<?php
					
} else {
						echo "<img src='/volunteeromaha/img/Default.png' width='80px' height='80px' class='img-thumbnail'> ";
					}
					?></a>
						</p>
					</div>
					<div class="col-md-9">
						<a
							href="/volunteeromaha/events/view/<?php echo $event['Event']['id'];?>"><h5
								style="text-decoration: underline">
								<b><?php echo $event['Event']['name'];?></b>
							</h5></a>
						<p><?php
					echo substr ( $event ['Event'] ['description'], 0, 100 );
					?>...</p>
						<p>
							<a
								href="/volunteeromaha/events/view/<?php echo $event['Event']['id'];?>"><button
									type="button" class="btn btn-default btn-xs">
									<i class="glyphicon glyphicon-plus"></i> More
								</button></a>
						</p>
					</div>
				</div>
				<?php if ($i<3){echo "<hr>";}?>
				<?php $i++;?>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="panel panel-info">
			<div class="panel-heading">
				<i class="glyphicon glyphicon-calendar"></i> <b>Calendar</b>
			</div>
			<div class="panel-body" style="height: 463px" align="center">
				<div style="position: relative;">
<a href="/volunteeromaha/users/calendar">
<p style="position: absolute; top: 1.5em; width: 500px; padding: 4px; color: #666; font-weight: bold; font-size: 14px;">
<?php echo (Date("F d, Y")); ?>
</p>

</div>
				<img
					src="/volunteeromaha/img/Calendar.png" /></a>

			</div>
		</div>
	</div>
</div>

<hr>

<div class="row">
	<div class="col-md-12">
		<div class="panel panel-info">
			<div class="panel-heading">
				<i class="glyphicon glyphicon-list"></i> <b>Leaderboard</b>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-4">
						<div class="panel panel-info">
							<div class="panel-body">
								<i class="glyphicon glyphicon-fire"></i> <b>Top 5 Students</b>
							</div>
							<div class="panel-footer">
								<table class="table">

									<tr>
										<th></th>
										<th></th>
										<th>Name</th>
										<th></th>
										<th>Hours</th>
										<th></th>
									</tr>
					
					<?php $i=1;?>
					<?php foreach ($hoursList as $hours): ?>
					
					<tr>
										<td><b><?php echo $i.'.'; ?></b></td>
										<td><?php
						if (! empty ( $hours ['User'] ['photo'] )) {
							
							echo "<img src='/volunteeromaha/files/user/photo/" . $hours ['User'] ['id'] . "/" . $hours ['User'] ['photo'] . "' width='30px' height='30px' class='img-circle'> ";
						} else {
							echo "<img src='/volunteeromaha/img/Default.png' width='30px' height='30px' class='img-circle'> ";
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

						<a href="/volunteeromaha/leaderboards"><button type="button"
								class="btn btn-default btn-sm">
								<span class="glyphicon glyphicon-plus"></span> View All
							</button></a>

					</div>
					<div class="col-md-4">
						<div class="panel panel-info">
							<div class="panel-body">
								<i class="glyphicon glyphicon-fire"></i> <b>Top 5 Schools</b>
							</div>
							<div class="panel-footer">
								<table class="table">
									<tr>
										<th></th>
										<th></th>
										<th>Name</th>
										<th></th>
										<th>Hours</th>
										<th></th>
									</tr>
									<tr>
					<?php $i=1;?>
					<?php foreach ($schoolsHr as $schoolHr): ?>
					
									
									
									<tr>
										<td><b><?php echo $i.'.'; ?></b></td>
										<td>
					<?php
						if (isset ( $schoolHr ['Organization'] ['photo'] )) {
							echo "<img src='/volunteeromaha/files/organization/photo/" . $schoolHr ['Organization'] ['id'] . "/" . $schoolHr ['Organization'] ['photo'] . "' width='30px' height='30px' class='img-circle'> ";
						} else {
							echo "<img src='/volunteeromaha/img/Default.png' width='30px' height='30px' class='img-circle'>";
						}
						?>
					</td>
										<td><a href="/volunteeromaha/organizations/view/<?php echo $schoolHr['Organization']['id'];?>"><?php echo $schoolHr['Organization']['name'];?></a></td>
										<td>&nbsp;&nbsp;</td>
										<td><?php echo $schoolHr['0']['total']; ?></td>
					<?php $i++;?>
					<td><?php echo $this->Leaderboard->getBadgeForSchool($schoolHr['0']['total']); ?></td>
									</tr>
					
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
										<th></th>
										<th></th>
										<th>Name</th>
										<th></th>
										<th>Hours</th>
										<th></th>
									</tr>
					<?php $i=1;?>
					<?php foreach ($organizationsHr as $organizationHr): ?>
					<tr>
										<td><b><?php echo $i.'.'; ?></b></td>
										<td>
					<?php
						if (isset ( $organizationHr ['Organization'] ['photo'] )) {
							echo "<img src='/volunteeromaha/files/organization/photo/" . $organizationHr ['Organization'] ['id'] . "/" . $organizationHr ['Organization'] ['photo'] . "' width='30px' height='30px' class='img-circle'> ";
						} else {
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
					<td><?php echo $this->Leaderboard->getBadgeForOrganization($organizationHr['0']['total']); ?></td>
									</tr>
					<?php endforeach; ?>
					</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<hr>
<div class="row">
	<div class="col-md-9">
		<div class="panel panel-info">
			<div class="panel-body">
				<i class="glyphicon glyphicon-fire"></i> <b>Featured Organizations</b>
			</div>
			<div class="panel-footer">
				<div class="row" align="center">
					<?php foreach ($organizations as $organization): ?>
					<div class="col-md-3">

						<a
							href="/volunteeromaha/organizations/view/<?php echo $organization['Organization']['id'];?>"><?php
						if (isset ( $organization ['Organization'] ['photo'] )) {
							echo "<img src='/volunteeromaha/files/organization/photo/" . $organization ['Organization'] ['id'] . "/" . $organization ['Organization'] ['photo'] . "' width='100px' height='100px' class='img-thumbnail'> ";
						} else {
							echo "<img src='/volunteeromaha/img/Default.png' width='100px' height='100px' class='img-thumbnail'> ";
						}
						?></a>


						<p>
							<b><a
								href="/volunteeromaha/organizations/view/<?php echo $organization['Organization']['id'];?>"><?php echo $organization['Organization']['name']; ?></a></b>
						</p>

					</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-3">
		<div class="panel panel-info">
			<div class="panel-body">
				<i class="glyphicon glyphicon-link"></i> <b>Useful Links</b>
			</div>
			<div class="panel-footer">
				<div class="panel-body">
					<ul>
						<li style="list-style-type:square"><a href="http://www.unomaha.edu">University of Nebraska, Omaha</a></li>
						<li style="list-style-type:square"><a href="http://www.omaha.com">Omaha.com</a></li>
						<li style="list-style-type:square"><a href="http://www.cityofomaha.org">City of Omaha</a></li>
						<li style="list-style-type:square"><a href="http://www.ops.org">Omaha Public Schools</a></li>
						<li style="list-style-type:square"><a href="http://www.foodpantries.org">Food Banks, Omaha</a></li>
						<li style="list-style-type:square"><a href="http://www.redcross.org/ne/omaha">American Red Cross, Omaha</a></li>
						
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>









