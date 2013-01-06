<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 */
class EmployeesController extends AppController 
{
public function index() {
		$this->Employee->recursive = 0;
		$this->set('employees', $this->paginate());
	}

function login() {
	// if the form was submitted
	/*if(!empty($this->data)) {
		// find the user in the database
		$employee = $this->Employee->findByUsername($this->data['Employee']['username']);
		// if found and passwords match
		if(!empty($employee) && ($employee['Employee']['password'] == md5($this->data['Employee']['password']))) {
			// write the username to a session
			$this->Session->write('Employee', $employee);
			// save the login time
			$employee['Employee']['created'] = date("Y-m-d H:i:s");
			$this->Employee->save($employee);*/

	if ($this->request->is('post')) {
        if ($this->Auth->login())
	 {
		//if($this->request->data == $this->)
            $this->redirect($this->Auth->redirect());
		echo "Logged In	";
        } else {
            $this->Session->setFlash('Your username or password was incorrect.');
        }
			// redirect the user
		/*	$this->Session->setFlash('You have successfully logged in.');
			//$this->redirect('/admin/posts/');
		} else {
			$this->set('error', 'Either your username or password is incorrect.');
		}
	}*/
}

function logout() {
	// delete the user session
	$this->Session->delete('Employee');
	// redirect to posts index page
	$this->Session->setFlash('You have successfully logged out.');
	//$this->redirect('/posts/');
}

}
?>
