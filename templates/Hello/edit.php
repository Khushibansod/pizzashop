<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Hello $hello
 * @var string[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $hello->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $hello->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Hello'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="hello form content">
            <?= $this->Form->create($hello) ?>
            <fieldset>
                <legend><?= __('Edit Hello') ?></legend>
                <?php
                    echo $this->Form->control('user_id', ['options' => $users]);
                    echo $this->Form->control('date');
                    echo $this->Form->control('amount');
                    echo $this->Form->control('status');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
