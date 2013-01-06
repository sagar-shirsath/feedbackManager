
<div class="actions nav nav-list"  style="padding-top: 80px">
    <ul class="nav nav-list" >
        <li class="active"><?php echo $this->Html->link("Home",array('controller'=>'users','action'=>'dashboard'));?></li>
        <li><?php echo $this->Html->link("Add User",array('controller'=>'users','action'=>'add'));?></li>
        <li><?php echo $this->Html->link("List User",array('controller'=>'users','action'=>'index'));?></li>
        <li><?php echo $this->Html->link("List Questions",array('controller'=>'questions','action'=>'index'));?></li>


    </ul>
</div>
<div class="questions form">
<?php echo $this->Form->create('Question'); ?>
	<fieldset>
		<legend><?php echo __('Edit Question'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('q_name');
		echo $this->Form->input('ratings');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

