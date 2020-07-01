<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Elementtele[]|\Cake\Collection\CollectionInterface $elementteles
 */
?>
<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Elementtele'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Offreteles'), ['controller' => 'Offreteles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Offretele'), ['controller' => 'Offreteles', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="elementteles index large-9 medium-8 columns content">
    <h3><?= __('Elementteles') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('offretele_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($elementteles as $elementtele): ?>
            <tr>
                <td><?= $this->Number->format($elementtele->id) ?></td>
                <td><?= h($elementtele->name) ?></td>
                <td><?= h($elementtele->created) ?></td>
                <td><?= h($elementtele->modified) ?></td>
                <td><?= $elementtele->has('offretele') ? $this->Html->link($elementtele->offretele->name, ['controller' => 'Offreteles', 'action' => 'view', $elementtele->offretele->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $elementtele->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $elementtele->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $elementtele->id], ['confirm' => __('Are you sure you want to delete # {0}?', $elementtele->id)]) ?>
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
    <h1 class="h3 mb-0 text-gray-800">Gestion des éléments de télésurveillance</h1>
    </div>
    <hr class="sidebar-divider d-none d-md-block">

        <!-- Sous Menu -->
        <div class="row">
            <div class="lg-12"> 
                       
                <a href=<?= $this->Url->build(['controller'=>'Elementteles', 'action'=>'add']) ?> class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Ajouter un élément télésurveillance</span>
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
                        <th scope="col"><?= $this->Paginator->sort('offretele_id') ?></th>
                        <th scope="col" class="actions"><?= __('Actions') ?></th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                        <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('offretele_id') ?></th>
                        <th scope="col" class="actions"><?= __('Actions') ?></th>
                    </tr>
                  </tfoot>
                    <tbody>
                        <?php foreach ($elementteles as $elementtele): ?>
                        <tr>
                            <td><?= $this->Number->format($elementtele->id) ?></td>
                            <td><?= h($elementtele->name) ?></td>
                            <td><?= h($elementtele->created) ?></td>
                            <td><?= h($elementtele->modified) ?></td>
                            <td><?= $elementtele->has('offretele') ? $this->Html->link($elementtele->offretele->name, ['controller' => 'Offreteles', 'action' => 'view', $elementtele->offretele->id]) : '' ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['action' => 'view', $elementtele->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $elementtele->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $elementtele->id], ['confirm' => __('Are you sure you want to delete # {0}?', $elementtele->id)]) ?>
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



