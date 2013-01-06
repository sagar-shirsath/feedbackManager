<?php
App::uses('AppController', 'Controller');
App::uses('AuthComponent', 'Controller/Component');
/**
 * Teachers Controller
 *
 * @property Teacher $Teacher
 */
class TeachersController extends AppController {
public function beforeFilter() {
    parent::beforeFilter();
    $this->Auth->allow('*');
}
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Teacher->recursive = 0;
		$this->set('teachers', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Teacher->id = $id;
		if (!$this->Teacher->exists()) {
			throw new NotFoundException(__('Invalid teacher'));
		}
		$this->set('teacher', $this->Teacher->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Teacher->create();
			if ($this->Teacher->save($this->request->data)) {
				$this->Session->setFlash(__('The teacher has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The teacher could not be saved. Please, try again.'));
			}
		}
		$users = $this->Teacher->User->find('list');
		$feedbackForms = $this->Teacher->FeedbackForm->find('list');
		$this->set(compact('users', 'feedbackForms'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Teacher->id = $id;
		if (!$this->Teacher->exists()) {
			throw new NotFoundException(__('Invalid teacher'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Teacher->save($this->request->data)) {
				$this->Session->setFlash(__('The teacher has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The teacher could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Teacher->read(null, $id);
		}
		$users = $this->Teacher->User->find('list');
		$feedbackForms = $this->Teacher->FeedbackForm->find('list');
		$this->set(compact('users', 'feedbackForms'));
	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Teacher->id = $id;
		if (!$this->Teacher->exists()) {
			throw new NotFoundException(__('Invalid teacher'));
		}
		if ($this->Teacher->delete()) {
			$this->Session->setFlash(__('Teacher deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Teacher was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
