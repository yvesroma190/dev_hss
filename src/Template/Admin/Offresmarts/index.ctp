<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Offresmart[]|\Cake\Collection\CollectionInterface $offresmarts
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Offresmart'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Elementsmarts'), ['controller' => 'Elementsmarts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Elementsmart'), ['controller' => 'Elementsmarts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Souscriptionsmarts'), ['controller' => 'Souscriptionsmarts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Souscriptionsmart'), ['controller' => 'Souscriptionsmarts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="offresmarts index large-9 medium-8 columns content">
    <h3><?= __('Offresmarts') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('prix') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($offresmarts as $offresmart): ?>
            <tr>
                <td><?= $this->Number->format($offresmart->id) ?></td>
                <td><?= h($offresmart->name) ?></td>
                <td><?= h($offresmart->prix) ?></td>
                <td><?= h($offresmart->created) ?></td>
                <td><?= h($offresmart->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $offresmart->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $offresmart->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $offresmart->id], ['confirm' => __('Are you sure you want to delete # {0}?', $offresmart->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
