<div class="ratings form">
<?php echo $this->Form->create('Rating'); ?>
	<fieldset>
		<legend><?php echo __('Add Rating'); ?></legend>
	<?php
		echo $this->Form->input('rating');
		echo $this->Form->input('student_id');
		echo $this->Form->input('question_id');
		echo $this->Form->input('feedback_form_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Ratings'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Questions'), array('controller' => 'questions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Question'), array('controller' => 'questions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Feedback Forms'), array('controller' => 'feedback_forms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Feedback Form'), array('controller' => 'feedback_forms', 'action' => 'add')); ?> </li>
	</ul>
</div>
