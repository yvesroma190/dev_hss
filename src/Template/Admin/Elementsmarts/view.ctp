<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Elementsmart $elementsmart
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Elementsmart'), ['action' => 'edit', $elementsmart->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Elementsmart'), ['action' => 'delete', $elementsmart->id], ['confirm' => __('Are you sure you want to delete # {0}?', $elementsmart->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Elementsmarts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Elementsmart'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Offresmarts'), ['controller' => 'Offresmarts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Offresmart'), ['controller' => 'Offresmarts', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="elementsmarts view large-9 medium-8 columns content">
    <h3><?= h($elementsmart->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($elementsmart->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Offresmart') ?></th>
            <td><?= $elementsmart->has('offresmart') ? $this->Html->link($elementsmart->offresmart->name, ['controller' => 'Offresmarts', 'action' => 'view', $elementsmart->offresmart->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($elementsmart->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($elementsmart->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($elementsmart->modified) ?></td>
        </tr>
    </table>
</div>
