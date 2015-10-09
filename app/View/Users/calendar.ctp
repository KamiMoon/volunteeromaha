<div class="pagebg">
<div id='calendar'></div>


<style>
#calendar {
	width: 900px;
	margin: 0 auto;
}
</style>

<script>

	$(document).ready(function() {
		
		$('#calendar').fullCalendar({
			editable: false,
			events : '/volunteeromaha/organizations/calendarjson/<?php echo $orgId;?>.json'
		});
		
	});

</script>
</div>