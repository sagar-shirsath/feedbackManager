<div class="questions view">
<h2><?php  echo __('Question'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($question['Question']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Q Name'); ?></dt>
		<dd>
			<?php echo h($question['Question']['q_name']); ?>
			&nbsp;
		</dd>
<!--		<dt><?php echo __('Ratings'); ?></dt>
		<dd>
			<?php echo h($question['Question']['ratings']); ?>
			&nbsp;
		</dd> -->
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($question['Question']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($question['Question']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Question'), array('action' => 'edit', $question['Question']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Question'), array('action' => 'delete', $question['Question']['id']), null, __('Are you sure you want to delete # %s?', $question['Question']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Questions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Question'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Feedback Forms'), array('controller' => 'feedback_forms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Feedback Form'), array('controller' => 'feedback_forms', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ratings'), array('controller' => 'ratings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rating'), array('controller' => 'ratings', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Feedback Forms'); ?></h3>
	<?php if (!empty($question['FeedbackForm'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Question Id'); ?></th>
		<th><?php echo __('Is Submitted'); ?></th>
		<th><?php echo __('Semester'); ?></th>
		<th><?php echo __('Year'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($question['FeedbackForm'] as $feedbackForm): ?>
		<tr>
			<td><?php echo $feedbackForm['id']; ?></td>
			<td><?php echo $feedbackForm['question_id']; ?></td>
			<td><?php echo $feedbackForm['is_submitted']; ?></td>
			<td><?php echo $feedbackForm['semester']; ?></td>
			<td><?php echo $feedbackForm['year']; ?></td>
			<td><?php echo $feedbackForm['created']; ?></td>
			<td><?php echo $feedbackForm['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'feedback_forms', 'action' => 'view', $feedbackForm['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'feedback_forms', 'action' => 'edit', $feedbackForm['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'feedback_forms', 'action' => 'delete', $feedbackForm['id']), null, __('Are you sure you want to delete # %s?', $feedbackForm['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Feedback Form'), array('controller' => 'feedback_forms', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Ratings'); ?></h3>
	<?php if (!empty($question['Rating'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Rating'); ?></th>
		<th><?php echo __('Student Id'); ?></th>
		<th><?php echo __('Question Id'); ?></th>
		<th><?php echo __('Feedback Form Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($question['Rating'] as $rating): ?>
		<tr>
			<td><?php echo $rating['id']; ?></td>
			<td><?php echo $rating['rating']; ?></td>
			<td><?php echo $rating['student_id']; ?></td>
			<td><?php echo $rating['question_id']; ?></td>
			<td><?php echo $rating['feedback_form_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'ratings', 'action' => 'view', $rating['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'ratings', 'action' => 'edit', $rating['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'ratings', 'action' => 'delete', $rating['id']), null, __('Are you sure you want to delete # %s?', $rating['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Rating'), array('controller' => 'ratings', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
