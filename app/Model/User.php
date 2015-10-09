<?php

App::uses('SimplePasswordHasher', 'Controller/Component/Auth');

class User extends AppModel {
	
	public $belongsTo = array (
			'State' => array (
					'className' => 'State',
					'foreignKey' => 'state_id'
			)
	);
public $hasAndBelongsToMany = 'Interest';
	
	public $hasMany = array(
			'Registration' => array(
					'className' => 'Registration'
			)
	);

	//CakePHP image upload plugin https://github.com/josegonzalez/cakephp-upload
	public $actsAs = array(
			/*'Acl' => array('type' => 'requester'),*/
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
		
	public $validate = array(
			'first_name' => array(
					'required' => array(
							'rule' => array('notEmpty'),
							'message' => 'A first name is required'
					)
			),
			'last_name' => array(
					'required' => array(
							'rule' => array('notEmpty'),
							'message' => 'A first name is required'
					)
			),
			'username' => array(
					'required' => array(
							'rule' => array('notEmpty'),
							'message' => 'A username is required'
					),
					'unique' => array(
							'rule'    => 'isUnique',
							'message' => 'This username has already been taken.'
					)
			),
			'password' => array(
					'required' => array(
							'rule' => array('notEmpty'),
							'message' => 'A password is required'
					),
					'minLength' => array(
							'rule' => array('minLength', 6),
							'message' => 'Your password must be at least 6 characters long.'
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
					'allowEmpty' => true,
					
			),
			'terms' => array(
					'notEmpty' => array(
							'rule'     => array('comparison', '!=', 0),
							'required' => true,
							'message'  => 'Please check this box if you want to proceed.'
					)
			)	
					
);
	
	public function beforeSave($options = array()) {
		if (!$this->id) {
			$passwordHasher = new SimplePasswordHasher();
			$this->data['User']['password'] = $passwordHasher->hash(
					$this->data['User']['password']
			);
		}
		return true;
	}
	
	function getActivationHash(){
		if (!isset($this->id)) {
			return false;
		}
		return substr(Security::hash(Configure::read('Security.salt') . $this->field('created') . date('Ymd')), 0, 8);
	}
	
}