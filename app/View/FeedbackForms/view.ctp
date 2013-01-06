<div class="feedbackForms view">
<h2><?php  echo __('Feedback Form'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($feedbackForm['FeedbackForm']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Question'); ?></dt>
		<dd>
			<?php echo $this->Html->link($feedbackForm['Question']['id'], array('controller' => 'questions', 'action' => 'view', $feedbackForm['Question']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rating'); ?></dt>
        		<dd>
        			<?php echo h($feedbackForm['FeedbackForm']['rating']); ?>
        			&nbsp;
        		</dd>
		<dt><?php echo __('Is Submitted'); ?></dt>
		<dd>
			<?php echo h($feedbackForm['FeedbackForm']['is_submitted']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Semester'); ?></dt>
		<dd>
			<?php echo h($feedbackForm['FeedbackForm']['semester']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Year'); ?></dt>
		<dd>
			<?php echo h($feedbackForm['FeedbackForm']['year']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($feedbackForm['FeedbackForm']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($feedbackForm['FeedbackForm']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Feedback Form'), array('action' => 'edit', $feedbackForm['FeedbackForm']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Feedback Form'), array('action' => 'delete', $feedbackForm['FeedbackForm']['id']), null, __('Are you sure you want to delete # %s?', $feedbackForm['FeedbackForm']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Feedback Forms'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Feedback Form'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Courses'); ?></h3>
	<?php if (!empty($feedbackForm['Course'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Feedback Form Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($feedbackForm['Course'] as $course): ?>
		<tr>
			<td><?php echo $course['id']; ?></td>
			<td><?php echo $course['name']; ?></td>
			<td><?php echo $course['description']; ?></td>
			<td><?php echo $course['feedback_form_id']; ?></td>
			<td><?php echo $course['created']; ?></td>
			<td><?php echo $course['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'courses', 'action' => 'view', $course['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'courses', 'action' => 'edit', $course['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'courses', 'action' => 'delete', $course['id']), null, __('Are you sure you want to delete # %s?', $course['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Course'), array('controller' => 'courses', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Ratings'); ?></h3>
	<?php if (!empty($feedbackForm['Rating'])): ?>
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
		foreach ($feedbackForm['Rating'] as $rating): ?>
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
<div class="related">
	<h3><?php echo __('Related Students'); ?></h3>
	<?php if (!empty($feedbackForm['Student'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Batch Year'); ?></th>
		<th><?php echo __('Semester'); ?></th>
		<th><?php echo __('Feedback Form Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($feedbackForm['Student'] as $student): ?>
		<tr>
			<td><?php echo $student['id']; ?></td>
			<td><?php echo $student['user_id']; ?></td>
			<td><?php echo $student['batch_year']; ?></td>
			<td><?php echo $student['semester']; ?></td>
			<td><?php echo $student['feedback_form_id']; ?></td>
			<td><?php echo $student['created']; ?></td>
			<td><?php echo $student['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'students', 'action' => 'view', $student['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'students', 'action' => 'edit', $student['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'students', 'action' => 'delete', $student['id']), null, __('Are you sure you want to delete # %s?', $student['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Teachers'); ?></h3>
	<?php if (!empty($feedbackForm['Teacher'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Year Of Join'); ?></th>
		<th><?php echo __('Feedback Form Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($feedbackForm['Teacher'] as $teacher): ?>
		<tr>
			<td><?php echo $teacher['id']; ?></td>
			<td><?php echo $teacher['user_id']; ?></td>
			<td><?php echo $teacher['year_of_join']; ?></td>
			<td><?php echo $teacher['feedback_form_id']; ?></td>
			<td><?php echo $teacher['created']; ?></td>
			<td><?php echo $teacher['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'teachers', 'action' => 'view', $teacher['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'teachers', 'action' => 'edit', $teacher['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'teachers', 'action' => 'delete', $teacher['id']), null, __('Are you sure you want to delete # %s?', $teacher['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Teacher'), array('controller' => 'teachers', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
