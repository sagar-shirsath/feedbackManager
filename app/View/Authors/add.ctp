<div class="authors form">
<?php echo $this->Form->create('Author'); ?>
	<fieldset>
		<legend><?php echo __('Add Author'); ?></legend>
	<?php
		echo $this->Form->input('uname');
		echo $this->Form->input('passwd');
		echo $this->Form->input('name');
		echo $this->Form->input('email');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Authors'), array('action' => 'index')); ?></li>
	</ul>
</div>
