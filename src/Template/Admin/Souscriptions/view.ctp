<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Souscription $souscription
 */
?>
<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Souscription'), ['action' => 'edit', $souscription->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Souscription'), ['action' => 'delete', $souscription->id], ['confirm' => __('Are you sure you want to delete # {0}?', $souscription->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Souscriptions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Souscription'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Offres'), ['controller' => 'Offres', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Offre'), ['controller' => 'Offres', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Periodes'), ['controller' => 'Periodes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Periode'), ['controller' => 'Periodes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Paiements'), ['controller' => 'Paiements', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Paiement'), ['controller' => 'Paiements', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="souscriptions view large-9 medium-8 columns content">
    <h3><?= h($souscription->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Client') ?></th>
            <td><?= $souscription->has('client') ? $this->Html->link($souscription->client->name, ['controller' => 'Clients', 'action' => 'view', $souscription->client->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Offre') ?></th>
            <td><?= $souscription->has('offre') ? $this->Html->link($souscription->offre->name, ['controller' => 'Offres', 'action' => 'view', $souscription->offre->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Periode') ?></th>
            <td><?= $souscription->has('periode') ? $this->Html->link($souscription->periode->name, ['controller' => 'Periodes', 'action' => 'view', $souscription->periode->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($souscription->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Montanttotal') ?></th>
            <td><?= $this->Number->format($souscription->montanttotal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Datedebut') ?></th>
            <td><?= h($souscription->datedebut) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Datefin') ?></th>
            <td><?= h($souscription->datefin) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($souscription->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($souscription->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Paiements') ?></h4>
        <?php if (!empty($souscription->paiements)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Client Id') ?></th>
                <th scope="col"><?= __('Souscription Id') ?></th>
                <th scope="col"><?= __('Offre Id') ?></th>
                <th scope="col"><?= __('Datepaiement') ?></th>
                <th scope="col"><?= __('Etatpaiement Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($souscription->paiements as $paiements): ?>
            <tr>
                <td><?= h($paiements->id) ?></td>
                <td><?= h($paiements->client_id) ?></td>
                <td><?= h($paiements->souscription_id) ?></td>
                <td><?= h($paiements->offre_id) ?></td>
                <td><?= h($paiements->datepaiement) ?></td>
                <td><?= h($paiements->etatpaiement_id) ?></td>
                <td><?= h($paiements->created) ?></td>
                <td><?= h($paiements->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Paiements', 'action' => 'view', $paiements->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Paiements', 'action' => 'edit', $paiements->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Paiements', 'action' => 'delete', $paiements->id], ['confirm' => __('Are you sure you want to delete # {0}?', $paiements->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>-->

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Gestion des souscriptions</h1>
    </div>
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sous Menu -->
    <div class="row">
        <!--<div class="lg-12">
            <?= $this->Html->link(__('Liste des périodes'), ['action' => 'index'], ['class' => 'btn btn-info']) ?>
            <?= $this->Html->link(__('Ajouter une période'), ['action' => 'add'], ['class' => 'btn btn-primary']) ?>
            <?= $this->Html->link(__('Modifer'), ['action' => 'edit', $periode->id], ['class' => 'btn btn-success']) ?>
            <?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $periode->id], ['confirm' => __('Voulez-vous supprimer la période? # {0}?', $periode->id), 'class' => 'btn btn-danger']) ?>
        </div>-->
    </div>
    <hr class="sidebar-divider d-none d-md-block">

    <div class="card shadow mb-6">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><?= h($periode->name) ?></h6>
        </div>
        <div class="card-body">
          <table class="vertical-table">
              <tr>
                  <th scope="row"><?= __('Client') ?></th>
                  <td><?= $souscription->has('client') ? $this->Html->link($souscription->client->name, ['controller' => 'Clients', 'action' => 'view', $souscription->client->id]) : '' ?></td>
              </tr>
              <tr>
                  <th scope="row"><?= __('Offre') ?></th>
                  <td><?= $souscription->has('offre') ? $this->Html->link($souscription->offre->name, ['controller' => 'Offres', 'action' => 'view', $souscription->offre->id]) : '' ?></td>
              </tr>
              <tr>
                  <th scope="row"><?= __('Periode') ?></th>
                  <td><?= $souscription->has('periode') ? $this->Html->link($souscription->periode->name, ['controller' => 'Periodes', 'action' => 'view', $souscription->periode->id]) : '' ?></td>
              </tr>
              <tr>
                  <th scope="row"><?= __('Id') ?></th>
                  <td><?= $this->Number->format($souscription->id) ?></td>
              </tr>
              <tr>
                  <th scope="row"><?= __('Montanttotal') ?></th>
                  <td><?= $this->Number->format($souscription->montanttotal) ?></td>
              </tr>
              <tr>
                  <th scope="row"><?= __('Datedebut') ?></th>
                  <td><?= h($souscription->datedebut) ?></td>
              </tr>
              <tr>
                  <th scope="row"><?= __('Datefin') ?></th>
                  <td><?= h($souscription->datefin) ?></td>
              </tr>
              <tr>
                  <th scope="row"><?= __('Created') ?></th>
                  <td><?= h($souscription->created) ?></td>
              </tr>
              <tr>
                  <th scope="row"><?= __('Modified') ?></th>
                  <td><?= h($souscription->modified) ?></td>
              </tr>
          </table>
          <div class="related">
              <h4><?= __('Related Paiements') ?></h4>
              <?php if (!empty($souscription->paiements)): ?>
              <table cellpadding="0" cellspacing="0">
                  <tr>
                      <th scope="col"><?= __('Id') ?></th>
                      <th scope="col"><?= __('Client Id') ?></th>
                      <th scope="col"><?= __('Souscription Id') ?></th>
                      <th scope="col"><?= __('Offre Id') ?></th>
                      <th scope="col"><?= __('Datepaiement') ?></th>
                      <th scope="col"><?= __('Etatpaiement Id') ?></th>
                      <th scope="col"><?= __('Created') ?></th>
                      <th scope="col"><?= __('Modified') ?></th>
                      <th scope="col" class="actions"><?= __('Actions') ?></th>
                  </tr>
                  <?php foreach ($souscription->paiements as $paiements): ?>
                  <tr>
                      <td><?= h($paiements->id) ?></td>
                      <td><?= h($paiements->client_id) ?></td>
                      <td><?= h($paiements->souscription_id) ?></td>
                      <td><?= h($paiements->offre_id) ?></td>
                      <td><?= h($paiements->datepaiement) ?></td>
                      <td><?= h($paiements->etatpaiement_id) ?></td>
                      <td><?= h($paiements->created) ?></td>
                      <td><?= h($paiements->modified) ?></td>
                      <td class="actions">
                          <?= $this->Html->link(__('View'), ['controller' => 'Paiements', 'action' => 'view', $paiements->id]) ?>
                          <?= $this->Html->link(__('Edit'), ['controller' => 'Paiements', 'action' => 'edit', $paiements->id]) ?>
                          <?= $this->Form->postLink(__('Delete'), ['controller' => 'Paiements', 'action' => 'delete', $paiements->id], ['confirm' => __('Are you sure you want to delete # {0}?', $paiements->id)]) ?>
                      </td>
                  </tr>
                  <?php endforeach; ?>
              </table>
              <?php endif; ?>
          </div>
        </div>
    </div>


</div>
