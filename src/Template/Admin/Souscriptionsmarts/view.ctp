<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Souscriptionsmart $souscriptionsmart
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Souscriptionsmart'), ['action' => 'edit', $souscriptionsmart->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Souscriptionsmart'), ['action' => 'delete', $souscriptionsmart->id], ['confirm' => __('Are you sure you want to delete # {0}?', $souscriptionsmart->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Souscriptionsmarts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Souscriptionsmart'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Offresmarts'), ['controller' => 'Offresmarts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Offresmart'), ['controller' => 'Offresmarts', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="souscriptionsmarts view large-9 medium-8 columns content">
    <h3><?= h($souscriptionsmart->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Offresmart') ?></th>
            <td><?= $souscriptionsmart->has('offresmart') ? $this->Html->link($souscriptionsmart->offresmart->name, ['controller' => 'Offresmarts', 'action' => 'view', $souscriptionsmart->offresmart->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Client') ?></th>
            <td><?= $souscriptionsmart->has('client') ? $this->Html->link($souscriptionsmart->client->name, ['controller' => 'Clients', 'action' => 'view', $souscriptionsmart->client->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($souscriptionsmart->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($souscriptionsmart->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($souscriptionsmart->modified) ?></td>
        </tr>
    </table>
</div>
