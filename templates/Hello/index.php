<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Hello> $hello
 */
?>
<div class="hello index content">
    <?= $this->Html->link(__('New Hello'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Hello') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th><?= $this->Paginator->sort('amount') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($hello as $hello): ?>
                <tr>
                    <td><?= $this->Number->format($hello->id) ?></td>
                    <td><?= $hello->has('user') ? $this->Html->link($hello->user->email, ['controller' => 'Users', 'action' => 'view', $hello->user->id]) : '' ?></td>
                    <td><?= h($hello->date) ?></td>
                    <td><?= $this->Number->format($hello->amount) ?></td>
                    <td><?= h($hello->status) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $hello->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $hello->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $hello->id], ['confirm' => __('Are you sure you want to delete # {0}?', $hello->id)]) ?>
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
