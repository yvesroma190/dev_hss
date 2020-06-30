<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Compte $compte
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $compte->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $compte->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Comptes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="comptes form large-9 medium-8 columns content">
    <?= $this->Form->create($compte) ?>
    <fieldset>
        <legend><?= __('Edit Compte') ?></legend>
        <?php
            echo $this->Form->control('login');
            echo $this->Form->control('password');
            echo $this->Form->control('client_id', ['options' => $clients, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
