 <div class="feedbackForms form">
<?php echo $this->Form->create('FeedbackForm'); ?>
	<h1>Add Feedback Form </h1>
	<fieldset>
		<legend><?php //echo __('Add Feedback Form'); ?></legend>



	     <?php
	     /* $newarrays=array();
	$din=0;
//      foreach($questions as $question):
//	foreach($feedbackforms as $feedbackform):
                $newarrays[$din] = $this->Form->input('question_id'.$din);
  		foreach($newarrays as $newarray):
		 echo $newarrays[$din];
                	$din=$din+1;
		endforeach;          
  //   echo $din;


       // endforeach;

      //for($k=0;$k<5;$k++)
     //  {

           //echo $newarrays[$k];
      // }

	/*     for($i = 1; $i <=5 ; $i++)
         {
                    $this->Form->input('question_id');


          }
sizeof($this->data['Blogurl']['url'])
  $i = 1;


        for($j=1;$j <=$i;$j++)
        {
            echo $this->Form->input("Question_id".$i."_id",array('selected' => $this->params['Question']['question_name']));
        }
        }*/
        ?>



<?php
//	foreach($questions as $question):
 
    echo $this->Form->input('question_id');//,array('div'=>false,'multiple'=>'checkbox','select' => false));

     		echo $this->Form->input('course_id');//,array('div'=>false,'multiple'=>'checkbox','select' => false));
		//echo $this->Form->input('rating');//,array('options' => $options));
		echo $this->Form->input('is_submitted');
		echo $this->Form->input('semester');
		echo $this->Form->input('year');

	?>

	 </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>


<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Feedback Forms'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Questions'), array('controller' => 'questions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Question'), array('controller' => 'questions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Courses'), array('controller' => 'courses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course'), array('controller' => 'courses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ratings'), array('controller' => 'ratings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rating'), array('controller' => 'ratings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Teachers'), array('controller' => 'teachers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Teacher'), array('controller' => 'teachers', 'action' => 'add')); ?> </li>
	</ul>
</div>
