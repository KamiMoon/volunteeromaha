<?php ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="/volunteeromaha/favicon.ico">

    <title>
		<?php echo $title_for_layout; ?>
	</title>

    <!-- Bootstrap core CSS -->
    <link href="/volunteeromaha/css/bootstrap.css" rel="stylesheet">
    <link href="/volunteeromaha/css/bootstrap-theme.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/volunteeromaha/css/cake-bootstrap.css" rel="stylesheet">
    
    <link href='/volunteeromaha/fullcalendar/fullcalendar.css' rel='stylesheet' />
	<link href='/volunteeromaha/fullcalendar/fullcalendar.print.css' rel='stylesheet' media='print' />
    
     <link href="/volunteeromaha/css/bootstrap-datetimepicker.min.css" rel="stylesheet">    
    <link href="/volunteeromaha/css/volunteeromaha.css" rel="stylesheet">       
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    
    <script src="/volunteeromaha/js/jquery.min.js"></script>
    <script src="/volunteeromaha/js/jquery-ui.custom.min.js"></script>
    <script src="/volunteeromaha/js/bootstrap.js"></script>
    <script src="/volunteeromaha/fullcalendar/fullcalendar.min.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBGg9RWosoBDg48_PxgpihsEHf9MI3w_kI&sensor=true">
	</script>
    <script src="/volunteeromaha/js/moment-2.4.0.js"></script>
    <script src="/volunteeromaha/js/bootstrap-datetimepicker.js"></script>
    <script src="/volunteeromaha/js/map.js"></script>
    
    
	<script src="/volunteeromaha/js/volunteeromaha.js"></script>	
    
  </head>

  <body>

    <?php echo $this->element('login_menu'); ?>
    	<?php if ($this->request->here == '/volunteeromaha/login' || $this->request->here == '/volunteeromaha/register' ) {
       // some code
       			echo '<div class="container">';
       			
			} else echo'<div class="container pagebg">';?>
	
		<?php echo $this->Session->flash();
		
		
		echo $this->Session->flash('success');
				
		echo $this->Session->flash('auth');
		
		?>
		
		<?php echo $this->fetch('content'); ?>
	<?php echo'</div>'?>
	
	<div class="container">
      <hr>
		
      <footer class="footerfont">
        <div class="row">
        <div class="col-md-3 footerdiv">
        <img src="/volunteeromaha/img/Logoblack.png" alt="Volunteer Omaha" height=40px>
        <b><br>Peter Kiewit Institute (PKI) 170 <br>
        402.554.3819 <br>
		<a href="mailto:vomaha@gmail.com?Subject=Hello%20again" target="_top">vomaha@gmail.com</a>
		
        </b>
        </div>
        <div class="col-md-3">
        <b>Related Resources</b><br>
        <ul>
        <li><a href="/volunteeromaha/about/">What is Volunteer Omaha?</a></li>
        <li><a href="/volunteeromaha/about/">What can you do as a Student?</a></li>
        <li><a href="/volunteeromaha/about/">What can Organizations do?</a></li>
        <li><a href="/volunteeromaha/about/">Who created Volunteer Omaha?</a></li>      
        </ul>
        </div>
        <div class="col-md-3 footerdiv">
        <b>How Can We Help You?</b><br>
        <ul>
        <li><a href="/volunteeromaha/users/faq/">How to use a Date Picker?</a></li>
        <li><a href="/volunteeromaha/users/faq/">How to edit Profile Photos?</a></li>
        <li><a href="/volunteeromaha/users/faq/">How to change Organization Profile?</a></li>
        <li><a href="/volunteeromaha/contact/">Have any other questions?</a></li>    
        </ul>
        </div>
        <div class="col-md-3">
        <b>Welcome to Volunteer Omaha!</b><br>
        Explore our website for Organizations and Volunteer Opportunities! Contribute to your community by participating!
        <p>&copy; Volunteer Omaha 2014</p>
        </div>
        </div>
        
      </footer>
      
    </div> <!-- /container -->
    
<?php // echo $this->element('sql_dump'); ?> 
   <br>
  </body>
</html>