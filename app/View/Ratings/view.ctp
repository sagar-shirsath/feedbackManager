<div class="ratings view">
<h2><?php  echo __('Rating'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($rating['Rating']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rating'); ?></dt>
		<dd>
			<?php echo h($rating['Rating']['rating']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Student'); ?></dt>
		<dd>
			<?php echo $this->Html->link($rating['Student']['id'], array('controller' => 'students', 'action' => 'view', $rating['Student']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Question'); ?></dt>
		<dd>
			<?php echo $this->Html->link($rating['Question']['id'], array('controller' => 'questions', 'action' => 'view', $rating['Question']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Feedback Form'); ?></dt>
		<dd>
			<?php echo $this->Html->link($rating['FeedbackForm']['id'], array('controller' => 'feedback_forms', 'action' => 'view', $rating['FeedbackForm']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Rating'), array('action' => 'edit', $rating['Rating']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Rating'), array('action' => 'delete', $rating['Rating']['id']), null, __('Are you sure you want to delete # %s?', $rating['Rating']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Ratings'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rating'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Questions'), array('controller' => 'questions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Question'), array('controller' => 'questions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Feedback Forms'), array('controller' => 'feedback_forms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Feedback Form'), array('controller' => 'feedback_forms', 'action' => 'add')); ?> </li>
	</ul>
</div>
