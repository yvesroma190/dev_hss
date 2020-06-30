<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Souscriptiontele $souscriptiontele
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Souscriptiontele'), ['action' => 'edit', $souscriptiontele->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Souscriptiontele'), ['action' => 'delete', $souscriptiontele->id], ['confirm' => __('Are you sure you want to delete # {0}?', $souscriptiontele->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Souscriptionteles'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Souscriptiontele'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Offreteles'), ['controller' => 'Offreteles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Offretele'), ['controller' => 'Offreteles', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="souscriptionteles view large-9 medium-8 columns content">
    <h3><?= h($souscriptiontele->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Offretele') ?></th>
            <td><?= $souscriptiontele->has('offretele') ? $this->Html->link($souscriptiontele->offretele->name, ['controller' => 'Offreteles', 'action' => 'view', $souscriptiontele->offretele->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Client') ?></th>
            <td><?= $souscriptiontele->has('client') ? $this->Html->link($souscriptiontele->client->name, ['controller' => 'Clients', 'action' => 'view', $souscriptiontele->client->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($souscriptiontele->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($souscriptiontele->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($souscriptiontele->modified) ?></td>
        </tr>
    </table>
</div>
