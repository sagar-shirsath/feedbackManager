<div class="feedbackForms index">
	<h2><?php echo __('Feedback Forms'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('question_id'); ?></th>
			<th><?php echo $this->Paginator->sort('rating'); ?></th>
			<th><?php echo $this->Paginator->sort('is_submitted'); ?></th>
			<th><?php echo $this->Paginator->sort('semester'); ?></th>
			<th><?php echo $this->Paginator->sort('year'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($feedbackForms as $feedbackForm): ?>
	<tr>
		<td><?php echo h($feedbackForm['FeedbackForm']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($feedbackForm['Question']['id'], array('controller' => 'questions', 'action' => 'view', $feedbackForm['Question']['id'])); ?>
		</td>
		<td><?php echo h($feedbackForm['FeedbackForm']['rating']); ?>&nbsp;</td>
		<td><?php echo h($feedbackForm['FeedbackForm']['is_submitted']); ?>&nbsp;</td>
		<td><?php echo h($feedbackForm['FeedbackForm']['semester']); ?>&nbsp;</td>
		<td><?php echo h($feedbackForm['FeedbackForm']['year']); ?>&nbsp;</td>
		<td><?php echo h($feedbackForm['FeedbackForm']['created']); ?>&nbsp;</td>
		<td><?php echo h($feedbackForm['FeedbackForm']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $feedbackForm['FeedbackForm']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $feedbackForm['FeedbackForm']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $feedbackForm['FeedbackForm']['id']), null, __('Are you sure you want to delete # %s?', $feedbackForm['FeedbackForm']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Feedback Form'), array('action' => 'add')); ?></li>
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
