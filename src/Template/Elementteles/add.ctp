<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Elementtele $elementtele
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Elementteles'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Offreteles'), ['controller' => 'Offreteles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Offretele'), ['controller' => 'Offreteles', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="elementteles form large-9 medium-8 columns content">
    <?= $this->Form->create($elementtele) ?>
    <fieldset>
        <legend><?= __('Add Elementtele') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('offretele_id', ['options' => $offreteles, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
