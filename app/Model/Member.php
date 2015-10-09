<?php
class Member extends AppModel {
	//TODO - validation rules see User.php and  - http://book.cakephp.org/2.0/en/models/data-validation.html
	public $validate = array(

	);

	public $belongsTo = array (
			'User' => array (
					'className' => 'User',
					'foreignKey' => 'user_id'
			),
			'Organization' => array (
					'className' => 'Organization',
					'foreignKey' => 'organization_id'
			),
			'Role' => array (
					'className' => 'Role',
					'foreignKey' => 'role_id'
			),
			'Status'=> array(
					'className'=> 'Status',
					'foreignKey'=>'status_id'
			)
	);



}