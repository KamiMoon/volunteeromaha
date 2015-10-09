<?php

class Interest extends AppModel {

public $hasAndBelongsToMany = array('User', 'Organization', 'Event');


}
