<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Souscriptionsmart[]|\Cake\Collection\CollectionInterface $souscriptionsmarts
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Souscriptionsmart'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Offresmarts'), ['controller' => 'Offresmarts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Offresmart'), ['controller' => 'Offresmarts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="souscriptionsmarts index large-9 medium-8 columns content">
    <h3><?= __('Souscriptionsmarts') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('offresmart_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('client_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($souscriptionsmarts as $souscriptionsmart): ?>
            <tr>
                <td><?= $this->Number->format($souscriptionsmart->id) ?></td>
                <td><?= $souscriptionsmart->has('offresmart') ? $this->Html->link($souscriptionsmart->offresmart->name, ['controller' => 'Offresmarts', 'action' => 'view', $souscriptionsmart->offresmart->id]) : '' ?></td>
                <td><?= $souscriptionsmart->has('client') ? $this->Html->link($souscriptionsmart->client->name, ['controller' => 'Clients', 'action' => 'view', $souscriptionsmart->client->id]) : '' ?></td>
                <td><?= h($souscriptionsmart->created) ?></td>
                <td><?= h($souscriptionsmart->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $souscriptionsmart->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $souscriptionsmart->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $souscriptionsmart->id], ['confirm' => __('Are you sure you want to delete # {0}?', $souscriptionsmart->id)]) ?>
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
