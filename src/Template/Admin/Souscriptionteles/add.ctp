<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Souscriptiontele $souscriptiontele
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Souscriptionteles'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Offreteles'), ['controller' => 'Offreteles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Offretele'), ['controller' => 'Offreteles', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="souscriptionteles form large-9 medium-8 columns content">
    <?= $this->Form->create($souscriptiontele) ?>
    <fieldset>
        <legend><?= __('Add Souscriptiontele') ?></legend>
        <?php
            echo $this->Form->control('offretele_id', ['options' => $offreteles, 'empty' => true]);
            echo $this->Form->control('client_id', ['options' => $clients, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
