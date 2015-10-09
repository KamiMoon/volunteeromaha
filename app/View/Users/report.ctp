
<div>
<ul id="crumbs">
<li><a href="/volunteeromaha/"><span class="glyphicon glyphicon-home"></span> Home</a></li>
<li><a href="/volunteeromaha/users/profile/"><span class="glyphicon glyphicon-user"></span> Todo- User</a></li>
<li><i class="glyphicon glyphicon-print"></i> Generate Reports</li>
</ul>
<br>
</div>


<h1><span class="glyphicon glyphicon-print"></span> Generate Reports</h1>

<!-- TODO- something is wrong here check again  create forms Report??-->
<?php echo $this->Form->create('Report', array('type' => 'get', 'novalidate' => true));?>


<!-- First Row contains Search Criteras for report generation -->
<div class="row">
	<div class="col-md-6">
	<div class="well" style = "height:380px">	

<!-- Start date picker  -->
				  <div class="row">
				   	  
				   	  <div class="col-md-1">
			  	  	  <?php echo "<p></p>";?>
			  	  	  </div>
					  <div class="col-md-10">
					  <?php  echo $this->Form->datePicker('start_time', array('label'=>'Start Date:','value'=>''));?>
					  </div>
					  <div class="col-md-1"></div>
				  </div>
<!-- End date picker  -->
				  
				  <div class="row">
				  	  <div class="col-md-1">
			  	  	  <?php echo "<p></p>";?>
			  	  	  </div>
					  <div class="col-md-10">
   					  <?php  echo $this->Form->datePicker('end_time', array('label'=>'End Date:','value'=>''));?>
				  	  </div>
				  	  <div class="col-md-1"></div>
				  </div>
<!-- Dropdown list of  Organization for this org admin only -->	
				<div class="row">
					  <div class="col-md-1">
			  	  	  <?php echo "<p></p>";?>
			  	  	  </div>
				  
					  <div class="col-md-10">
							<?php echo $this->Form->input('org_list', array('label' =>'By Organization: ',
				      		'options' => ($reportorg)));?>					  
				    </div>
					  <div class="col-md-1"></div>
				  </div>
<!-- Dropdown list of  events for this org admin only -->	
				<div class="row">
					  <div class="col-md-1">
			  	  	  <?php echo "<p></p>";?>
			  	  	  </div>
				  
					  <div class="col-md-10">
							<?php echo $this->Form->input('within_org_events', array('label' =>'By Event: ',
				      		'options' => ($reportevent)));?>					  
				    </div>
					  <div class="col-md-1"></div>
				  </div>


			      
<!-- Search -->
			      <div class="row">
			      	  <div class="col-md-2">
			  	  	  <?php echo "<p></p>";?>
			  	  	  </div>
				      <div class="col-md-2">
					  <?php echo $this->Form->end('Search');?> 
					  </div>
					   <div class="col-md-2">
					
					  <button type="button" class="btn btn-default" style="width: 80px; height: 35px">
  					  <a href="/volunteeromaha/users/report">Reset</a>
					  </button>
					  
					  </div>
				      <div class="col-md-6">
				      <?php echo "<p></p>";?>
				      </div>
			      </div>
			</div>
		</div>
<!-- TODO recent downloaded/generated reports history tab. Desired not required -->		
		
		<div class="col-md-6">
			<div class="well" style = "height:380px">
				<h4><span class="glyphicon glyphicon-download-alt"></span> Recent reports/ History goes here - TODO</h4>
				<table class="table">
				<thead>
					<th>date</th>
					<th>time</th>
					<th>User name</th>
				</thead>	
				<tbody>
					<td>12th May</td>
					<td>12:00pm</td>
					<td>name of primary/sec admin</td>
				</tbody>
				</table>
				</div>
		</div>		
</div>	   
<!-- End of First Row -->
<hr>

<br><br>
<!-- Second Row needs to be a separate printable page -->
<br><br>

<script>
	var pfHeaderImgUrl = '';
	var pfHeaderTagline = '';
	var pfdisableClickToDel = 0;
	var pfHideImages = 1;
	var pfImageDisplayStyle = 'right';
	var pfDisablePDF = 0;
	var pfDisableEmail = 0;
	var pfDisablePrint = 0;
	var pfCustomCSS = '';
	var pfBtVersion = '1';
	(function() {
		var js, pf;
		pf = document.createElement('script');
		pf.type = 'text/javascript';
		if ('https:' == document.location.protocol) {
			js = 'https://pf-cdn.printfriendly.com/ssl/main.js'
		} else {
			js = 'http://cdn.printfriendly.com/printfriendly.js'
		}
		pf.src = js;
		document.getElementsByTagName('head')[0].appendChild(pf)
	})();
</script>
<a href="http://www.volunteeromaha.com"
	style="color: #6D9F00; text-decoration: none;" class="printfriendly"
	onclick="window.print();return false;" title="Printer Friendly and PDF"><img
	style="border: none; -webkit-box-shadow: none; box-shadow: none;"
	src="http://cdn.printfriendly.com/button-print-grnw20.png"
	alt="Print Friendly and PDF" /></a>

<div class="printable">

    <?php foreach($events as $event): ?>

    <tr>
    	<td></td>
        <td align="center"><b><?php echo $i; $i=$i+1;?>.</b></td>
        <td></td>
        <td>
        <div class="row">
        <div class="col-md-3" align="center">
        <img src="/volunteeromaha/files/event/photo/<?php echo $event['Event']['id'];?>/thumb_<?php echo $event['Event']['photo'];?>"  alt="Profile Image" />
        </div>
        <div class="col-md-9">
        	<div class="row">
    		<b><?php echo $event['Event']['name']; ?></b>
        	</div>
        	<div class="row" align="justify">
        	<?php echo substr($event['Event']['description'], 0, 220);?>...<br>
        	<a href="/volunteeromaha/events/view/<?php echo $event['Event']['id'];?>" ><button type="button" class="btn btn-link btn-sm"><span class="glyphicon glyphicon-plus"></span> More</button></a>
        	</div>
        </div>
        </div>
        </td>
        <td></td>
        <td><?php echo $event['Event']['start_time']; ?></td>
        <td></td>
        <td><?php echo $event['Event']['end_time']; ?></td>
        <td></td>
        <td>
        <div class="mapstyle">
				<p align="center" class="textinside"><?php echo $event['Event']['distance']; ?></p>
		</div>
        </td>
        <td></td>
    </tr>
    
    <?php endforeach;?>


</div>