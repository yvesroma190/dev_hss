<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Materielinclus $materielinclus
 */
?>
<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Materielinclus'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Offres'), ['controller' => 'Offres', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Offre'), ['controller' => 'Offres', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="materielinclus form large-9 medium-8 columns content">
    <?= $this->Form->create($materielinclus) ?>
    <fieldset>
        <legend><?= __('Add Materielinclus') ?></legend>
        <?php
            echo $this->Form->control('offre_id', ['options' => $offres, 'empty' => true]);
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>-->

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Gestion des matériels inclus</h1>
    </div>
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sous Menu -->
    <div class="row">
        <div class="lg-12">

            <!--<a href=<?= $this->Url->build(['controller' => 'Materielinclus', 'action' => 'index']) ?> class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-list"></i>
                    </span>
                    <span class="text">Liste des éléments smarts</span>
                </a>-->
        </div>
    </div>
    <hr class="sidebar-divider d-none d-md-block">

    <div class="card shadow mb-6">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Ajouter un matériel inclus</h6>
        </div>
        <div class="card-body">
            <?= $this->Form->create($materielinclus) ?>
            <!--<div class="form-group">
                    <?= $this->Form->control('offre_id', ['options' => $offres, 'empty' => true, 'class' => 'form-control', 'label' => 'Nom de l\'offre:']); ?>
                </div>-->
            <div class="form-group">
                <?= $this->Form->control('name', ['type' => 'text', 'class' => 'form-control', 'label' => 'Nom du matériel:']); ?>
            </div>

            <button class="btn btn-primary btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-plus-circle"></i>
                </span>
                <span class="text">Ajouter</span>
            </button>
            <?= $this->Form->end() ?>
        </div>
    </div>


</div>
