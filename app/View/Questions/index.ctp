<div class="questions index" style="padding-top: 80px">
    <div class="nav nav-list">
        <ul>
            <li><?php echo $this->Html->link("Home", array('controller' => 'users', 'action' => 'dashboard'));?></li>
            <li class="active"><?php echo $this->Html->link("List Users", array('controller' => 'users', 'action' => 'index'));?></li>
            <li><?php echo $this->Html->link("List Questions", array('controller' => 'question', 'action' => 'index'));?></li>
            <li><?php echo $this->Html->link(__('New Question'), array('controller' => 'questions', 'action' => 'add')); ?> </li>
        </ul>
    </div>
    <h2><?php echo __('Questions');
        $i=0;
        ?></h2>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?php echo $this->Paginator->sort('id', "Question No. "); ?></th>
            <th><?php echo $this->Paginator->sort('q_name', "Question "); ?></th>
            <th><?php echo $this->Paginator->sort('created'); ?></th>
            <th><?php echo $this->Paginator->sort('modified'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        <?php
        foreach ($questions as $question): ?>
            <tr>
                <td><?php echo h(++$i); ?>&nbsp;</td>
                <td><?php echo h($question['Question']['q_name']); ?>&nbsp;</td>
                <td><?php echo h($question['Question']['created']); ?>&nbsp;</td>
                <td><?php echo h($question['Question']['modified']); ?>&nbsp;</td>
                <td class="actions">
                    <?php echo $this->Html->link(__('View'), array('action' => 'view', $question['Question']['id'])); ?>
                    <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $question['Question']['id'])); ?>
                    <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $question['Question']['id']), null, __('Are you sure you want to delete # %s?', $question['Question']['id'])); ?>
                </td>
            </tr>
            <?php endforeach; ?>
    </table>
    <p> <p> <p> <p>
        <?php
        echo $this->Paginator->counter(array(
            'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
        ));
        ?>    </p>

    <div class="paging">
        <?php
        echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
        echo $this->Paginator->numbers(array('separator' => ''));
        echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
        ?>
    </div>
</div>
>
