<div class="jumbotron subhead" style="padding-top: 80px">
    <ul class="nav nav-list" >
        <li><?php echo $this->Html->link("Home",array('controller'=>'users','action'=>'dashboard'));?></li>
        <li class="active"><?php echo $this->Html->link("List Users",array('controller'=>'users','action'=>'index'));?></li>
        <li><?php echo $this->Html->link("List Feedbacks",array('controller'=>'feedback_forms','action'=>'index'));?></li>

    </ul>
</div>
<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Edit User'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('email');
		echo $this->Form->input('password');
		echo $this->Form->input('role');
		echo $this->Form->input('is_verified');
		echo $this->Form->input('verify_token');
		echo $this->Form->input('dob');
		echo $this->Form->input('age');
		echo $this->Form->input('address');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
