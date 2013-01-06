/*drop table posts;
drop table widgets;
drop table groups;
drop table users;

CREATE TABLE users (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50),
    password VARCHAR(50),
     group_id INT(11) NOT NULL,
    role VARCHAR(20),
    created DATETIME DEFAULT NULL,
    modified DATETIME DEFAULT NULL
);

CREATE TABLE groups (
    id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    created DATETIME,
    modified DATETIME
);

CREATE TABLE posts (
    id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
     title VARCHAR(255) NOT NULL,
    body TEXT,
    created DATETIME,
    modified DATETIME
);

CREATE TABLE widgets (
    id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    part_no VARCHAR(12),
    quantity INT(11)
);
*/
DROP TABLE users;

CREATE TABLE users(
  'id' INTEGER PRIMARY KEY,
  'username' VARCHAR(50) NOT NULL,
  'password' VARCHAR(50) NOT NULL,
  'email' VARCHAR(40) NOT NULL,
  'role' VARCHAR(20),
  'created' DATETIME DEFAULT NULL
);

INSERT INTO users('id','username','password','email','role','created') VALUES (1, 'newuser', MD5('test'), 'user@domain.com', NOW());


/*
As you can see we're manually creating our test user account: newuser, password: test.

Section 2 - Model
app/models/user.php
Now we're going to cover creating our User model. Since we're just checking user information the model is pretty basic. But all logic and calculations in an MVC environment should take place inside the model, so you'll see the function validateLogin($data) below.

Function validateLogi




n() is responsible for determining if the information supplied was correct and then returning to us the id and username to be stored in a session for use later, if the information is incorrect, we return false. Error handling will occur in the controller.

Model Class:
<?php 
class User extends AppModel
{
    var $name = 'User';
    
    function validateLogin($data)
    {
        $user = $this->find(array('username' => $data['username'], 'password' => md5($data['password'])), array('id', 'username'));
        if(empty($user) == false)
            return $user['User'];
        return false;
    }
    
}
?>
Section 3 - Controller
app/controllers/users_controller.php
Next up is our controller. Don't be afraid if you see some things you're not used to, I'm going to step through each piece one by one and explain them.

Controller Class:
<?php 
class UsersController extends AppController
{
    var $name = "Users";
    var $helpers = array('Html', 'Form');
    
    function index()
    {
        
    }
    
    function beforeFilter()
    {
        $this->__validateLoginStatus();
    }
    
    function login()
    {
        if(empty($this->data) == false)
        {
            if(($user = $this->User->validateLogin($this->data['User'])) == true)
            {
                $this->Session->write('User', $user);
                $this->Session->setFlash('You\'ve successfully logged in.');
                $this->redirect('index');
                exit();
            }
            else
            {
                $this->Session->setFlash('Sorry, the information you\'ve entered is incorrect.');
                exit();
            }
        }
    }
    
    function logout()
    {
        $this->Session->destroy('user');
        $this->Session->setFlash('You\'ve successfully logged out.');
        $this->redirect('login');
    }
        
    function __validateLoginStatus()
    {
        if($this->action != 'login' && $this->action != 'logout')
        {
            if($this->Session->check('User') == false)
            {
                $this->redirect('login');
                $this->Session->setFlash('The URL you\'ve followed requires you login.');
            }
        }
    }
    
}

?>
Let's break the controller down into nice small pieces and explain each.

First thing you may have noticed is the function beforeFilter(), when present this function is called before each controller action. So we'll use it to call our function __validateLoginStatus() to ensure that an individual is properly logged in.

Next, we'll look at function login(), this is our golden child. In this function we take information from the user and have it validated and handle it accordingly. You've probably noticed we're calling function validateLogin in login: this is where the actual authentication takes place. When the user has entered the correct information we create a session ('User') and store the information for later use. The use of sessions is a fantastic way to determine if a user is actively logged in, hence why it was chosen for this tutorial. You'll also notice in login we redirect the user and setFlash, pretty basic things, so I won't cover them in any great detail.

Now we see function logout() and it's pretty straight forward. If we're using sessions to determine if a person is actively logged in, just destroy it to log them out and that's exactly what we're doing. Give them a nice message, and send them on their way. If you're a little confused as to why we're doing this, I'll explain a little more next as I explain the function _validateLoginStatus().

There are a few things about function __validateLoginStatus() that may be foreign to new users. First, the leading underscores (`__`), this denotes this function as private and therefore no view is required. Second may be the use of $this->action, which returns the current action in the controller. For this example we use it for exceptions, when a user isn't required to log in. Because the function is called in beforeFilter(), it will be executed before each and every action of the controller (put a beforeFilter in app/app_controller.php and it's called before every controller's actions). The function is responsible for detecting a 'User' session and redirecting users who are trying to access restricted pages. We use exceptions for pages like login and logout which otherwise result in errors.

Section 3 - Views
app/views/users/index.ctp & app/views/users/login.ctp

The following views are straight forward and should be customized to fit your site needs. I won't go into the views since they contain self explanatory code.

login.ctp
Present the user with a form for their username and password. Simple as that!

View Template:

<div class="login">
<h2>Login</h2>    
    <?php echo $form->create('User', array('action' => 'login'));?>
        <?php echo $form->input('username');?>
        <?php echo $form->input('password');?>
        <?php echo $form->submit('Login');?>
    <?php echo $form->end(); ?>
</div>

index.ctp
You should always include a link or button for logging out a user manually. Aside from that, in this example index is for restricted access, have your way with it.

View Template:

<?php echo $html->link('Logout', array('controller' => 'Users', 'action' => 'logout')); ?>
<br/><br/>
You've accessed the secret secure location!


Section 4 - Conclusion
This tutorial should provide you with a basic understanding how to manage user logins and restrict access to certain pages based on login status. This article is in no way meant for an advanced audience, but rather to help those who have some experience with Cake but are unfamiliar with authentication and beforeFilters.

If there is enough interest in the topic, I will continue with a series of articles moving towards a more advanced authentication system with groups and permissions.

Report
More on Tutorials

Tags

    login
    authentication
    logout 

Advertising
*/

