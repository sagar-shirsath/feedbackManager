<?php
App::uses('AppController', 'Controller');
/**
 * FeedbackForms Controller
 *
 * @property FeedbackForm $FeedbackForm
 */
class FeedbackFormsController extends AppController {

/**
 * index method
 *
 * @return void
 */




    public function index() {
		$this->FeedbackForm->recursive = 0;
		$this->set('feedbackForms', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->FeedbackForm->id = $id;
		if (!$this->FeedbackForm->exists()) {
			throw new NotFoundException(__('Invalid feedback form'));
		}
		$this->set('feedbackForm', $this->FeedbackForm->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->FeedbackForm->create();
			if ($this->FeedbackForm->save($this->request->data)) {
				$this->Session->setFlash(__('The feedback form has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The feedback form could not be saved. Please, try again.'));
			}
		}
        /*
 $questions  = $this->FeedbackForm->Question->find('list', array('contain' => array('Question',array('fields' => 'Question.id','Question.q_name'))));
       print_r($questions[1]);
        $this->set(compact("questions"));

                debug($questions);
                $this->set('feedbackForms', $questions);
                //$this->loadModel('Question','course');
                $questions = $this->FeedbackForm->Question->find('list',array('fields' => array('Question.id','Question.q_name')));
                $courses = $this->FeedbackForm->Course->find('list',array('fields' => array('Course.name')));
               // print_r($questions[2]);
               //debug(compact('questions'));
                $ques = (compact('questions','courses'));
                $this->set($ques);
                debug($ques);
                //$this->set($feedbackForms);
                //debug($feedbackForms);


                foreach($questions as $question):


        $i=1;
                    $results = $this->set('feedbackForms',$questions[$i]);
        debug($results);
               $i++;
                endforeach
               $courses = $this->FeedbackForm->Course->find('list',array('fields' => array('Course.name')));

                debug($courses);
            //  $this->set('feedbackForms',$questions,$courses);
       // $this->set(compact('questions','courses'));
       //$questions = $this->FeedbackForm->Question->query("select q_name FROM questions;");
        $questions = $this->FeedbackForm->Question->find('list',array('fields' => array('Question.q_name')));



       //echo $questions[1];
        $t=1;
        $dd=array();
        //$this->set(compact("questions"));
        $dds=compact("questions");
        print_r($dds);

        //echo "cake php d";
        $i=1;
        foreach($dds as $dd):
            echo $dd[$i];
            $this->set('feedbackForms',$dd);
         $i=$i+1;
        endforeach;
    /*    $x= $this->FeedbackForm->Question('list',$dd[1]);
        $this->set(compact("x"));
      //  print_r($dd."P");
        //$this->set('feedbackForms',$questions);

        //echo $this->set(compact("questions[1]"));
        /*$i=1;
        foreach($questions as $question):

            echo $this->set(compact("questions"));
            $i++;
        debug($questions[$i]);
            endforeach;
       */
       $questions = $this->FeedbackForm->Question->find('list',array('fields' => array('Question.id', 'Question.q_name')));
//array('conditions' => array('Question.id' => 'q_name')));//,array('fields' => array('Question.id','Question.q_name')));
        $courses = $this->FeedbackForm->Course->find('list',array('fields' => array('Course.id','Course.name')));
        $this->set(compact("questions","courses"));
      // $this->set('questions',$questions);

	 //$res = $this->FeedbackForm->Question->find('first');
	//$res = $this->FeedbackForm->Question->find('count');//, array('limit' => 1));
	//$this->set('questions',$res); 
	//$extracted = Set::extract($array, '/Shipping[maxweight>'.$x.']');
		//$extracted = Set::extract($array, '/Questions');
	



/*$results = $questions[3];
       // $this->set(compact("questions","courses"));

      /* $results = $this->set(compact(' questions'));
        $results = compact("questions");
        foreach($results as $key => $value)
        {

            $this->set('feedbackForms',$key - $value);
        }
       /* $num = $this->FeedbackForm->Question->query("SELECT * FROM questions AS  Question LIMIT 2;");
        $ques = $this->FeedbackForm->Question->query("SELECT q_name FROM questions;");

        //      $ratings = $this->FeedbackForm->find('list',array('fields' => array('Rating.id')));

   // $this->set('feedbackForms',$questions);
	   // $this->set('feedbackForms',$this->FeedbackForm->Question->find('list',array('fields' => array('Question.id','Question.q_name'))));
    */


       }

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->FeedbackForm->id = $id;
		if (!$this->FeedbackForm->exists()) {
			throw new NotFoundException(__('Invalid feedback form'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->FeedbackForm->save($this->request->data)) {
				$this->Session->setFlash(__('The feedback form has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The feedback form could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->FeedbackForm->read(null, $id);
		}
		$questions = $this->FeedbackForm->Question->find('all',array('fields' => array('FeedbackForm.q_name', 'DISTINCT FeedbackForm.id')));
		//$this->set(compact('questions'));
        $this->set('feedbackForm',$questions);
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
		$this->FeedbackForm->id = $id;
		if (!$this->FeedbackForm->exists()) {
			throw new NotFoundException(__('Invalid feedback form'));
		}
		if ($this->FeedbackForm->delete()) {
			$this->Session->setFlash(__('Feedback form deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Feedback form was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
