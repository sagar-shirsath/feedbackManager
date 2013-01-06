<?php
App::uses('AppController', 'Controller');
/**
 * Students Controller
 *
 * @property Student $Student
 */
class StudentsController extends AppController {
	var $uses=array('User');
/**
 * index method
 *
 * @return void
 */
 public function beforeFilter() {
    parent::beforeFilter();
    $this->Auth->allow('index', 'view');
}

	public function home() {
		//$this->Student->recursive = 0;
		
		$first_name = $this->data['User']['name'];
		$this->set('students', $first_name);
	
		//$this->User->find(array('username' => 'Username'));
	}

	public function index() {
		$this->Student->recursive = 0;
		$this->set('students', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Student->id = $id;
		if (!$this->Student->exists()) {
			throw new NotFoundException(__('Invalid student'));
		}
		$this->set('student', $this->Student->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Student->create();
			if ($this->Student->save($this->request->data)) {
				$this->Session->setFlash(__('The student has been saved'));
					$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The student could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Student->id = $id;
		if (!$this->Student->exists()) {
			throw new NotFoundException(__('Invalid student'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Student->save($this->request->data)) {
				$this->Session->setFlash(__('The student has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The student could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Student->read(null, $id);
		}
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
		$this->Student->id = $id;
		if (!$this->Student->exists()) {
			throw new NotFoundException(__('Invalid student'));
		}
		if ($this->Student->delete()) {
			$this->Session->setFlash(__('Student deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Student was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
