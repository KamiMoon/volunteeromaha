<h1>Log Hours </h1>

<?php
echo $this->Form->create('Hour');
echo $this->Form->input('user_id', array('type' => 'hidden','value' => $user_id));
echo $this->Form->input('registration_id', array('type' => 'hidden','value' => $registration_id));
echo $this->Form->input('hours');


/* TODO - notifications */
echo $this->Form->end('Save');
?>