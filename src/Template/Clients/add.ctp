<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Client $client
 */
?>
<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Clients'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Commentaires'), ['controller' => 'Commentaires', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Commentaire'), ['controller' => 'Commentaires', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Comptes'), ['controller' => 'Comptes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Compte'), ['controller' => 'Comptes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Souscriptionsmarts'), ['controller' => 'Souscriptionsmarts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Souscriptionsmart'), ['controller' => 'Souscriptionsmarts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Souscriptionteles'), ['controller' => 'Souscriptionteles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Souscriptiontele'), ['controller' => 'Souscriptionteles', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="clients form large-9 medium-8 columns content">
    <?= $this->Form->create($client) ?>
    <fieldset>
        <legend><?= __('Add Client') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('cel');
            echo $this->Form->control('tel');
            echo $this->Form->control('email');
            echo $this->Form->control('web');
            echo $this->Form->control('bp');
            echo $this->Form->control('adresse');
            echo $this->Form->control('localisation_site');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>-->




<?= $this->element('header'); ?>


<section id="inner-headline">
    <div class="container">
    <div class="row">
        <div class="span4">
        <div class="inner-heading">
            <h2>REFERENCES</h2>
        </div>
        </div>
        <div class="span8">
        <ul class="breadcrumb">
            <li><a href="<?= $this->Url->build(['controller' => 'Offresmarts', 'action' => 'index']); ?>"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
            <!--<li><a href="#">Pages</a><i class="icon-angle-right"></i></li>-->
            <li class="active">Références</li>
        </ul>
        </div>
    </div>
    </div>
</section>





<section id="content">
    <div class="container">
    <div class="row">
    <div class="span12">
        <h4><strong>Nos références</strong></h4>
        </div>
    </div>

    <!-- divider -->
    <div class="row">
        <div class="span12">
        <div class="solidline">
        </div>
        </div>
    </div>
    <!-- end divider -->
    

    <div class="row">
        <div class="span12">
        <h4>Ils nous font <strong>confiance</strong></h4>
        
        </div>
    </div>
    </div>
</section>


<?= $this->element('footer'); ?>

