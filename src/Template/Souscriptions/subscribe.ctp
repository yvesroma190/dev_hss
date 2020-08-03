<section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="span4">
                <div class="inner-heading">
                    <h2>SOUSCRIPTION</h2>
                </div>
            </div>
            <div class="span8">
                <ul class="breadcrumb">
                    <li><a href="<?= $this->Url->build(['controller' => 'Offres', 'action' => 'index']); ?>"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
                    <!--<li><a href="#">Pages</a><i class="icon-angle-right"></i></li>-->
                    <li class="active">Souscription</li>
                </ul>
            </div>
        </div>
    </div>
</section>





<section id="content">
    <div class="container">
        <div class="row">
            <div class="span12">
                <h4><strong>Souscription</strong></h4>
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
                <h6> <strong>Fiche du client</strong></h6>
            </div>
            <div class="span4 form-group">
                <?php
                echo $this->Form->control('name', ['class' => 'form-control', 'type' => 'text', 'placeholder' => 'Entrez votre nom et prénoms...', 'label' => 'Nom et Prénoms :']);
                echo $this->Form->control('email', ['class' => 'form-control', 'type' => 'email', 'placeholder' => 'Entrez votre adresse email...', 'label' => 'Email :']);
                echo $this->Form->control('password', ['class' => 'form-control', 'type' => 'password', 'placeholder' => 'Entrez votre mot de passe...', 'label' => 'Mot de passe :']);
                echo $this->Form->control('cel', ['class' => 'form-control', 'type' => 'text', 'placeholder' => 'Entrez votre numéro cellulaire...', 'label' => 'N° Cellulaire :']);
                echo $this->Form->control('tel', ['class' => 'form-control', 'type' => 'text', 'placeholder' => 'Entrez votre numéro de téléphone fixe...', 'label' => 'N° téléphone fixe :']);
                echo $this->Form->control('web', ['class' => 'form-control', 'type' => 'text', 'placeholder' => 'Entrez votre site web...', 'label' => 'Site web :']);
                ?>
            </div>
            <div class="span4 form-group">
                <?php
                echo $this->Form->control('bp', ['class' => 'form-control', 'type' => 'text', 'placeholder' => 'Entrez votre boîte postale...', 'label' => 'Boîte postale :']);
                echo $this->Form->control('adresse', ['class' => 'form-control', 'type' => 'text', 'placeholder' => 'Entrez votre adresse...', 'label' => 'Email :']);
                echo $this->Form->control('localisation_site', ['class' => 'form-control', 'type' => 'textarea', 'placeholder' => 'Entrez votre la localisation du site à sécuriser...', 'label' => 'Localisation du site :']);
                ?>
            </div>
            <div class="span4">
                <h6> <strong>Informations de l'offre</strong></h6>
                <div class="pricing-heading">
                    <h3><strong style="color:#a00a0c"><?= @h($offre->name) ?></strong></h3>
                    <h6 style="color:#000000"><?= $this->Number->format($offre->prix) ?> FCFA / Mois</h6>
                </div>
                <div class="form-group">
                    <?= $this->Form->create($souscription) ?>
                    <?php
                    echo $this->Form->control('client_id', ['options' => $clients, 'empty' =>true, 'type' => 'hidden']);
                    echo $this->Form->control('offre_id', ['options' => $offres, 'empty' =>true, 'type' => 'hidden']);
                    echo $this->Form->control('periode_id', ['options' => $periodes, 'empty' =>true, 'label' => 'Périodicité :']);
                    echo $this->Form->control('montanttotal', ['class' => 'form-control','value' =>'', 'readonly' =>'readonly' ,'label' => 'Montant Total :']);
                    echo $this->Form->control('datedebut', ['empty' =>true, 'class' => 'form-control', 'type' =>'text', 'readonly' =>'readonly', 'label' => 'Date de début :']);
                    echo $this->Form->control('datefin', ['empty' =>true, 'class' => 'form-control', 'type' =>'text', 'readonly' =>'readonly', 'label' => 'Date de fin :']);
                    ?>
                    <?= $this->Form->end() ?>
                </div>
            </div>
        </div>
    </div>
</section>


<?= $this->element('footer'); ?>