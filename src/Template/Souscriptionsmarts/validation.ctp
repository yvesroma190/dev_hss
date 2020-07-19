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
            <div class='span4'>
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

            <div><h6>OFFRE SMART PROTECTION</h6></div>
                <div class="pricing-box-alt">
            
                    <div class="pricing-heading">
                        <h3><strong><?= @h($offresmart->name) ?></strong></h3>
                    </div>
                <div class="pricing-terms">
                    <h6> <?= @h($offresmart->prix) ?> FCFA / Mois</h6>
                </div>
            </div>
        </div>
    </div>


    </div>
</section>


<?= $this->element('footer'); ?>

