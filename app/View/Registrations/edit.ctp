<h1>Registrations - edit</h1>

<?php
    echo $this->Form->create('Registration');
    echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->datePicker('start_time');
    echo $this->Form->datePicker('end_time');
    echo $this->Form->input('comment', array('type' => 'textarea', 'rows' => '5', 'cols' => '5'));
    echo $this->Form->end('Save');
?>