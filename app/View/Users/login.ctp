
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6 form-2">

<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend>
            <img src="/volunteeromaha/img/Lock.png"/><?php echo __('Please enter your Username and Password'); ?>
        </legend>
      <?php echo $this->Form->input('username');?>
      <?php echo $this->Form->input('password');?>
      
    </fieldset>
    <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-2">
    <?php echo $this->Form->end(__('Login'))?> 
	</div>
	<div class="col-md-2">
	<a href="/volunteeromaha/register"><button type="button" class="btn btn-success">Sign-Up</button></a>
	</div>
	<div class="col-md-6"></div>
	</div>
    </div>
<div class="col-md-3"></div>
</div>
<br><br><br><br><br>