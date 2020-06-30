<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Offresmart $offresmart
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Offresmart'), ['action' => 'edit', $offresmart->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Offresmart'), ['action' => 'delete', $offresmart->id], ['confirm' => __('Are you sure you want to delete # {0}?', $offresmart->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Offresmarts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Offresmart'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Elementsmarts'), ['controller' => 'Elementsmarts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Elementsmart'), ['controller' => 'Elementsmarts', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Souscriptionsmarts'), ['controller' => 'Souscriptionsmarts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Souscriptionsmart'), ['controller' => 'Souscriptionsmarts', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="offresmarts view large-9 medium-8 columns content">
    <h3><?= h($offresmart->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($offresmart->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Prix') ?></th>
            <td><?= h($offresmart->prix) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($offresmart->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($offresmart->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($offresmart->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($offresmart->description)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Elementsmarts') ?></h4>
        <?php if (!empty($offresmart->elementsmarts)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Offresmart Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($offresmart->elementsmarts as $elementsmarts): ?>
            <tr>
                <td><?= h($elementsmarts->id) ?></td>
                <td><?= h($elementsmarts->name) ?></td>
                <td><?= h($elementsmarts->created) ?></td>
                <td><?= h($elementsmarts->modified) ?></td>
                <td><?= h($elementsmarts->offresmart_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Elementsmarts', 'action' => 'view', $elementsmarts->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Elementsmarts', 'action' => 'edit', $elementsmarts->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Elementsmarts', 'action' => 'delete', $elementsmarts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $elementsmarts->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Souscriptionsmarts') ?></h4>
        <?php if (!empty($offresmart->souscriptionsmarts)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Offresmart Id') ?></th>
                <th scope="col"><?= __('Client Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($offresmart->souscriptionsmarts as $souscriptionsmarts): ?>
            <tr>
                <td><?= h($souscriptionsmarts->id) ?></td>
                <td><?= h($souscriptionsmarts->offresmart_id) ?></td>
                <td><?= h($souscriptionsmarts->client_id) ?></td>
                <td><?= h($souscriptionsmarts->created) ?></td>
                <td><?= h($souscriptionsmarts->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Souscriptionsmarts', 'action' => 'view', $souscriptionsmarts->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Souscriptionsmarts', 'action' => 'edit', $souscriptionsmarts->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Souscriptionsmarts', 'action' => 'delete', $souscriptionsmarts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $souscriptionsmarts->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
