<div class="ratings form">
<?php echo $this->Form->create('Rating'); ?>
	<fieldset>
		<legend><?php echo __('Edit Rating'); ?></legend>
	<?php
		echo $this->Form->input('id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Rating.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Rating.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Ratings'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Questions'), array('controller' => 'questions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Question'), array('controller' => 'questions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Feedback Forms'), array('controller' => 'feedback_forms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Feedback Form'), array('controller' => 'feedback_forms', 'action' => 'add')); ?> </li>
	</ul>
</div>
