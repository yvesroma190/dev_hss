<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Paiement Entity
 *
 * @property int $id
 * @property string $refpay
 * @property string $session
 * @property string $payid
 * @property string|null $client_id
 * @property string|null $souscription_id
 * @property string|null $offre_id
 * @property float $montant
 * @property string $tel
 * @property string $description
 * @property string $modepaid
 * @property \Cake\I18n\FrozenTime $datepay
 * @property \Cake\I18n\FrozenTime|null $datefin
 * @property \Cake\I18n\FrozenTime $timepay
 * @property string $canal
 * @property string|null $etatpaiement_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Client $client
 * @property \App\Model\Entity\Souscription $souscription
 * @property \App\Model\Entity\Offre $offre
 * @property \App\Model\Entity\Etatpaiement $etatpaiement
 */
class Paiement extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'refpay' => true,
        'session' => true,
        'payid' => true,
        'client_id' => true,
        'souscription_id' => true,
        'offre_id' => true,
        'montant' => true,
        'tel' => true,
        'description' => true,
        'modepaid' => true,
        'datepay' => true,
        'datefin' => true,
        'timepay' => true,
        'canal' => true,
        'etatpaiement_id' => true,
        'created' => true,
        'modified' => true,
        'client' => true,
        'souscription' => true,
        'offre' => true,
        'etatpaiement' => true,
    ];
}
