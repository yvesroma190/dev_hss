<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Souscriptionsmart $souscriptionsmart
 */
?>
<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Souscriptionsmarts'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Offresmarts'), ['controller' => 'Offresmarts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Offresmart'), ['controller' => 'Offresmarts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="souscriptionsmarts form large-9 medium-8 columns content">
    <?= $this->Form->create($souscriptionsmart) ?>
    <fieldset>
        <legend><?= __('Add Souscriptionsmart') ?></legend>
        <?php
            echo $this->Form->control('offresmart_id', ['options' => $offresmarts, 'empty' => true]);
            echo $this->Form->control('client_id', ['options' => $clients, 'empty' => true]);
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
            <h2>SOUSCRIPTION</h2>
        </div>
        </div>
        <div class="span8">
        <ul class="breadcrumb">
            <li><a href="<?= $this->Url->build(['controller' => 'Offresmarts', 'action' => 'index']); ?>"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
            <!--<li><a href="#">Pages</a><i class="icon-angle-right"></i></li>-->
            <li class="active">Souscription</li>
        </ul>
        </div>
    </div>
    </div>
</section>


<section id="content">
    <div class="container">
    <div class="row">
    <div class="span12">
        <h4><strong>Validation</strong></h4>
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
        
                    <div class="span10">
                        <h3><?= h($client->name) ?></h3>
                        <table class="vertical-table">
                            <tr>
                                <th scope="row"><?= __('Name') ?></th>
                                <td><?= h($client->name) ?></td>
                            </tr>
                            <tr>
                                <th scope="row"><?= __('Pseudo') ?></th>
                                <td><?= h($client->pseudo) ?></td>
                            </tr>
                            <tr>
                                <th scope="row"><?= __('Password') ?></th>
                                <td><?= h($client->password) ?></td>
                            </tr>
                            <tr>
                                <th scope="row"><?= __('Cel') ?></th>
                                <td><?= h($client->cel) ?></td>
                            </tr>
                            <tr>
                                <th scope="row"><?= __('Tel') ?></th>
                                <td><?= h($client->tel) ?></td>
                            </tr>
                            <tr>
                                <th scope="row"><?= __('Email') ?></th>
                                <td><?= h($client->email) ?></td>
                            </tr>
                            <tr>
                                <th scope="row"><?= __('Web') ?></th>
                                <td><?= h($client->web) ?></td>
                            </tr>
                            <tr>
                                <th scope="row"><?= __('Bp') ?></th>
                                <td><?= h($client->bp) ?></td>
                            </tr>
                            <tr>
                                <th scope="row"><?= __('Adresse') ?></th>
                                <td><?= h($client->adresse) ?></td>
                            </tr>
                            <tr>
                                <th scope="row"><?= __('Id') ?></th>
                                <td><?= $this->Number->format($client->id) ?></td>
                            </tr>
                            <tr>
                                <th scope="row"><?= __('Created') ?></th>
                                <td><?= h($client->created) ?></td>
                            </tr>
                            <tr>
                                <th scope="row"><?= __('Modified') ?></th>
                                <td><?= h($client->modified) ?></td>
                            </tr>
                        </table>
                    </div>

                    <div class='span2'>
                    
                        <!--Formulaire de souscription smart-->
                        <?= $this->Form->create($souscriptionsmart) ?>
                            <?php
                                echo $this->Form->control('offresmart_id', ['name' =>'offresmart_id', 'empty' => true, 'type' =>'hidden']);
                                echo $this->Form->control('client_id', ['options' => $clients, 'empty' => true, 'type' =>'hidden']);
                            ?>
                        <?= $this->Form->button(__('Valider la soucription'), ['type'=> 'submit','class'=> 'btn btn-danger']) ?>
                        <?= $this->Form->end() ?>
                    </div>
        </div>
    </div>

    


    </div>
</section>


<?= $this->element('footer'); ?>

