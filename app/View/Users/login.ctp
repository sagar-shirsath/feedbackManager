<div class="users form">
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User',array('url'=>'/users/login')); ?>
	<?php //print "Hello"; ?>
	<fieldset>
        <legend><?php echo __('Please enter your username and password'); ?></legend>
        <?php echo $this->Form->input('email');
        echo $this->Form->input('password');
//echo $this->data['User']['password'];
//echo 'hello';
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Login')); ?>

<!--Not A member yet??<br>-->
<?php //echo $this->Html->link(__('sign up'), array('action' => 'add')); ?>

   </div>

