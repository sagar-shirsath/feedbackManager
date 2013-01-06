<?php
App::uses('AppModel', 'Model');
/**
 * Course Model
 *
 * @property FeedbackForm $FeedbackForm
 */
class Course extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(

	);

    public function getCourseList(){
        return  $this->find('list',array('fields'=>array('Course.name')));
    }
}
