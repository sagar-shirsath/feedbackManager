<?php
echo $this->Form->create('User Email');?>
echo $this->Form->input('email');//,array('label'=>'Your email'));
echo $this->Form->input('message',array('type'=>'textarea','label'=>'Your message','rows'=>5,'cols'=>60));
echo $this->Form->end(__('Send', true));
?>