/*App::uses('AppModel', 'Model');
/**
 * User Model
 *
 *
class User extends AppModel {

	

	public $name = 'User';
    public $belongsTo = array('Group');
    public $actsAs = array('Acl' => array('type' => 'requester'));

	public function bindNode($user) {
    return array('model' => 'Group', 'foreign_key' => $user['User']['group_id']);
}

	public function beforeSave($options = array()) {
        $this->data['User']['password'] = AuthComponent::password($this->data['User']['password']);
        return true;
    }


    public function parentNode() {
        if (!$this->id && empty($this->data)) {
            return null;
        }
        if (isset($this->data['User']['group_id'])) {
            $groupId = $this->data['User']['group_id'];
        } else {
            $groupId = $this->field('group_id');
        }
        if (!$groupId) {
            return null;
        } else {
            return array('Group' => array('id' => $groupId));
        }
    }

}
?>
*/

/*********USER CONTROLLLER**********************/
/**
 * Users Controller
 *
 * @property User $User
 *
class UsersController extends AppController {

public function view_active() {
        $this->set('title_for_layout', 'View Active Users');
    }

public function beforeFilter() {
    parent::beforeFilter();
    $this->Auth->allow('*');
}
function beforeFilter() {
  $this->Auth->allow('add');
  parent::beforeFilter();
 }/*
public function login() {
	if ($this->Auth->user()) {
$this->Session->setFlash('You are now logged in.');
}
}

public function logout() {
	    $this->redirect($this->Auth->logout());
}public function login() {
  if ($this->request->is('post')) {
        if ($this->Auth->login())
	 {
		//if($this->request->data == $this->)
            $this->redirect($this->Auth->redirect());
		echo "Logged In	";
        } else {
            $this->Session->setFlash('Your username or password was incorrect.');
        }
    }
else
    if ($this->Session->read('Auth.User')) {
        $this->Session->setFlash('You are logged in!');
        $this->rediabcrect('/', null, false);
    }
}

public function logout() {
    //Leave empty for now.
$this->Session->setFlash('Good-Bye');
$this->redirect($this->Auth->logout());

}
/**
 * index method
 *
  @return void
* 
	public function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}


 /* view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 *
	public function view($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->set('user', $this->User->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 *
	public function add() {
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

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 *
	public function edit($id = null) {
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

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 *
	public function delete($id = null) {
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

}
?>
*/
