<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Categoriearticle[]|\Cake\Collection\CollectionInterface $categoriearticles
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Categoriearticle'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Articles'), ['controller' => 'Articles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Article'), ['controller' => 'Articles', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="categoriearticles index large-9 medium-8 columns content">
    <h3><?= __('Categoriearticles') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($categoriearticles as $categoriearticle): ?>
            <tr>
                <td><?= $this->Number->format($categoriearticle->id) ?></td>
                <td><?= h($categoriearticle->name) ?></td>
                <td><?= h($categoriearticle->created) ?></td>
                <td><?= h($categoriearticle->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $categoriearticle->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $categoriearticle->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $categoriearticle->id], ['confirm' => __('Are you sure you want to delete # {0}?', $categoriearticle->id)]) ?>
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
