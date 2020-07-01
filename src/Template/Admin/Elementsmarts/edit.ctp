<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Elementsmart $elementsmart
 */
?>
<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $elementsmart->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $elementsmart->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Elementsmarts'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Offresmarts'), ['controller' => 'Offresmarts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Offresmart'), ['controller' => 'Offresmarts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="elementsmarts form large-9 medium-8 columns content">
    <?= $this->Form->create($elementsmart) ?>
    <fieldset>
        <legend><?= __('Edit Elementsmart') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('offresmart_id', ['options' => $offresmarts, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>-->


<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Gestion des offres smart protction</h1>
    </div>
    <hr class="sidebar-divider d-none d-md-block">

        <!-- Sous Menu -->
        <div class="row">
            <div class="lg-12"> 
                <a href=<?= $this->Url->build(['controller'=>'Elementsmarts', 'action'=>'index']) ?> class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-list"></i>
                    </span>
                    <span class="text">Liste des éléments smarts</span>
                </a>
                <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'Supprimer cet élément', $elementsmart->id],
                ['confirm' => __('Voulez-vous supprimer cet élément? # {0}?', $elementsmart->id), 'class' => 'btn btn-danger']
                ) ?>
            </div>
        </div>
    <hr class="sidebar-divider d-none d-md-block">

    <div class="card shadow mb-6">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Modifier l'élément</h6>
        </div>
        <div class="card-body">
            <?= $this->Form->create($offresmart) ?>
                <!--<div class="form-group">
                    <?= $this->Form->control('offresmart_id', ['options' => $offresmarts, 'empty' => true, 'class'=>'form-control', 'label'=>'Nom de l\'offre:']);?>
                </div>-->
                <div class="form-group">
                    <?= $this->Form->control('name', ['type'=>'text', 'class'=>'form-control', 'label'=>'Nom de l\'élément:']);?>
                </div>

                <button class="btn btn-primary btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-plus-circle"></i>
                </span>
                <span class="text">Modifier</span>
                </button>
            <?= $this->Form->end() ?>
        </div>
    </div>


</div>





