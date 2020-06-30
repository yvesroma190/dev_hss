<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Usergroups'), ['controller' => 'Usergroups', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Usergroup'), ['controller' => 'Usergroups', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Articles'), ['controller' => 'Articles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Article'), ['controller' => 'Articles', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users index large-9 medium-8 columns content">
    <h3><?= __('Users') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('usergroup_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('username') ?></th>
                <th scope="col"><?= $this->Paginator->sort('password') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tel') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $this->Number->format($user->id) ?></td>
                <td><?= $user->has('usergroup') ? $this->Html->link($user->usergroup->name, ['controller' => 'Usergroups', 'action' => 'view', $user->usergroup->id]) : '' ?></td>
                <td><?= h($user->username) ?></td>
                <td><?= h($user->password) ?></td>
                <td><?= h($user->name) ?></td>
                <td><?= h($user->email) ?></td>
                <td><?= h($user->tel) ?></td>
                <td><?= h($user->created) ?></td>
                <td><?= h($user->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
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
    <h1 class="h3 mb-0 text-gray-800">Gestion des Utilisateurs</h1>
    </div>
    <hr class="sidebar-divider d-none d-md-block">

        <!-- Sous Menu -->
        <div class="row">
            <div class="lg-12"> 
                       
                <a href="<?= $this->Url->build(['controller'=>'Users', 'action'=>'add']) ?>" class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Ajouter un utilisateur</span>
                </a>
            </div>
        </div>
    <hr class="sidebar-divider d-none d-md-block">

    
    

    <!-- Content Row -->


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Liste des Utilisateurs</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th><?= $this->Paginator->sort('id') ?></th>
                      <th><?= $this->Paginator->sort('Groupe') ?></th>
                      <th><?= $this->Paginator->sort('nom d\'utilisateur') ?></th>
                      <th><?= $this->Paginator->sort('Mot de passe') ?></th>
                      <th><?= $this->Paginator->sort('Nom') ?></th>
                      <th><?= $this->Paginator->sort('email') ?></th>
                      <th><?= $this->Paginator->sort('tel') ?></th>
                      <th><?= $this->Paginator->sort('Date création') ?></th>
                      <th><?= $this->Paginator->sort('Date modification') ?></th>
                      <th class="actions"><?= __('Actions') ?></th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th><?= $this->Paginator->sort('id') ?></th>
                      <th><?= $this->Paginator->sort('Groupe') ?></th>
                      <th><?= $this->Paginator->sort('nom d\'utilisateur') ?></th>
                      <th><?= $this->Paginator->sort('Mot de passe') ?></th>
                      <th><?= $this->Paginator->sort('Nom') ?></th>
                      <th><?= $this->Paginator->sort('email') ?></th>
                      <th><?= $this->Paginator->sort('tel') ?></th>
                      <th><?= $this->Paginator->sort('Date création') ?></th>
                      <th><?= $this->Paginator->sort('Date modification') ?></th>
                      <th class="actions"><?= __('Actions') ?></th>
                    </tr>
                  </tfoot>
                  <tbody>
                      <?php foreach ($users as $user): ?>
                      <tr>
                          <td><?= $this->Number->format($user->id) ?></td>
                          <td><?= $user->has('usergroup') ? $this->Html->link($user->usergroup->name, ['controller' => 'Usergroups', 'action' => 'view', $user->usergroup->id]) : '' ?></td>
                          <td><?= h($user->username) ?></td>
                          <td><?= h($user->password) ?></td>
                          <td><?= h($user->name) ?></td>
                          <td><?= h($user->email) ?></td>
                          <td><?= h($user->tel) ?></td>
                          <td><?= h($user->created) ?></td>
                          <td><?= h($user->modified) ?></td>
                          <td class="actions">
                              <?= $this->Html->link(__('Détails'), ['action' => 'view', $user->id],['class' => 'btn btn-primary btn-circle btn-sm']) ?>
                              <?= $this->Html->link(__('Modifier'), ['action' => 'edit', $user->id],['class' => 'btn btn-success btn-circle btn-sm']) ?>
                              <?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $user->id], ['confirm' => __('Voulez-vous supprimer l\'utilisateur? # {0}?', $user->id), 'class' => 'btn btn-danger btn-circle btn-sm']) ?>
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