<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Pro> $pro
 */
?>
<div class="pro index content">
    <?= $this->Html->link(__('New Pro'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Pro') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pro as $pro): ?>
                <tr>
                    <td><?= $this->Number->format($pro->id) ?></td>
                    <td><?= h($pro->name) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $pro->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pro->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pro->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pro->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
