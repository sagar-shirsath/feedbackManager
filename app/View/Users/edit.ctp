<div class="jumbotron subhead" style="padding-top: 80px">
    <ul class="nav nav-list" >
        <li class="active"><?php echo $this->Html->link("Home",array('controller'=>'users','action'=>'dashboard'));?></li>
        <li><?php echo $this->Html->link("Add User",array('controller'=>'users','action'=>'add'));?></li>
        <li><?php echo $this->Html->link("List User",array('controller'=>'users','action'=>'index'));?></li>
        <li><?php echo $this->Html->link("List Questions",array('controller'=>'questions','action'=>'index'));?></li>

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
