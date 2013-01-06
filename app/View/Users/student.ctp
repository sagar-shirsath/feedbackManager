<br/>
    <div style="padding-top: 80px"
         </div>
<?php echo $this->Form->create('Rating')?>
<h3>Select Teacher<?php echo $this->Form->input('teacher_id',array('type'=>'select','options'=>$teachers));?></h3>
<h3>Select  Subject </h1><?php echo $this->Form->input('course_id',array('type'=>'select','options'=>$cources));?></h3>

<table class="table table-bordered table-striped table-hover">
   <tbody>
    <tr>
        <td width="90%">Questions</td>
        <td>Rating</td>
    </tr>
    </tbody>
</table>
<?php
$no = 0;

foreach($questions as $question){?>
<div class="row top20">
    <div class="span12">
        <div class="alert alert-block">
            <div class="pull-right"><?php echo $this->Form->input('Question.'.$question['Question']['id'],array('type'=>'select','options'=>array('1'=>1,'2'=>2,'3'=>3,'4'=>4,'5'=>5) ,
                'label'=>false));?></div>
            <h4 class="alert-heading"><?php echo ++$no;?></h4>
            <p><?php echo $question['Question']['q_name'];?></p>
        </div>
    </div>
</div>


    <?php
}
echo $this->Form->end("Submit Form");
 ?>
