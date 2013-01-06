<div class="managers view">
<h2><?php  echo __('Manager'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($manager['Manager']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($manager['Manager']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($manager['Manager']['password']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Manager'), array('action' => 'edit', $manager['Manager']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Manager'), array('action' => 'delete', $manager['Manager']['id']), null, __('Are you sure you want to delete # %s?', $manager['Manager']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Managers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Manager'), array('action' => 'add')); ?> </li>
	</ul>
</div>
