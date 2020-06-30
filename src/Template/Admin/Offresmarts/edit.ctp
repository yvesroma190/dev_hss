<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Offresmart $offresmart
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $offresmart->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $offresmart->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Offresmarts'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Elementsmarts'), ['controller' => 'Elementsmarts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Elementsmart'), ['controller' => 'Elementsmarts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Souscriptionsmarts'), ['controller' => 'Souscriptionsmarts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Souscriptionsmart'), ['controller' => 'Souscriptionsmarts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="offresmarts form large-9 medium-8 columns content">
    <?= $this->Form->create($offresmart) ?>
    <fieldset>
        <legend><?= __('Edit Offresmart') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('prix');
            echo $this->Form->control('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
