<?php
App::import('Component', 'AuthComponent');
App::uses('AuthComponent', 'Controller/Component');
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         Cahttp://localhost/cakePHP/groupskePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/epushpan/controllers.html#the-app-controller
 */
class AppController extends Controller {

        public $components = array(
            'Auth' => array(
                'loginAction' => array(
                    'controller' => 'users',
                    'action' => 'login',
                    'plugin' => false
                ),
                'loginRedirect' => array('controller' => 'users', 'action' => 'dashboard'),
                'logoutRedirect'=> array('controller' => 'users', 'action' => 'login'),
                'authError' => 'Did you really think you are allowed to see that?',
                'authenticate' => array(
                    'Form' => array(
                        'fields' => array('username' => 'email','password'=>'password')
                    )
                )
            ),
            'Session'
        );

    public function beforeFilter() {
        $this->Auth->allow('login','logout','add');

    }

    public function beforeRender(){

        if($this->Auth->login()){
            $username = $this->Auth->user('email');
            $this->set(compact('username'));
        }else{
            $username = "";
            $this->set(compact('username'));
        }
    }
    public function get_user_role(){
        return $this->Auth->user('role');
    }
}
?>
