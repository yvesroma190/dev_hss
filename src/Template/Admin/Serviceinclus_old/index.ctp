<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Serviceinclus[]|\Cake\Collection\CollectionInterface $serviceinclus
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Serviceinclus'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Offres'), ['controller' => 'Offres', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Offre'), ['controller' => 'Offres', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="serviceinclus index large-9 medium-8 columns content">
    <h3><?= __('Serviceinclus') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('is') ?></th>
                <th scope="col"><?= $this->Paginator->sort('offre_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($serviceinclus as $serviceinclus): ?>
            <tr>
                <td><?= $this->Number->format($serviceinclus->is) ?></td>
                <td><?= $serviceinclus->has('offre') ? $this->Html->link($serviceinclus->offre->name, ['controller' => 'Offres', 'action' => 'view', $serviceinclus->offre->id]) : '' ?></td>
                <td><?= h($serviceinclus->name) ?></td>
                <td><?= h($serviceinclus->created) ?></td>
                <td><?= h($serviceinclus->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $serviceinclus->is]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $serviceinclus->is]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $serviceinclus->is], ['confirm' => __('Are you sure you want to delete # {0}?', $serviceinclus->is)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
