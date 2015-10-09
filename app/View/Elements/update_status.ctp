<?php 

	if(!isset($defaultAction)){
		$defaultAction = 'updateStatus';
	}
?>
<div class ="row">
<div class = "col-md-6">
<?php 
?>
<div class ="row">
	<div class="col-md-4">
	<?php if($statusId != 2 AND $statusId != 3){
		
		echo $this->Form->postButton( 'Approve', array (
				'action' => $defaultAction,
				$orgId,
				$updateId,
				2), array('class' => 'btn btn-success'));
	?></div>
	<div class ="col-md-4">
	</div>
	<div class ="col-md-4">
		<?php echo ' '.$this->Form->postButton( 'Disapprove', array (
				'action' => $defaultAction,
				$orgId,
				$updateId,
				3), array('class' => 'btn btn-danger'));
?></div>
	</div>
	</div>
<div class ="col-md-6">
<?php 
	} else if($statusId != 2) {
		
		echo '  ';
		echo $this->Form->postButton( 'Approve', array (
				'action' => $defaultAction,
				$orgId,
				$updateId,
				2), array('class' => 'btn btn-success'));
	    }
	    else if($statusId != 3 ) {
	    	echo '  ';
	    	echo $this->Form->postButton( 'Disapprove', array (
	    			'action' => $defaultAction,
	    			$orgId,
	    			$updateId,
	    			3), array('class' => 'btn btn-danger'));
			
	    }
	    else { }

?>
</div>
</div>