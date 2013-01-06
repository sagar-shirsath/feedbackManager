<?php
App::uses('AppController', 'Controller');
/**
 * Managers Controller
 *
 * @property Manager $Manager
 */
class ManagersController extends AppController {

	public function login() {
    if ($this->request->is('post')) {
        if ($this->Auth->login()) {
            $this->redirect($this->Auth->redirect());
        } else {
            $this->Session->setFlash('Your username or password was incorrect.');
        }
    }
}

public function logout() {
    //Leave empty for now.
}

	


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Manager->recursive = 0;
		$this->set('managers', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Manager->id = $id;
		if (!$this->Manager->exists()) {
			throw new NotFoundException(__('Invalid manager'));
		}
		$this->set('manager', $this->Manager->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Manager->create();
			if ($this->Manager->save($this->request->data)) {
				$this->Session->setFlash(__('The manager has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The manager could not be saved. Please, try again.'));
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
		$this->Manager->id = $id;
		if (!$this->Manager->exists()) {
			throw new NotFoundException(__('Invalid manager'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Manager->save($this->request->data)) {
				$this->Session->setFlash(__('The manager has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The manager could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Manager->read(null, $id);
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
		$this->Manager->id = $id;
		if (!$this->Manager->exists()) {
			throw new NotFoundException(__('Invalid manager'));
		}
		if ($this->Manager->delete()) {
			$this->Session->setFlash(__('Manager deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Manager was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
