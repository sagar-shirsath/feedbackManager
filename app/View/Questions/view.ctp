<div class="actions nav nav-list"  style="padding-top: 80px">
    <ul class="nav nav-list" >
        <li class="active"><?php echo $this->Html->link("Home",array('controller'=>'users','action'=>'dashboard'));?></li>
        <li><?php echo $this->Html->link("Add User",array('controller'=>'users','action'=>'add'));?></li>
        <li><?php echo $this->Html->link("List User",array('controller'=>'users','action'=>'index'));?></li>
        <li><?php echo $this->Html->link("List Questions",array('controller'=>'questions','action'=>'index'));?></li>


    </ul>
</div>

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

