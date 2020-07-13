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
            
                <?= $this->Form->create($compte, ['class'=> '']) ?>
                    <div class="span7">
                        <?= $this->Form->control('login', ['type'=> 'text', 'name'=> 'login', 'class'=> 'form-group', 'label'=> 'Nom d\'utilisateur:']); ?>
                        <?= $this->Form->control('password', ['type'=> 'password', 'name'=> 'password', 'class'=> 'form-group', 'label'=> 'Mot de passe:']); ?>
                        <?= $this->Form->control('client_id', ['options' => $clients, 'empty' => true, 'type' => 'hidden']); ?>

                    <?= $this->Form->button(__('Suivant'), ['type'=> 'submit','class'=> 'btn btn-danger']) ?>
                    </div>
                <?= $this->Form->end() ?>

                    <div class='span5'>
                    <?= $this->Html->image('client-infos.jpg') ?>
                    </div>
            
        </div>
    </div>


    </div>
</section>


<?= $this->element('footer'); ?>

