<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Paiement $paiement
 */
?>
<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $paiement->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $paiement->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Paiements'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Souscriptions'), ['controller' => 'Souscriptions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Souscription'), ['controller' => 'Souscriptions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Offres'), ['controller' => 'Offres', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Offre'), ['controller' => 'Offres', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Etatpaiements'), ['controller' => 'Etatpaiements', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Etatpaiement'), ['controller' => 'Etatpaiements', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="paiements form large-9 medium-8 columns content">
    <?= $this->Form->create($paiement) ?>
    <fieldset>
        <legend><?= __('Edit Paiement') ?></legend>
        <?php
            echo $this->Form->control('client_id', ['options' => $clients, 'empty' => true]);
            echo $this->Form->control('souscription_id', ['options' => $souscriptions, 'empty' => true]);
            echo $this->Form->control('offre_id', ['options' => $offres, 'empty' => true]);
            echo $this->Form->control('datepaiement', ['empty' => true]);
            echo $this->Form->control('etatpaiement_id', ['options' => $etatpaiements, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>-->