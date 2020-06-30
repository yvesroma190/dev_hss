<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Offretele $offretele
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $offretele->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $offretele->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Offreteles'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Elementteles'), ['controller' => 'Elementteles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Elementtele'), ['controller' => 'Elementteles', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Souscriptionteles'), ['controller' => 'Souscriptionteles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Souscriptiontele'), ['controller' => 'Souscriptionteles', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="offreteles form large-9 medium-8 columns content">
    <?= $this->Form->create($offretele) ?>
    <fieldset>
        <legend><?= __('Edit Offretele') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('prix');
            echo $this->Form->control('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
