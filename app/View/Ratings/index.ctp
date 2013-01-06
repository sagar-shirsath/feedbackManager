<div class="ratings index">
	<h2><?php echo __('Ratings'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('rating'); ?></th>
			<th><?php echo $this->Paginator->sort('student_id'); ?></th>
			<th><?php echo $this->Paginator->sort('question_id'); ?></th>
			<th><?php echo $this->Paginator->sort('feedback_form_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($ratings as $rating): ?>
	<tr>
		<td><?php echo h($rating['Rating']['id']); ?>&nbsp;</td>
		<td><?php echo h($rating['Rating']['rating']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($rating['Student']['id'], array('controller' => 'students', 'action' => 'view', $rating['Student']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($rating['Question']['id'], array('controller' => 'questions', 'action' => 'view', $rating['Question']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($rating['FeedbackForm']['id'], array('controller' => 'feedback_forms', 'action' => 'view', $rating['FeedbackForm']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $rating['Rating']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $rating['Rating']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $rating['Rating']['id']), null, __('Are you sure you want to delete # %s?', $rating['Rating']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Rating'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Questions'), array('controller' => 'questions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Question'), array('controller' => 'questions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Feedback Forms'), array('controller' => 'feedback_forms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Feedback Form'), array('controller' => 'feedback_forms', 'action' => 'add')); ?> </li>
	</ul>
</div>
