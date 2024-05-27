<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Hello $hello
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Hello'), ['action' => 'edit', $hello->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Hello'), ['action' => 'delete', $hello->id], ['confirm' => __('Are you sure you want to delete # {0}?', $hello->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Hello'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Hello'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="hello view content">
            <h3><?= h($hello->status) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $hello->has('user') ? $this->Html->link($hello->user->email, ['controller' => 'Users', 'action' => 'view', $hello->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= h($hello->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($hello->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Amount') ?></th>
                    <td><?= $this->Number->format($hello->amount) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($hello->date) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
