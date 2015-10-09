<h1>Edit interest</h1>

<?php
    echo $this->Form->create('Interest');
    echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->input('interests', array('type' => 'text', 'label' => 'Name'));
    echo $this->Form->end('Save');
?>