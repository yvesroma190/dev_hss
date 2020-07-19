<?= $this->element('header'); ?>


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
            <li><a href="<?= $this->Url->build(['controller' => 'Offresmarts', 'action' => 'index']); ?>"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
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
        <h4><strong>Enrégistrer votre compte</strong></h4>
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


    <div class="container">
        <div class="row">
            
                <?= $this->Form->create($client, ['class'=> '']) ?>
                    <div class="span4">
                        <?= $this->Form->control('name', ['type'=> 'text', 'name'=> 'name', 'class'=> 'form-group', 'label'=> 'Nom et prénoms:']); ?>
                        <?= $this->Form->control('pseudo', ['type'=> 'text', 'name'=> 'pseudo', 'class'=> 'form-group', 'label'=> 'Pseudo:']); ?>
                        <?= $this->Form->control('email', ['type'=> 'email', 'name'=> 'email', 'class'=> 'form-group', 'label'=> 'Email:']); ?>
                        <?= $this->Form->control('password', ['type'=> 'password', 'name'=> 'password', 'class'=> 'form-group', 'label'=> 'Mot de passe:']); ?>
                        <?= $this->Form->control('cel', ['type'=> 'text', 'name'=> 'cel', 'class'=> 'form-group', 'label'=> 'N° Cellulaire:']); ?>
                        <?= $this->Form->control('tel', ['type'=> 'text', 'name'=> 'tel', 'class'=> 'form-group', 'label'=> 'N° Téléphone fixe:']); ?>
                    </div>
                    <div class="span4">
                    
                    <?= $this->Form->control('web', ['type'=> 'text', 'name'=> 'web', 'class'=> 'form-group', 'label'=> 'Site Web:']); ?>
                    <?= $this->Form->control('bp', ['type'=> 'text', 'name'=> 'bp', 'class'=> 'form-group', 'label'=> 'Boîte postale:']); ?>
                    <?= $this->Form->control('adresse', ['type'=> 'text', 'name'=> 'adresse', 'class'=> 'form-group', 'label'=> 'Adresse:']); ?>
                    <?= $this->Form->control('localisation_site', ['type'=> 'textarea', 'name'=> 'localisation_site', 'class'=> 'form-group', 'label'=> 'Localisation du site:']); ?>

                    <?= $this->Form->button(__('Valider'), ['type'=> 'submit','class'=> 'btn btn-danger']) ?>
                    </div>
                <?= $this->Form->end() ?>

                    <div class='span4'>
                        <div><h6>OFFRE SMART PROTECTION</h6></div>
                        <div class="pricing-box-alt">
                        
                            <div class="pricing-heading">
                                <h3><strong><?= @h($offresmart->name) ?></strong></h3>
                            </div>
                            <div class="pricing-terms">
                                <h6> <?= @h($offresmart->prix) ?> FCFA / Mois</h6>
                            </div>
                            <!--<div class="pricing-action">
                                <a href="<?= $this->Url->build(['controller' => 'Souscriptionsmarts', 'action' => 'souscrire', $offresmart->id]); ?>" class="btn btn-medium btn-theme"><i class="icon-bolt"></i>Souscrire</a>
                                <?= $this->Form->button(__('Valider'), ['type'=> 'submit','class'=> 'btn btn-danger']) ?>
                            </div>-->
                        </div>
                    </div>
        </div>
    </div>


    </div>
</section>


<?= $this->element('footer'); ?>

