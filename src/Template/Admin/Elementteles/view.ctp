<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Elementtele $elementtele
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Elementtele'), ['action' => 'edit', $elementtele->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Elementtele'), ['action' => 'delete', $elementtele->id], ['confirm' => __('Are you sure you want to delete # {0}?', $elementtele->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Elementteles'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Elementtele'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Offreteles'), ['controller' => 'Offreteles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Offretele'), ['controller' => 'Offreteles', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="elementteles view large-9 medium-8 columns content">
    <h3><?= h($elementtele->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($elementtele->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Offretele') ?></th>
            <td><?= $elementtele->has('offretele') ? $this->Html->link($elementtele->offretele->name, ['controller' => 'Offreteles', 'action' => 'view', $elementtele->offretele->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($elementtele->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($elementtele->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($elementtele->modified) ?></td>
        </tr>
    </table>
</div>
