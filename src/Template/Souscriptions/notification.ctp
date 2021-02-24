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
                <h6> <strong>Succès du paiement - Vos détails de paiement</strong></h6>
                <div class="span4">
					<table class="table table-striped">
                    <tr>
                        <th scope="row"><?= __('Référence de la commande:') ?></th>
                        <td><?= h($commande) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('ID de la session:') ?></th>
                        <td><?= h($sessionid) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Montant:') ?></th>
                        <td><?= h($montant) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('ID du paiement:') ?></th>
                        <td><?= h($ref) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('N° de téléphone:') ?></th>
                        <td><?= h($telephone) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Date de paiement:') ?></th>
                        <td><?= h($date) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Heure:') ?></th>
                        <td><?= h($time) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Opérateur mobile:') ?></th>
                        <td><?= h($channel) ?></td>
                    </tr>
                    
                </table>
                    <?php 
						
						/* echo $commande = $_GET['purchaseref'];
						echo $sessionid = $_GET['sessionid'];
						echo $montant = $_GET['amount'];
						echo $ref = $_GET['payid'];
						echo $telephone = $_GET['telephone'];
						echo $description = $_GET['description'];
						echo $date = $_GET['date'];
						echo $time = $_GET['time'];
						echo $channel = $_GET['channel']; */
					?>
				</div>
				
				<div class="span4">
				
					<?= $this->Form->create($paiement) ?>
					<fieldset>
						<legend><?= __('Add Paiement') ?></legend>
						<?php
							echo $this->Form->control('refpay', ['type' => 'hidden', 'class' => 'form-control', 'value' => $commande]);
							echo $this->Form->control('session', ['type' => 'hidden', 'class' => 'form-control', 'value' => $sessionid]);
							echo $this->Form->control('payid', ['type' => 'hidden', 'class' => 'form-control', 'value' => $ref]);
							echo $this->Form->control('souscription_id', ['type' => 'hidden', 'class' => 'form-control', 'value' => $souscription]);
							echo $this->Form->control('client_id', ['type' => 'hidden', 'class' => 'form-control', 'value' => $clientid]);
							echo $this->Form->control('montant', ['type' => 'hidden', 'class' => 'form-control', 'value' => $montant]);
							echo $this->Form->control('tel', ['type' => 'hidden', 'class' => 'form-control', 'value' => $telephone]);
							echo $this->Form->control('description', ['type' => 'hidden', 'class' => 'form-control', 'value' => $description]);
							echo $this->Form->control('datepay', ['type' => 'hidden', 'class' => 'form-control', 'value' => $date]);
							echo $this->Form->control('datefin', ['type' => 'hidden', 'class' => 'form-control', 'value' => $datefin]);
							echo $this->Form->control('timepay', ['type' => 'hidden', 'class' => 'form-control', 'value' => $time]);
							echo $this->Form->control('canal', ['type' => 'hidden', 'class' => 'form-control', 'value' => $channel]);
							echo $this->Form->control('etatpaiement_id', ['type' => 'hidden','options' => $etatpaiements, 'empty' => true]);
						?>
					</fieldset>
					<p>* Cliquez sur le bouton <strong>'Achever le paiement'</strong> pour votre abonnement soit pris en compte.</p>
					<?= $this->Form->button(__('Achever le paiement'), ['class'=> 'btn btn-large btn-theme btn-danger btn-rounded']) ?>
					<?= $this->Form->end() ?>
				
				</div>
				
            </div>
            
            <div class="span8">		
                
            </div>

        </div>
    </div>
</section>



<?= $this->element('footer'); ?>

<!-- <?php echo $this->Html->script('/js/calcul.js'); ?> -->
