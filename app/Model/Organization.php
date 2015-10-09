<?php

class Organization extends AppModel {

	public $belongsTo = array (
			'State' => array (
					'className' => 'State',
					'foreignKey' => 'state_id'
			),
			'Status' => array (
					'className' => 'Status',
					'foreignKey' => 'status_id'
			),
			'Category' => array(
					'className' => 'Category',
					'foreignKey'=> 'category_id'
			)
	);
	
	public $hasAndBelongsToMany = array('Interest');
	
	public $hasMany = array (
			'Event' => array (
					'className' => 'Event',
					'foreignKey' => 'organization_id',
					'dependent' => true
			)
	);

	
	//validation rules see User.php and  - http://book.cakephp.org/2.0/en/models/data-validation.html
	public $validate = array(
			'name' => array(
					'required' => array(
							'rule' => array('notEmpty'),
							'message' => 'A name is required'
					)
			),
			'email' => array(
					'required' => array(
							'rule' => array('notEmpty'),
							'message' => 'An email is required'
					),
					'email'
			),
			'phone' => array(
					'rule' => array('phone', null, 'us'),
					'message' => 'Please input a Valid US phone number',
					'allowEmpty' => true
			),
			'category_id' => array(
					'rule' => array('notEmpty'),
					'message' => 'Please select a category'
			),
			'short_description' => array(
					'required' => array(
							'rule' => array('notEmpty'),
							'message' => 'A short description is required'
					),
					'maxLength' => array(
							'rule' => array('maxLength', 180),
							'message' => 'Your descritpion cannot be more than 180 letters long'
					)
			)
	);
	
	//CakePHP image upload plugin https://github.com/josegonzalez/cakephp-upload
	public $actsAs = array(
			'Upload.Upload' => array(
					'photo' => array(
							'fields' => array(
									'dir' => 'photo_dir'
							),
							'thumbnailSizes' => array(
									'thumb' => '80x80'
							)
					)
			)
	);
	
	
}