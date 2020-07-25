<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Periode $periode
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Periode'), ['action' => 'edit', $periode->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Periode'), ['action' => 'delete', $periode->id], ['confirm' => __('Are you sure you want to delete # {0}?', $periode->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Periodes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Periode'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Souscriptions'), ['controller' => 'Souscriptions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Souscription'), ['controller' => 'Souscriptions', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="periodes view large-9 medium-8 columns content">
    <h3><?= h($periode->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($periode->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($periode->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nbmois') ?></th>
            <td><?= $this->Number->format($periode->nbmois) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($periode->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($periode->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Souscriptions') ?></h4>
        <?php if (!empty($periode->souscriptions)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Client Id') ?></th>
                <th scope="col"><?= __('Offre Id') ?></th>
                <th scope="col"><?= __('Periode Id') ?></th>
                <th scope="col"><?= __('Montanttotal') ?></th>
                <th scope="col"><?= __('Datedebut') ?></th>
                <th scope="col"><?= __('Datefin') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($periode->souscriptions as $souscriptions): ?>
            <tr>
                <td><?= h($souscriptions->id) ?></td>
                <td><?= h($souscriptions->client_id) ?></td>
                <td><?= h($souscriptions->offre_id) ?></td>
                <td><?= h($souscriptions->periode_id) ?></td>
                <td><?= h($souscriptions->montanttotal) ?></td>
                <td><?= h($souscriptions->datedebut) ?></td>
                <td><?= h($souscriptions->datefin) ?></td>
                <td><?= h($souscriptions->created) ?></td>
                <td><?= h($souscriptions->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Souscriptions', 'action' => 'view', $souscriptions->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Souscriptions', 'action' => 'edit', $souscriptions->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Souscriptions', 'action' => 'delete', $souscriptions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $souscriptions->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
