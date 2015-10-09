<?php

class Event extends AppModel {
	
	public $belongsTo = array (
			'Organization' => array (
					'className' => 'Organization',
					'foreignKey' => 'organization_id'
			),
			'State' => array (
					'className' => 'State',
					'foreignKey' => 'state_id'
			)
	);
	
	public $hasAndBelongsToMany = array('Interest');
	
	public $hasMany = array (
			'Registration' => array (
					'className' => 'Registration',
					'foreignKey' => 'event_id',
					'dependent' => true
			)
	);
	
	//TODO - validation rules see User.php and  - http://book.cakephp.org/2.0/en/models/data-validation.html
	public $validate = array(
			'name' => array(
					'required' => array(
							'rule' => array('notEmpty'),
							'message' => 'An event name is required'
					),
					'unique' => array(
							'rule'    => 'isUnique',
							'message' => 'This event name has already been taken.'
					)
			),
			'description' => array(
					'required' => array(
							'rule' => array('notEmpty'),
							'message' => 'A description is required.'
					),
					'minLength' => array(
							'rule' => array('minLength', 1),
							'message' => 'Type a description.'
					)
			),
			'confirm_password' => array(
					'identical' => array(
							'rule' => array('identicalFieldValues', 'password'),
							'message' => 'Password confirmation does not match password.'
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
					'message'=> 'Please enter a valid phone',
					'allowEmpty' => true
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