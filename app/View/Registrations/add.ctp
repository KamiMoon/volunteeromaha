<h1>Register for <?php echo $event['Event']['name'];?></h1>

<?php
echo $this->Form->create('Registration');
echo $this->Form->input('user_id', array('type' => 'hidden','value' => $user_id));
echo $this->Form->input('event_id', array('type' => 'hidden','value' => $event_id));
echo $this->Form->datePicker('start_time');
echo $this->Form->datePicker('end_time');
echo $this->Form->input('comment', array('type' => 'textarea', 'rows' => '5', 'cols' => '5'));

/* TODO - notifications */
echo $this->Form->end('Save');
?>
