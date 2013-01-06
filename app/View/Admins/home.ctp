<div class="admins home">
<h1>Welcome Admin
<h2><?php  echo __('Admin'); ?></h2>

<?php foreach ($users as $user):  ?>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
		    <?php 
			echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Role'); ?></dt>
		<dd>
			<?php echo h($user['User']['role']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</dd>
	</dl>
<?php endforeach; ?>
<?php echo $this->request($admin['Admin']['id'],
array('controller' => 'admins', 'action' => 'view’, $admin[Admin']['username'])); ?>

</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li> <?php //echo $this->Html->link(__('Student'),  array('controller' => 'admins', 'action' => 'createstudent')); ?>
<?php echo $this->Html->link($post[’Post’][’title’],
array(’controller’ => ’posts’, ’action’ => ’view’, $post[’Post’][’id’])); ?>

</li>
		<li><?php echo $this->Html->link(__('Teacher'), array('controller' => 'admins', 'action' => 'shome')); ?> </li>
		</ul>
</div>

<?php /*echo $this->Html->link('Student', '/admin/shome', array('class' => 'button','target'=> '_blank'));

//echo $this->Html->link(
    'Student',
    array('controller' => 'admins', 'action' => 'shome', 'full_base' => true)
);

echo $this->Html->link('Student', array(
    'controller' => 'admins',
    'action' => 'shome',
    '?' => array('height' => 400, 'width' => 500))
);
*/

?>
