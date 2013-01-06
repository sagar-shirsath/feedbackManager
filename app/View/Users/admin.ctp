
<div class="jumbotron subhead" style="padding-top: 80px">
    <ul class="nav nav-list" >
        <li class="active"><?php echo $this->Html->link("Home",array('controller'=>'users','action'=>'dashboard'));?></li>
        <li><?php echo $this->Html->link("Add User",array('controller'=>'users','action'=>'add'));?></li>
        <li><?php echo $this->Html->link("List User",array('controller'=>'users','action'=>'index'));?></li>
        <li><?php echo $this->Html->link("List Questions",array('controller'=>'questions','action'=>'index'));?></li>
<!--        <li>--><?php //echo $this->Html->link("List Cources",array('controller'=>'courses','action'=>'index'));?><!--</li>-->
    </ul>
</div>