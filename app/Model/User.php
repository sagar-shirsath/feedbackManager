<?php
App::uses('AppModel', 'Model');
App::uses('AuthComponent', 'Controller/Component');

/**
 * User Model
 *
 * @property Admin $Admin
 * @property Student $Student
 * @property Teacher $Teacher
 */
class User extends AppModel {

    /**
     * Validation
     *
    public $validate = array(
        'name' => array(
	   'required' => array(
		'rule' => array('notEmpty'),
		'message' => 'A username is required'
			)
	),

        'password' => array(
'required' => array(
'rule' => array('notEmpty'),
'message' => 'A password is required'
)
)

        /*'email' => array(
                'rule' => array('email', true),
                'message' => 'Please supply a valid email address.'
           )
    );

/**
   For Hashing Passwords
**
public function beforeSave($options = array()) {
    if (isset($this->data[$this->alias]['password'])) {
$this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
	    
	}
    return true;
}
*/
public function beforeSave($options = array()) {
    if (isset($this->data[$this->alias]['password'])) {
        $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
    }
    return true;
}
    /**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(

	);

    public function getUserList(){
       return  $this->find('list',array('fields'=>array('User.name'),'conditions'=>array('User.role'=>2)));
    }


}

