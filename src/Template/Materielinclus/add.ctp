<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Materielinclus $materielinclus
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Materielinclus'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Offres'), ['controller' => 'Offres', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Offre'), ['controller' => 'Offres', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="materielinclus form large-9 medium-8 columns content">
    <?= $this->Form->create($materielinclus) ?>
    <fieldset>
        <legend><?= __('Add Materielinclus') ?></legend>
        <?php
            echo $this->Form->control('offre_id', ['options' => $offres, 'empty' => true]);
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
