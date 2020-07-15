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
        <h4><strong>Créez votre compte</strong></h4>
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
                        <?= $this->Form->control('password', ['type'=> 'password', 'name'=> 'password', 'class'=> 'form-group', 'label'=> 'Mot de passe:']); ?>
                        <?= $this->Form->control('cel', ['type'=> 'text', 'name'=> 'cel', 'class'=> 'form-group', 'label'=> 'N° Cellulaire:']); ?>
                        <?= $this->Form->control('tel', ['type'=> 'text', 'name'=> 'tel', 'class'=> 'form-group', 'label'=> 'N° Téléphone fixe:']); ?>
                        <?= $this->Form->control('email', ['type'=> 'email', 'name'=> 'email', 'class'=> 'form-group', 'label'=> 'Email:']); ?>
                    </div>
                    <div class="span4">
                    
                    <?= $this->Form->control('web', ['type'=> 'text', 'name'=> 'web', 'class'=> 'form-group', 'label'=> 'Site Web:']); ?>
                    <?= $this->Form->control('bp', ['type'=> 'text', 'name'=> 'bp', 'class'=> 'form-group', 'label'=> 'Boîte postale:']); ?>
                    <?= $this->Form->control('adresse', ['type'=> 'text', 'name'=> 'adresse', 'class'=> 'form-group', 'label'=> 'Adresse:']); ?>
                    <?= $this->Form->control('localisation_site', ['type'=> 'textarea', 'name'=> 'localisation_site', 'class'=> 'form-group', 'label'=> 'Localisation du site:']); ?>
                    
                    <?= $this->Form->button(__('Suivant'), ['type'=> 'submit','class'=> 'btn btn-danger']) ?>
                    </div>
                <?= $this->Form->end() ?>

                    <div class='span4'>
                    <?= $this->Html->image('client-infos.jpg') ?>
                    </div>
            
        </div>
    </div>


    </div>
</section>


<?= $this->element('footer'); ?>

