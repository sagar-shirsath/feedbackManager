<?php
App::uses('AppModel', 'Model');
/**
 * Rating Model
 *
 * @property Student $Student
 * @property Question $Question
 * @property FeedbackForm $FeedbackForm
 */
class Rating extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Student' => array(
			'className' => 'Student',
			'foreignKey' => 'student_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Question' => array(
			'className' => 'Question',
			'foreignKey' => 'question_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'FeedbackForm' => array(
			'className' => 'FeedbackForm',
			'foreignKey' => 'feedback_form_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
