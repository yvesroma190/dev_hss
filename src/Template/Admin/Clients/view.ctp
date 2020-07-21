<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Client $client
 */
?>
<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Client'), ['action' => 'edit', $client->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Client'), ['action' => 'delete', $client->id], ['confirm' => __('Are you sure you want to delete # {0}?', $client->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Clients'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Commentaires'), ['controller' => 'Commentaires', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Commentaire'), ['controller' => 'Commentaires', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Souscriptionsmarts'), ['controller' => 'Souscriptionsmarts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Souscriptionsmart'), ['controller' => 'Souscriptionsmarts', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Souscriptionteles'), ['controller' => 'Souscriptionteles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Souscriptiontele'), ['controller' => 'Souscriptionteles', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="clients view large-9 medium-8 columns content">
    <h3><?= h($client->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($client->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pseudo') ?></th>
            <td><?= h($client->pseudo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($client->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cel') ?></th>
            <td><?= h($client->cel) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tel') ?></th>
            <td><?= h($client->tel) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($client->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Web') ?></th>
            <td><?= h($client->web) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bp') ?></th>
            <td><?= h($client->bp) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Adresse') ?></th>
            <td><?= h($client->adresse) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($client->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($client->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($client->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Localisation Site') ?></h4>
        <?= $this->Text->autoParagraph(h($client->localisation_site)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Commentaires') ?></h4>
        <?php if (!empty($client->commentaires)) : ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Comment') ?></th>
                <th scope="col"><?= __('Article Id') ?></th>
                <th scope="col"><?= __('Client Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($client->commentaires as $commentaires) : ?>
            <tr>
                <td><?= h($commentaires->id) ?></td>
                <td><?= h($commentaires->comment) ?></td>
                <td><?= h($commentaires->article_id) ?></td>
                <td><?= h($commentaires->client_id) ?></td>
                <td><?= h($commentaires->created) ?></td>
                <td><?= h($commentaires->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Commentaires', 'action' => 'view', $commentaires->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Commentaires', 'action' => 'edit', $commentaires->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Commentaires', 'action' => 'delete', $commentaires->id], ['confirm' => __('Are you sure you want to delete # {0}?', $commentaires->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Souscriptionsmarts') ?></h4>
        <?php if (!empty($client->souscriptionsmarts)) : ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Offresmart Id') ?></th>
                <th scope="col"><?= __('Client Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($client->souscriptionsmarts as $souscriptionsmarts) : ?>
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
    <div class="related">
        <h4><?= __('Related Souscriptionteles') ?></h4>
        <?php if (!empty($client->souscriptionteles)) : ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Offretele Id') ?></th>
                <th scope="col"><?= __('Client Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($client->souscriptionteles as $souscriptionteles) : ?>
            <tr>
                <td><?= h($souscriptionteles->id) ?></td>
                <td><?= h($souscriptionteles->offretele_id) ?></td>
                <td><?= h($souscriptionteles->client_id) ?></td>
                <td><?= h($souscriptionteles->created) ?></td>
                <td><?= h($souscriptionteles->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Souscriptionteles', 'action' => 'view', $souscriptionteles->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Souscriptionteles', 'action' => 'edit', $souscriptionteles->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Souscriptionteles', 'action' => 'delete', $souscriptionteles->id], ['confirm' => __('Are you sure you want to delete # {0}?', $souscriptionteles->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>-->




<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Gestion des clients</h1>
    </div>
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sous Menu -->
    <div class="row">
        <div class="lg-12">
            <?= $this->Html->link(__('Liste des clients'), ['action' => 'index'], ['class' => 'btn btn-info']) ?>
            <?= $this->Html->link(__('Ajouter un client'), ['action' => 'add'], ['class' => 'btn btn-primary']) ?>
            <?= $this->Html->link(__('Modifier'), ['action' => 'edit', $client->id], ['class' => 'btn btn-success']) ?>
            <?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $client->id], ['confirm' => __('Voulez-vous supprimer l\'utilisateur? # {0}?', $client->id), 'class' => 'btn btn-danger']) ?>
        </div>
    </div>
    <hr class="sidebar-divider d-none d-md-block">

    <div class="card shadow mb-6">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><?= h($client->name) ?></h6>
        </div>
        <div class="card-body">
            <table class="vertical-table">
                <tr>
                    <th scope="row"><?= __('Name') ?></th>
                    <td><?= h($client->name) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Pseudo') ?></th>
                    <td><?= h($client->pseudo) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Password') ?></th>
                    <td><?= h($client->password) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Cel') ?></th>
                    <td><?= h($client->cel) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Tel') ?></th>
                    <td><?= h($client->tel) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Email') ?></th>
                    <td><?= h($client->email) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Web') ?></th>
                    <td><?= h($client->web) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Bp') ?></th>
                    <td><?= h($client->bp) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Adresse') ?></th>
                    <td><?= h($client->adresse) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Id') ?></th>
                    <td><?= $this->Number->format($client->id) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Created') ?></th>
                    <td><?= h($client->created) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Modified') ?></th>
                    <td><?= h($client->modified) ?></td>
                </tr>
            </table>
            <div class="row">
                <h4><?= __('Localisation Site') ?></h4>
                <?= $this->Text->autoParagraph(h($client->localisation_site)); ?>
            </div>
            <div class="related">
                <h4><?= __('Related Commentaires') ?></h4>
                <?php if (!empty($client->commentaires)) : ?>
                    <table cellpadding="0" cellspacing="0">
                        <tr>
                            <th scope="col"><?= __('Id') ?></th>
                            <th scope="col"><?= __('Comment') ?></th>
                            <th scope="col"><?= __('Article Id') ?></th>
                            <th scope="col"><?= __('Client Id') ?></th>
                            <th scope="col"><?= __('Created') ?></th>
                            <th scope="col"><?= __('Modified') ?></th>
                            <th scope="col" class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($client->commentaires as $commentaires) : ?>
                            <tr>
                                <td><?= h($commentaires->id) ?></td>
                                <td><?= h($commentaires->comment) ?></td>
                                <td><?= h($commentaires->article_id) ?></td>
                                <td><?= h($commentaires->client_id) ?></td>
                                <td><?= h($commentaires->created) ?></td>
                                <td><?= h($commentaires->modified) ?></td>
                                <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'Commentaires', 'action' => 'view', $commentaires->id]) ?>
                                    <?= $this->Html->link(__('Edit'), ['controller' => 'Commentaires', 'action' => 'edit', $commentaires->id]) ?>
                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Commentaires', 'action' => 'delete', $commentaires->id], ['confirm' => __('Are you sure you want to delete # {0}?', $commentaires->id)]) ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Souscriptionsmarts') ?></h4>
                <?php if (!empty($client->souscriptionsmarts)) : ?>
                    <table cellpadding="0" cellspacing="0">
                        <tr>
                            <th scope="col"><?= __('Id') ?></th>
                            <th scope="col"><?= __('Offresmart Id') ?></th>
                            <th scope="col"><?= __('Client Id') ?></th>
                            <th scope="col"><?= __('Created') ?></th>
                            <th scope="col"><?= __('Modified') ?></th>
                            <th scope="col" class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($client->souscriptionsmarts as $souscriptionsmarts) : ?>
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
            <div class="related">
                <h4><?= __('Related Souscriptionteles') ?></h4>
                <?php if (!empty($client->souscriptionteles)) : ?>
                    <table cellpadding="0" cellspacing="0">
                        <tr>
                            <th scope="col"><?= __('Id') ?></th>
                            <th scope="col"><?= __('Offretele Id') ?></th>
                            <th scope="col"><?= __('Client Id') ?></th>
                            <th scope="col"><?= __('Created') ?></th>
                            <th scope="col"><?= __('Modified') ?></th>
                            <th scope="col" class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($client->souscriptionteles as $souscriptionteles) : ?>
                            <tr>
                                <td><?= h($souscriptionteles->id) ?></td>
                                <td><?= h($souscriptionteles->offretele_id) ?></td>
                                <td><?= h($souscriptionteles->client_id) ?></td>
                                <td><?= h($souscriptionteles->created) ?></td>
                                <td><?= h($souscriptionteles->modified) ?></td>
                                <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'Souscriptionteles', 'action' => 'view', $souscriptionteles->id]) ?>
                                    <?= $this->Html->link(__('Edit'), ['controller' => 'Souscriptionteles', 'action' => 'edit', $souscriptionteles->id]) ?>
                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Souscriptionteles', 'action' => 'delete', $souscriptionteles->id], ['confirm' => __('Are you sure you want to delete # {0}?', $souscriptionteles->id)]) ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                <?php endif; ?>
            </div>
        </div>
    </div>


</div>