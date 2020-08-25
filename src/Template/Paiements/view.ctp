<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Paiement $paiement
 */
?>
<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Paiement'), ['action' => 'edit', $paiement->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Paiement'), ['action' => 'delete', $paiement->id], ['confirm' => __('Are you sure you want to delete # {0}?', $paiement->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Paiements'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Paiement'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Souscriptions'), ['controller' => 'Souscriptions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Souscription'), ['controller' => 'Souscriptions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Offres'), ['controller' => 'Offres', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Offre'), ['controller' => 'Offres', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Etatpaiements'), ['controller' => 'Etatpaiements', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Etatpaiement'), ['controller' => 'Etatpaiements', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="paiements view large-9 medium-8 columns content">
    <h3><?= h($paiement->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Client') ?></th>
            <td><?= $paiement->has('client') ? $this->Html->link($paiement->client->name, ['controller' => 'Clients', 'action' => 'view', $paiement->client->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Souscription') ?></th>
            <td><?= $paiement->has('souscription') ? $this->Html->link($paiement->souscription->id, ['controller' => 'Souscriptions', 'action' => 'view', $paiement->souscription->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Offre') ?></th>
            <td><?= $paiement->has('offre') ? $this->Html->link($paiement->offre->name, ['controller' => 'Offres', 'action' => 'view', $paiement->offre->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Etatpaiement') ?></th>
            <td><?= $paiement->has('etatpaiement') ? $this->Html->link($paiement->etatpaiement->name, ['controller' => 'Etatpaiements', 'action' => 'view', $paiement->etatpaiement->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($paiement->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Datepaiement') ?></th>
            <td><?= h($paiement->datepaiement) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($paiement->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($paiement->modified) ?></td>
        </tr>
    </table>
</div> -->


<?= $this->element('header'); ?>

<section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="span4">
                <div class="inner-heading">
                    <h2>PROFILE</h2>
                </div>
            </div>
            <div class="span8">
                <ul class="breadcrumb">
                    <li><a href="<?= $this->Url->build(['controller' => 'Offres', 'action' => 'index']); ?>"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
                    <!--<li><a href="#">Pages</a><i class="icon-angle-right"></i></li>-->
                    <li class="active">Paiement</li>
                </ul>
            </div>
        </div>
    </div>
</section>





<section id="content">
    <div class="container">
        <div class="row">
            <div class="span12">
                <h4><strong>Mon paiement</strong></h4>
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
        
        <!-- Menu du profile -->
        <div class="row">
            <div class="span12">
                <!-- <?= $this->Html->link(__('Mon profile'), ['controller' => 'Clients', 'action' => 'view', $client->id], ['class'=> 'btn btn-success']) ?> -->
                <!-- <?= $this->Html->link(__('Mes souscriptions'), ['action' => 'edit', $client->id], ['class'=> 'btn btn-primary']) ?>
                <?= $this->Html->link(__('Mes paiements'), ['action' => 'edit', $client->id], ['class'=> 'btn btn-danger']) ?> -->
            </div>
        </div>

        <!-- divider -->
        <!-- <div class="row">
            <div class="span12">
                <div class="solidline">
                </div>
            </div>
        </div> -->
        <!-- end divider -->

        <!-- details client -->
        <div class="row">
            <div>
                <h6> <strong>Informations paiement</strong></h6>
            </div>
            <p><?= $this->Flash->render() ?></p> 
            <div class="span6">
                <table class="table table-bordered">
                    <tr>
						<th scope="row"><?= __('Client') ?></th>
						<td><?= $paiement->has('client') ? $this->Html->link($paiement->client->name, ['controller' => 'Clients', 'action' => 'view', $paiement->client->id]) : '' ?></td>
					</tr>
					<tr>
						<th scope="row"><?= __('Souscription') ?></th>
						<td><?= $paiement->has('souscription') ? $this->Html->link($paiement->souscription->id, ['controller' => 'Souscriptions', 'action' => 'view', $paiement->souscription->id]) : '' ?></td>
					</tr>
					<tr>
						<th scope="row"><?= __('Offre') ?></th>
						<td><?= $paiement->has('offre') ? $this->Html->link($paiement->offre->name, ['controller' => 'Offres', 'action' => 'view', $paiement->offre->id]) : '' ?></td>
					</tr>
					<tr>
						<th scope="row"><?= __('Etat paiement') ?></th>
						<td><?= $paiement->has('etatpaiement') ? $this->Html->link($paiement->etatpaiement->name, ['controller' => 'Etatpaiements', 'action' => 'view', $paiement->etatpaiement->id]) : '' ?></td>
					</tr>
					<!-- <tr>
						<th scope="row"><?= __('Id') ?></th>
						<td><?= $this->Number->format($paiement->id) ?></td>
					</tr> -->
					<tr>
						<th scope="row"><?= __('Datepaiement') ?></th>
						<td><?= h($paiement->datepaiement) ?></td>
					</tr>
					<!-- <tr>
						<th scope="row"><?= __('Created') ?></th>
						<td><?= h($paiement->created) ?></td>
					</tr>
					<tr>
						<th scope="row"><?= __('Modified') ?></th>
						<td><?= h($paiement->modified) ?></td>
					</tr> -->
                </table>
            </div>
        </div>
    </div>
</section>


<?= $this->element('footer'); ?>