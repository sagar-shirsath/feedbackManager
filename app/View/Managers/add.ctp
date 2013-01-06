<div class="managers form">
<?php echo $this->Form->create('Manager'); ?>
	<fieldset>
		<legend><?php echo __('Add Manager'); ?></legend>
	<?php
		echo $this->Form->input('username');
		echo $this->Form->input('password');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Managers'), array('action' => 'index')); ?></li>
	</ul>
</div>
