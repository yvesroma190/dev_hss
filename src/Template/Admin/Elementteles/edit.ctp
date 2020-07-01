<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Elementtele $elementtele
 */
?>
<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $elementtele->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $elementtele->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Elementteles'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Offreteles'), ['controller' => 'Offreteles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Offretele'), ['controller' => 'Offreteles', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="elementteles form large-9 medium-8 columns content">
    <?= $this->Form->create($elementtele) ?>
    <fieldset>
        <legend><?= __('Edit Elementtele') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('offretele_id', ['options' => $offreteles, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>-->


<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Gestion des offres télésurveillance</h1>
    </div>
    <hr class="sidebar-divider d-none d-md-block">

        <!-- Sous Menu -->
        <div class="row">
            <div class="lg-12"> 
                <a href=<?= $this->Url->build(['controller'=>'Elementteles', 'action'=>'index']) ?> class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-list"></i>
                    </span>
                    <span class="text">Liste des éléments télésurveillancets</span>
                </a>
                <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'Supprimer cet élément', $elementtele->id],
                ['confirm' => __('Voulez-vous supprimer cet élément? # {0}?', $elementtele->id), 'class' => 'btn btn-danger']
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
                    <?= $this->Form->control('offretele_id', ['options' => $offresmarts, 'empty' => true, 'class'=>'form-control', 'label'=>'Nom de l\'offre:']);?>
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








