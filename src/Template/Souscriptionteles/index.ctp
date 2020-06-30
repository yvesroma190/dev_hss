<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Souscriptiontele[]|\Cake\Collection\CollectionInterface $souscriptionteles
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Souscriptiontele'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Offreteles'), ['controller' => 'Offreteles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Offretele'), ['controller' => 'Offreteles', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="souscriptionteles index large-9 medium-8 columns content">
    <h3><?= __('Souscriptionteles') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('offretele_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('client_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($souscriptionteles as $souscriptiontele): ?>
            <tr>
                <td><?= $this->Number->format($souscriptiontele->id) ?></td>
                <td><?= $souscriptiontele->has('offretele') ? $this->Html->link($souscriptiontele->offretele->name, ['controller' => 'Offreteles', 'action' => 'view', $souscriptiontele->offretele->id]) : '' ?></td>
                <td><?= $souscriptiontele->has('client') ? $this->Html->link($souscriptiontele->client->name, ['controller' => 'Clients', 'action' => 'view', $souscriptiontele->client->id]) : '' ?></td>
                <td><?= h($souscriptiontele->created) ?></td>
                <td><?= h($souscriptiontele->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $souscriptiontele->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $souscriptiontele->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $souscriptiontele->id], ['confirm' => __('Are you sure you want to delete # {0}?', $souscriptiontele->id)]) ?>
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
