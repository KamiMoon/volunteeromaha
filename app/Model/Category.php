<?php

class Category extends AppModel {
	
	public $hasMany = array(
			'Organization' => array(
					'className' => 'Organization',
					'foreignKey' => 'category_id',
					'dependent' => false
			)
	);

}