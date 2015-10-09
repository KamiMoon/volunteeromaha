<?php
class InterestsController extends AppController {
	
	public function beforeFilter() {
		parent::beforeFilter ();
	}

	public function isAuthorized($user) {
	
		//voadmin only
		return $this->_isVoAdmin();
	
	}
	
	
	
	public function index() {
		$this->set("interests", $this->Interest->find('all'));
	}

	public function add() {
		
		if ($this->request->is('post')) {

			if ($this->Interest->save($this->request->data)) {
				$this->Session->setFlash('Your interest has been saved', 'success');
				return $this->redirect(array('action' => 'index'));
			}
		}
	}

	public function edit($id = null) {
		if (!$id) {
			throw new NotFoundException('Invalid Interest');
		}

		$interest = $this->Interest->findById($id);
		if (!$interest) {
			throw new NotFoundException('Invalid, Interest Not Found');
		}
	

		if ($this->request->is('post') || $this->request->is('put')) {
			$this->Interest->id = $id;
			if ($this->Interest->save($this->request->data)) {
				$this->Session->setFlash('Your interest has been updated.', 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Unable to update your interest.');
			}
		}

		if (!$this->request->data) {
			$this->request->data = $interest;
		}
	}
	
	public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
	
		if ($this->Interest->delete($id)) {
			$this->Session->setFlash('Interest deleted', 'success');
			return $this->redirect(array('action' => 'index'));
		}
	}
	
}