<?php
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');
App::uses('AuthComponent', 'Controller/Component');
/**
 * Users Controller
 *
 * @property User $User
 */
class UsersController extends AppController
{

/*
public $components = array('ControllerList');

function list1()
{
	$this->set($this->ControllerList->get());
//	$this->set($ctls);
}*/
    var $components = array('Email');

    function User_email()
    {
        $this->User->set($this->data);
        if ($this->User->validates()) {

            $this->Email->to = 'pushpalatamarade@gmail.com';
            $this->Email->subject = 'User Form Submitted';
            $this->Email->from = 'pushpalatamarade@gmail.com'; //$this->data['email'];
            $this->Email->template = 'User_message';
            $this->Email->sendAs = 'text';
            $this->set('message'); //, $this->data['email']);
            if ($this->Email->send()) {
                //t'was successful, let's say as much
                $this->Session->setFlash(__("Your message has been sent", true));
            }

            //failed
            $this->Session->setFlash(__("Your message could not be sent", true));

        }
    }

    public function login()
    {

        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                  return $this->redirect(array('controller' => 'users', 'action' => 'dashboard'));
            } else {
                $this->Session->setFlash(__('Username or password is incorrect'));
            }
        }else if ($this->Auth->login()) {
                return $this->redirect(array('controller' => 'users', 'action' => 'dashboard'));

            }
    }


    public function dashboard(){
           $userRole = $this->get_user_role();
           if($userRole==3){
                $this->redirect(array('action'=>'admin'));
           }else if($userRole==2) {
                $this->redirect(array('action'=>'teacher'));
           }else{
               $this->redirect(array('action'=>'student'));
           }
    }


    public function beforeFilter()
    {
        parent::beforeFilter();
    }

    public function index()
    {
        $this->User->recursive = 0;
        $this->set('users', $this->paginate());
    }

    public function view($id = null)
    {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        $this->set('user', $this->User->read(null, $id));
    }
    public function add()
    {
        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
            }
        }
    }

    public function edit($id = null)
    {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->User->read(null, $id);
        }
    }

    public function delete($id = null)
    {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->User->delete()) {
            $this->Session->setFlash(__('User deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('User was not deleted'));
        $this->redirect(array('action' => 'index'));
    }

    public function admin(){

    }

    public function teacher(){

    }

    public function student(){
        $this->loadModel('Course');
        $this->loadModel('Question');
        $this->loadModel('Rating');
        if ($this->request->is('post') and !empty($this->request->data) ) {
            $data = $this->request->data;
            $teacher_id = $data['Rating']['teacher_id'];
            $course_id = $data['Rating']['course_id'];
            $ratings = $data['Question'];
            $saveData = array('Rating',array());
            foreach($ratings as $key => $rating){
                $saveData['Rating'][] = array('rating'=>$rating,
                'question_id'=>$key,'subject_id'=>$course_id,
                'user_id'=>$teacher_id);

            }
//            pr($saveData);die;
            $this->Session->setFlash('Form has been submitted');
            $this->Rating->saveAll($saveData['Rating']);

        }
        $questions = $this->Question->find('all');
        $cources = $this->Course->getCourseList();
        $teachers = $this->User->getUserList();

        $this->set(array('questions'=>$questions,'cources'=>$cources,'teachers'=>$teachers));
    }

    public function logout(){
        $this->redirect($this->Auth->logout());
    }
}
