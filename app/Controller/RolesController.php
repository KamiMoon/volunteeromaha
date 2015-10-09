<?php


class RolesController extends AppController {
	
	public $components = array (
			'Paginator' 
	);
	
	public function index() {
		$this->Role->recursive = 0;
		$this->set ( 'roles', $this->Paginator->paginate () );
	}
	
	public function view($id = null) {
		if (! $this->Role->exists ( $id )) {
			throw new NotFoundException ( __ ( 'Invalid role' ) );
		}
		$options = array (
				'conditions' => array (
						'Role.' . $this->Role->primaryKey => $id 
				) 
		);
		$this->set ( 'role', $this->Role->find ( 'first', $options ) );
	}
	
	public function add() {
		if ($this->request->is ( 'post' )) {
			$this->Role->create ();
			if ($this->Role->save ( $this->request->data )) {
				$this->Session->setFlash ('The role has been saved.', 'success');
				return $this->redirect ( array (
						'action' => 'index' 
				) );
			} else {
				$this->Session->setFlash ( __ ( 'The role could not be saved. Please, try again.' ) );
			}
		}
	}
	

	public function edit($id = null) {
		if (! $this->Role->exists ( $id )) {
			throw new NotFoundException ( __ ( 'Invalid role' ) );
		}
		if ($this->request->is ( array (
				'post',
				'put' 
		) )) {
			if ($this->Role->save ( $this->request->data )) {
				$this->Session->setFlash ('The role has been saved.', 'success');
				return $this->redirect ( array (
						'action' => 'index' 
				) );
			} else {
				$this->Session->setFlash ( __ ( 'The role could not be saved. Please, try again.' ) );
			}
		} else {
			$options = array (
					'conditions' => array (
							'Role.' . $this->Role->primaryKey => $id 
					) 
			);
			$this->request->data = $this->Role->find ( 'first', $options );
		}
	}
	
	

}
