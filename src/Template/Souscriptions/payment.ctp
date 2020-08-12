<?= $this->element('header'); ?>

<section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="span4">
                <div class="inner-heading">
                    <h2>ABONNEMENT</h2>
                </div>
            </div>
            <div class="span8">
                <ul class="breadcrumb">
                    <li><a href="<?= $this->Url->build(['controller' => 'Offres', 'action' => 'index']); ?>"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
                    <!--<li><a href="#">Pages</a><i class="icon-angle-right"></i></li>-->
                    <li class="active">Abonnement</li>
                </ul>
            </div>
        </div>
    </div>
</section>





<section id="content">
    <div class="container">
        <div class="row">
            <div class="span12">
                <h4><strong>Paiement</strong></h4>
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
            <div>
                <h6> <strong>Validez votre Paiement</strong></h6>
                <div class="span8">
                    <table class="table table-striped">
                        <tr>
                            <th scope="row"><?= __('Nom du client:') ?></th>
                            <td><?= $souscription->client->name ?></td>
                        </tr>
                        <tr>
                            <th scope="row"><?= __('Offre:') ?></th>
                            <td><?= $souscription->offre->name ?></td>
                        </tr>
                        <tr>
                            <th scope="row"><?= __('Durée:') ?></th>
                            <td><?= $souscription->periode->name ?></td>
                        </tr>
                        <!-- <tr>
                            <th scope="row"><?= __('Id') ?></th>
                            <td><?= $this->Number->format($souscription->id) ?></td>
                        </tr> -->
                        <tr>
                            <th scope="row"><?= __('Montant total:') ?></th>
                            <td><?= $this->Number->format($souscription->montanttotal) ?></td>
                        </tr>
                        <tr>
                            <th scope="row"><?= __('Date début:') ?></th>
                            <td><?= h($souscription->datedebut) ?></td>
                        </tr>
                        <tr>
                            <th scope="row"><?= __('Date fin:') ?></th>
                            <td><?= h($souscription->datefin) ?></td>
                        </tr>
                        <tr>
                            <th scope="row"><?= __('Created') ?></th>
                            <td><?= h($souscription->created) ?></td>
                        </tr>
                        <tr>
                            <th scope="row"><?= __('Modified') ?></th>
                            <td><?= h($souscription->modified) ?></td>
                        </tr>
                    </table>
                </div>
            </div>                     
            
            <div class="span4">
                <?= $this->Form->create($paiement) ?>
                <fieldset>
                    <?php
                        echo $this->Form->control('client_id', ['options' => $clients, 'empty' => true]);
                        echo $this->Form->control('souscription_id', ['options' => $souscriptions, 'empty' => true]);
                        echo $this->Form->control('offre_id', ['options' => $offres, 'empty' => true]);
                        echo $this->Form->control('datepaiement', ['empty' => true]);
                        echo $this->Form->control('etatpaiement_id', ['options' => $etatpaiements, 'empty' => true]);
                    ?>
                </fieldset>
                <?= $this->Form->button(__('Procédez au paiement')) ?>
                <?= $this->Form->end() ?>
            </div>

        </div>
    </div>
</section>


<?= $this->element('footer'); ?>

<!-- <?php echo $this->Html->script('/js/calcul.js'); ?> -->