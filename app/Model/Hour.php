<?php
class Hour extends AppModel {
	//TODO - validation rules see User.php and  - http://book.cakephp.org/2.0/en/models/data-validation.html
	public $validate = array(

	);
	
	public $belongsTo = array (
			'User' => array (
					'className' => 'User',
					'foreignKey' => 'user_id'
			),
			'Status' => array (
					'className' => 'Status',
					'foreignKey' => 'status_id'
			),
			'Registration' => array (
					'className' => 'Registration',
					'foreignKey' => 'registration_id'
			)
	);

	

}