<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Serviceinclus $serviceinclus
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Serviceinclus'), ['action' => 'edit', $serviceinclus->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Serviceinclus'), ['action' => 'delete', $serviceinclus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $serviceinclus->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Serviceinclus'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Serviceinclus'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Offres'), ['controller' => 'Offres', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Offre'), ['controller' => 'Offres', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="serviceinclus view large-9 medium-8 columns content">
    <h3><?= h($serviceinclus->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Offre') ?></th>
            <td><?= $serviceinclus->has('offre') ? $this->Html->link($serviceinclus->offre->name, ['controller' => 'Offres', 'action' => 'view', $serviceinclus->offre->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($serviceinclus->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($serviceinclus->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($serviceinclus->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($serviceinclus->modified) ?></td>
        </tr>
    </table>
</div>
