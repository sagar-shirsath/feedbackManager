<div class="jumbotron subhead" style="padding-top: 80px">
    <ul class="nav nav-list" >
        <li><?php echo $this->Html->link("Home",array('controller'=>'users','action'=>'dashboard'));?></li>
        <li class="active"><?php echo $this->Html->link("List Users",array('controller'=>'users','action'=>'index'));?></li>
        <li><?php echo $this->Html->link("List Feedbacks",array('controller'=>'feedbacks','action'=>'index'));?></li>
        <li><?php echo $this->Html->link('Edit This user',array('controller'=>'users','action'=>'edit',$user['User']['id']));?></li>
    </ul>
</div>

<div class="users view">
<h2><?php  echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($user['User']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Role'); ?></dt>
		<dd>
            <?php
            if($user['User']['role']==3)
			 echo h("Admin");
            elseif($user['User']['role']==2)
                echo h("Teacher");
            elseif($user['User']['role']==1)
                echo h("Student");

        ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($user['User']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Verified'); ?></dt>
		<dd>
			<?php echo h($user['User']['is_verified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Verify Token'); ?></dt>
		<dd>
			<?php echo h($user['User']['verify_token']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dob'); ?></dt>
		<dd>
			<?php echo h($user['User']['dob']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Age'); ?></dt>
		<dd>
			<?php echo h($user['User']['age']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($user['User']['address']); ?>
			&nbsp;
		</dd>
	</dl>

</div>

