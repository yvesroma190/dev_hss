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
            echo $this->Form->control('pseudo');
            echo $this->Form->control('password');
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
            <h2>COMPTE CLIENT</h2>
        </div>
        </div>
        <div class="span8">
        <ul class="breadcrumb">
            <li><a href="<?= $this->Url->build(['controller' => 'Offresmarts', 'action' => 'index']); ?>"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
            <!--<li><a href="#">Pages</a><i class="icon-angle-right"></i></li>-->
            <li class="active">Compte client</li>
        </ul>
        </div>
    </div>
    </div>
</section>


<section id="content">
    <div class="container">
    <div class="row">
    <div class="span12">
        <h4><strong>Créez votre compte</strong></h4>
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


    <div class="container">
        <div class="row">
            
                <?= $this->Form->create($client, ['class'=> '']) ?>
                    <div class="span4">
                        <?= $this->Form->control('name', ['type'=> 'text', 'name'=> 'name', 'class'=> 'form-group', 'label'=> 'Nom et prénoms:']); ?>
                        <?= $this->Form->control('pseudo', ['type'=> 'text', 'name'=> 'pseudo', 'class'=> 'form-group', 'label'=> 'Pseudo:']); ?>
                        <?= $this->Form->control('email', ['type'=> 'email', 'name'=> 'email', 'class'=> 'form-group', 'label'=> 'Email:']); ?>
                        <?= $this->Form->control('password', ['type'=> 'password', 'name'=> 'password', 'class'=> 'form-group', 'label'=> 'Mot de passe:']); ?>
                        <?= $this->Form->control('cel', ['type'=> 'text', 'name'=> 'cel', 'class'=> 'form-group', 'label'=> 'N° Cellulaire:']); ?>
                        <?= $this->Form->control('tel', ['type'=> 'text', 'name'=> 'tel', 'class'=> 'form-group', 'label'=> 'N° Téléphone fixe:']); ?>
                    </div>
                    <div class="span4">
                    
                    <?= $this->Form->control('web', ['type'=> 'text', 'name'=> 'web', 'class'=> 'form-group', 'label'=> 'Site Web:']); ?>
                    <?= $this->Form->control('bp', ['type'=> 'text', 'name'=> 'bp', 'class'=> 'form-group', 'label'=> 'Boîte postale:']); ?>
                    <?= $this->Form->control('adresse', ['type'=> 'text', 'name'=> 'adresse', 'class'=> 'form-group', 'label'=> 'Adresse:']); ?>
                    <?= $this->Form->control('localisation_site', ['type'=> 'textarea', 'name'=> 'localisation_site', 'class'=> 'form-group', 'label'=> 'Localisation du site:']); ?>

                    <?= $this->Form->button(__('Créer votre compte'), ['type'=> 'submit','class'=> 'btn btn-danger']) ?>
                    </div>
                <?= $this->Form->end() ?>

                    <div class='span4'>
                    <?= $this->Html->image('client-infos.jpg') ?>
                    </div>
        </div>
    </div>


    </div>
</section>


<?= $this->element('footer'); ?>

