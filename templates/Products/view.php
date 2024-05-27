<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Product'), ['action' => 'edit', $product->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Product'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Products'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Product'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="products view content">
            <h3><?= h($product->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($product->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($product->description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Image') ?></th>
                    <td><?= h($product->image) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($product->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Regular') ?></th>
                    <td><?= $this->Number->format($product->regular) ?></td>
                </tr>
                <tr>
                    <th><?= __('Medium') ?></th>
                    <td><?= $this->Number->format($product->medium) ?></td>
                </tr>
                <tr>
                    <th><?= __('Large') ?></th>
                    <td><?= $this->Number->format($product->large) ?></td>
                </tr>
                <tr>
                    <th><?= __('Glutenfree') ?></th>
                    <td><?= $this->Number->format($product->glutenfree) ?></td>
                </tr>
                <tr>
                    <th><?= __('Thincrust') ?></th>
                    <td><?= $this->Number->format($product->thincrust) ?></td>
                </tr>
                <tr>
                    <th><?= __('Stuffedcrust') ?></th>
                    <td><?= $this->Number->format($product->stuffedcrust) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
