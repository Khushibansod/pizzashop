<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pro $pro
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Pro'), ['action' => 'edit', $pro->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Pro'), ['action' => 'delete', $pro->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pro->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Pro'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Pro'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="pro view content">
            <h3><?= h($pro->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($pro->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($pro->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
