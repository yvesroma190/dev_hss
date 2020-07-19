<?= $this->element('header'); ?>


<section id="inner-headline">
    <div class="container">
    <div class="row">
        <div class="span4">
        <div class="inner-heading">
            <h2>CONNEXION</h2>
        </div>
        </div>
        <div class="span8">
        <ul class="breadcrumb">
            <li><a href="<?= $this->Url->build(['controller' => 'Offresmarts', 'action' => 'index']); ?>"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
            <!--<li><a href="#">Pages</a><i class="icon-angle-right"></i></li>-->
            <li class="active">Connexion</li>
        </ul>
        </div>
    </div>
    </div>
</section>


<section id="content">
    <div class="container">
    <div class="row">
    <div class="span12">
        <h4><strong>Se connecter</strong></h4>
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
                <?= $this->Form->create() ?>
                    <div class="span12">
                        <?= $this->Form->control('email', ['type'=> 'email', 'name'=> 'email', 'class'=> 'form-group', 'label'=> 'Email:']); ?>
                        
                        <?= $this->Form->control('password', ['type'=> 'password', 'name'=> 'password', 'class'=> 'form-group', 'label'=> 'Mot de passe:']); ?>
                        <?= $this->Form->button(__('Se connecter'), ['type'=> 'submit','class'=> 'btn btn-danger']) ?>
                    </div>
                <?= $this->Form->end() ?>
        </div>
    </div>


    </div>
</section>


<?= $this->element('footer'); ?>

