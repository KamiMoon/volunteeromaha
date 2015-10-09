<?php

class State extends AppModel {

	public $hasMany = array(
			'User' => array(
					'className' => 'User',
					'foreignKey' => 'state_id',
					'dependent' => false
			)
	);

}
