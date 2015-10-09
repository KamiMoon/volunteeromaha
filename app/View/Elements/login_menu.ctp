<?php ?>
<div class="navbar navbar-inverse" role="navigation" style="background-color: white; color: black;">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="/volunteeromaha/" class="navbar-brand"><img src="/volunteeromaha/img/Eye.png" alt="Volunteer Omaha" height="30" style="margin-top: -5px"></a>
        </div>
        <div class="navbar-collapse collapse">
        
          <ul class="nav navbar-nav">
          	<li><a href="/volunteeromaha/"><i class="glyphicon glyphicon-home"></i> Home</a></li>
            <li><a href="/volunteeromaha/about"><i class="glyphicon glyphicon-info-sign"></i> About Us</a></li>
            <li><a href="/volunteeromaha/organizations"><i class="glyphicon glyphicon-globe"></i>  Organizations</a></li>
            <li><a href="/volunteeromaha/events"><i class="glyphicon glyphicon-tasks"></i> Events</a></li>
          	<li><a href="/volunteeromaha/opportunities"><i class="glyphicon glyphicon-check"></i> Volunteer Opportunities</a></li>
            <li><a href="/volunteeromaha/leaderboards"><i class="glyphicon glyphicon-list"></i> Leaderboard</a></li>
            <li><a href="/volunteeromaha/contact"><i class="glyphicon glyphicon-envelope"></i> Contact Us</a></li>
            </ul>
          <ul class="nav navbar-nav navbar-right">
          
          
		 	<?php
			$user = $this->Session->read('Auth.User');
			if (!empty($user)) 
				{

				if(isset($user['photo']))
						{
							echo "<li><a href='/volunteeromaha/users/profile/" . $user['id'] . "'><img src='/volunteeromaha/files/user/photo/".$user['id']. "/thumb_".$user['photo']."' width='20px' height='20px' class='img-circle'> " . $user['username'] . "</a></li> <li><a href='/volunteeromaha/logout'><span class='glyphicon glyphicon-log-out'></span> Logout</a></li>";
						} 
					else 	{
							echo "<li><a href='/volunteeromaha/users/profile/" . $user['id'] . "'><span class='glyphicon glyphicon-user'></span> ".$user['username'] . "</a></li> <li><a href='/volunteeromaha/logout'><span class='glyphicon glyphicon-log-out'></span> Logout</a></li>";
							} 
							
				} 
				else {
					echo "<li><a href='/volunteeromaha/register'><span class='glyphicon glyphicon-new-window'></span> Register</a></li>  <li><a href='/volunteeromaha/login'><span class='glyphicon glyphicon-log-in'></span> Login</a></li>";
				}
		 	?>
		 	
          </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </div>