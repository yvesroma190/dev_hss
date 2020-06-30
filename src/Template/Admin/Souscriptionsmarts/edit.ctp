<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Souscriptionsmart $souscriptionsmart
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $souscriptionsmart->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $souscriptionsmart->id)]
            )
        ?></li>
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
        <legend><?= __('Edit Souscriptionsmart') ?></legend>
        <?php
            echo $this->Form->control('offresmart_id', ['options' => $offresmarts, 'empty' => true]);
            echo $this->Form->control('client_id', ['options' => $clients, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
