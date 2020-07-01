<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Elementsmart $elementsmart
 */
?>
<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">
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
</div>-->



<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Gestion des offres smart protection</h1>
    </div>
    <hr class="sidebar-divider d-none d-md-block">

        <!-- Sous Menu -->
        <div class="row">
            <div class="lg-12">
            <?= $this->Html->link(__('Liste des éléments smarts'), ['action' => 'index'], ['class' => 'btn btn-info']) ?>
            <?= $this->Html->link(__('Créer un élément'), ['action' => 'add'], ['class' => 'btn btn-primary']) ?>
            <?= $this->Html->link(__('Modifer'), ['action' => 'edit', $elementsmart->id], ['class' => 'btn btn-success']) ?>
            <?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $elementsmart->id], ['confirm' => __('Voulez-vous supprimer l\'élément? # {0}?', $elementsmart->id), 'class' => 'btn btn-danger']) ?>
            </div>
        </div>
    <hr class="sidebar-divider d-none d-md-block">

    <div class="card shadow mb-6">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><?= h($elementsmart->name) ?></h6>
        </div>
            <div class="card-body">
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
    </div>


</div>



