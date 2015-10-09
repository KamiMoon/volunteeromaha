
<?php if($this->Auth->isOrgAdminFor($organization['Organization']['id']) ){ ?>
		<hr>
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-warning">
					<div class="panel-footer">
						<span class="glyphicon glyphicon-map-marker"></span> Members
					</div>
					<div class="panel-body">
						<?php echo $this->element('members_list'); ?>
			       	</div>
			   </div>    	
			</div>
		</div>
		
		<?php if ($adminType == "organization"){?>
		<hr>
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-warning">
					<div class="panel-footer">
						<span class="glyphicon glyphicon-map-marker"></span> Events
					</div>
					<div class="panel-body">
						<?php echo $this->element('events_list_report'); ?>
			       	</div>
			   </div>    	
			</div>
		</div>
		<?php }?>
		<hr>
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-warning">
					<div class="panel-body">
						<span class="glyphicon glyphicon-map-marker"></span> Registrations
					</div>
					<div class="panel-footer">
						<?php echo $this->element('registrations_list'); ?>
			       	</div>
			   </div>    	
			</div>
		</div>
		
		<hr>
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-warning">
					<div class="panel-footer">
						<span class="glyphicon glyphicon-map-marker"></span> Hours
					</div>
					<div class="panel-header">
						<?php echo $this->element('hours_list'); ?>
					</div>
			   </div>    	
			</div>
		</div>
		
<?php if ($adminType == "organization"){?>		
		
<!-- Approve Organization to display on the view page for Organizations and Schools -->	
		<hr>
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-warning">
					<div class="panel-footer">
						<span class="glyphicon glyphicon-map-marker"></span> Approve Organizations
					</div>
					<div class="panel-header">
						<div class = "row">
							<div class = "col-md-9">
							<br>

<form action="/volunteeromaha/organizations/saveApprovedOrganizations/<?php echo $organization['Organization']['id']; ?>" class="form-horizontal" role="form" id="OrganizationAdminForm" method="post" accept-charset="utf-8">
	<div style="display:none;">
		<input type="hidden" name="_method" value="POST">
	</div>
	<input type="hidden" name="data[Organization][id]" seperator="</div>" class="form-control" id="OrganizationId" value="<?php echo $organization['Organization']['id']; ?>">
	<div class="form-group">
		<label for="OrganizationApproveorg" class="col-lg-3 control-label">All Organizations</label>
		<div class="col-lg-8">
		<select name="data[Approveorg][]" seperator="</div>" class="form-control" multiple="multiple" id="OrganizationApproveorg">
		<?php 
		
		
		foreach ($organizations as $orgKey => $orgValue):?>
		
		<option value="<?php echo $orgKey;?>"><?php echo $orgValue;?></option>
		<?php endforeach;?>
		</select>
		</div>
		<div class="col-lg-1"><input class="btn btn-primary" type="submit" value="Save"></div>							
		
	</div>
</form>
						</div>
					</div>
			   </div>    	
			</div>
		</div>
		</div>
<?php }?>

<?php }?>