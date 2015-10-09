<h1>Hour - Edit</h1>

<?php
    echo $this->Form->create('Hour');
    echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->input('hours');
    echo $this->Form->end('Save');
?>