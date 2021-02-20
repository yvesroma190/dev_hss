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
                <h6> <strong>Détails</strong></h6>
                <div class="span4">
                    <?php 
						
						echo $commande = $_GET['purchaseref'];
						echo $sessionid = $_GET['sessionid'];
						echo $montant = $_GET['amount'];
						echo $ref = $_GET['payid'];
						echo $telephone = $_GET['telephone'];
						echo $description = $_GET['description'];
						echo $date = $_GET['date'];
						echo $time = $_GET['time'];
						echo $chanel = $_GET['channel'];
					?>
				</div>	
            </div>
            
            <div class="span8">		
                
            </div>

        </div>
    </div>
</section>



<?= $this->element('footer'); ?>

<!-- <?php echo $this->Html->script('/js/calcul.js'); ?> -->
