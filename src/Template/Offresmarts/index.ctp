<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Offresmart[]|\Cake\Collection\CollectionInterface $offresmarts
 */
?>
<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Offresmart'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Elementsmarts'), ['controller' => 'Elementsmarts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Elementsmart'), ['controller' => 'Elementsmarts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Souscriptionsmarts'), ['controller' => 'Souscriptionsmarts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Souscriptionsmart'), ['controller' => 'Souscriptionsmarts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="offresmarts index large-9 medium-8 columns content">
    <h3><?= __('Offresmarts') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('prix') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($offresmarts as $offresmart): ?>
            <tr>
                <td><?= $this->Number->format($offresmart->id) ?></td>
                <td><?= h($offresmart->name) ?></td>
                <td><?= h($offresmart->prix) ?></td>
                <td><?= h($offresmart->created) ?></td>
                <td><?= h($offresmart->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $offresmart->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $offresmart->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $offresmart->id], ['confirm' => __('Are you sure you want to delete # {0}?', $offresmart->id)]) ?>
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


<?= $this->element('header'); ?>
<?= $this->element('slider'); ?>



<section id="content">
    <div class="container">
    <div class="row">
    <div class="span12">
        <h4><strong>NOS OFFRES</strong></h4>
        </div>
    </div>
    <!-- divider -->
    <div class="row">
        <div class="span12">
        <div class="solidline">
        </div>
        </div>
    </div>
    <!-- end divider -->
    
    <div class="row">
        <?php foreach ($categories as $category): ?>
        <div class="span12">
            <h4><strong>OFFRES SMART PROTECTION</strong></h4>
        </div>
        <?php foreach ($category->offres as $offres) : ?>
        <div class="span4">
            <div class="pricing-box-alt">
                <div class="pricing-heading">
                    <h3><strong><?= @h($offres->name) ?></strong></h3>
                </div>
                <div class="pricing-terms">
                    <h6> <?= @h($offres->prix) ?> FCFA / Mois</h6>
                </div>
                <div class="pricing-content">
                    <ul>
                    <?php foreach ($offres as $offre) : ?>
                        <?php foreach ($offre->elements as $elements) : ?>
                        <li><i class="icon-ok"></i><?= @h($elements->name) ?></li>
                        <?php endforeach; ?>
                    <?php endforeach; ?>
                        
                    </ul>
                </div>
                <div class="pricing-action">
                    <a href="#" class="btn btn-medium btn-theme"><i class="icon-bolt"></i> Souscrire</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
        <?php endforeach; ?>
    </div>
    <!-- divider -->
    <div class="row">
        <div class="span12">
        <div class="solidline">
        </div>
        </div>
    </div>
    <!-- end divider -->
    
    <!--<div class="row">
        <div class="span12">
        <div class="row">
            <div class="span3">
            <div class="box aligncenter">
                <div class="aligncenter icon">
                <i class="icon-briefcase icon-circled icon-64 active"></i>
                </div>
                <div class="text">
                <h6>Securité physique</h6>
                <p>
                    Lorem ipsum dolor sit amet, has ei ipsum scaevola deseruisse am sea facilisis.
                </p>
                <a href="#">Détails</a>
                </div>
            </div>
            </div>
            <div class="span3">
            <div class="box aligncenter">
                <div class="aligncenter icon">
                <i class=" icon-truck icon-circled icon-64 active"></i>
                </div>
                <div class="text">
                <h6>Escorte</h6>
                <p>
                    Lorem ipsum dolor sit amet, has ei ipsum scaevola deseruisse am sea facilisis.
                </p>
                <a href="#">Détails</a>
                </div>
            </div>
            </div>
            <div class="span3">
            <div class="box aligncenter">
                <div class="aligncenter icon">
                <i class=" icon-camera icon-circled icon-64 active"></i>
                </div>
                <div class="text">
                <h6>Télésurveillance</h6>
                <p>
                    Lorem ipsum dolor sit amet, has ei ipsum scaevola deseruisse am sea facilisis.
                </p>
                <a href="#">Détails</a>
                </div>
            </div>
            </div>
            <div class="span3">
            <div class="box aligncenter">
                <div class="aligncenter icon">
                <i class=" icon-bell icon-circled icon-64 active"></i>
                </div>
                <div class="text">
                <h6>Alarme</h6>
                <p>
                    Lorem ipsum dolor sit amet, has ei ipsum scaevola deseruisse am sea facilisis.
                </p>
                <a href="#">Détails</a>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>-->

    <!--<div class="row">
        <div class="span12">
        <h4>Nos clients <strong>satisfaits</strong></h4>
        <ul id="mycarousel" class="jcarousel-skin-tango recent-jcarousel clients">
            <li>
            <a href="#">
                <img src="img/dummies/clients/client1.png" class="client-logo" alt="" />
                </a>
            </li>
            <li>
            <a href="#">
                <img src="img/dummies/clients/client2.png" class="client-logo" alt="" />
                </a>
            </li>
            <li>
            <a href="#">
                <img src="img/dummies/clients/client3.png" class="client-logo" alt="" />
                </a>
            </li>
            <li>
            <a href="#">
                <img src="img/dummies/clients/client4.png" class="client-logo" alt="" />
                </a>
            </li>
            <li>
            <a href="#">
                <img src="img/dummies/clients/client5.png" class="client-logo" alt="" />
                </a>
            </li>
            <li>
            <a href="#">
                <img src="img/dummies/clients/client6.png" class="client-logo" alt="" />
                </a>
            </li>
            <li>
            <a href="#">
                <img src="img/dummies/clients/client1.png" class="client-logo" alt="" />
                </a>
            </li>
            <li>
            <a href="#">
                <img src="img/dummies/clients/client2.png" class="client-logo" alt="" />
                </a>
            </li>
            <li>
            <a href="#">
                <img src="img/dummies/clients/client3.png" class="client-logo" alt="" />
                </a>
            </li>
            <li>
            <a href="#">
                <img src="img/dummies/clients/client4.png" class="client-logo" alt="" />
                </a>
            </li>
            <li>
            <a href="#">
                <img src="img/dummies/clients/client5.png" class="client-logo" alt="" />
                </a>
            </li>
            <li>
            <a href="#">
                <img src="img/dummies/clients/client6.png" class="client-logo" alt="" />
                </a>
            </li>
        </ul>
        </div>
    </div>-->
    </div>
</section>





<?= $this->element('footer'); ?>

