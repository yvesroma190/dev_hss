<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Elementsmart[]|\Cake\Collection\CollectionInterface $elementsmarts
 */
?>
<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Elementsmart'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Offresmarts'), ['controller' => 'Offresmarts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Offresmart'), ['controller' => 'Offresmarts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="elementsmarts index large-9 medium-8 columns content">
    <h3><?= __('Elementsmarts') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('offresmart_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($elementsmarts as $elementsmart): ?>
            <tr>
                <td><?= $this->Number->format($elementsmart->id) ?></td>
                <td><?= h($elementsmart->name) ?></td>
                <td><?= h($elementsmart->created) ?></td>
                <td><?= h($elementsmart->modified) ?></td>
                <td><?= $elementsmart->has('offresmart') ? $this->Html->link($elementsmart->offresmart->name, ['controller' => 'Offresmarts', 'action' => 'view', $elementsmart->offresmart->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $elementsmart->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $elementsmart->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $elementsmart->id], ['confirm' => __('Are you sure you want to delete # {0}?', $elementsmart->id)]) ?>
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
</div>-->



<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Gestion des éléments smarts</h1>
    </div>
    <hr class="sidebar-divider d-none d-md-block">

        <!-- Sous Menu -->
        <div class="row">
            <div class="lg-12"> 
                       
                <a href=<?= $this->Url->build(['controller'=>'Elementsmarts', 'action'=>'add']) ?> class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Ajouter un élément smart</span>
                </a>
            </div>
        </div>
    <hr class="sidebar-divider d-none d-md-block">

    
    

    <!-- Content Row -->


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Liste des éléments</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                        <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('offresmart_id') ?></th>
                        <th scope="col" class="actions"><?= __('Actions') ?></th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                        <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('offresmart_id') ?></th>
                        <th scope="col" class="actions"><?= __('Actions') ?></th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php foreach ($elementsmarts as $elementsmart): ?>
                    <tr>
                        <td><?= $this->Number->format($elementsmart->id) ?></td>
                        <td><?= h($elementsmart->name) ?></td>
                        <td><?= h($elementsmart->created) ?></td>
                        <td><?= h($elementsmart->modified) ?></td>
                        <td><?= $elementsmart->has('offresmart') ? $this->Html->link($elementsmart->offresmart->name, ['controller' => 'Offresmarts', 'action' => 'view', $elementsmart->offresmart->id]) : '' ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $elementsmart->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $elementsmart->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $elementsmart->id], ['confirm' => __('Are you sure you want to delete # {0}?', $elementsmart->id)]) ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
                </table>
              </div>
            </div>
          </div>

    <!-- Content Row -->
    <div class="row">
    </div>

</div>



