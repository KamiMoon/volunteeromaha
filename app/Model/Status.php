<?php

class Status extends AppModel {

	public $hasMany = array(
			'Organization' => array(
					'className' => 'Organization',
					'foreignKey' => 'organization_id',
					'dependent' => false
			)
	);

}