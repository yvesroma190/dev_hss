<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Client Entity
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $pseudo
 * @property string|null $password
 * @property string|null $cel
 * @property string|null $tel
 * @property string|null $email
 * @property string|null $web
 * @property string|null $bp
 * @property string|null $adresse
 * @property string|null $localisation_site
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Commentaire[] $commentaires
 * @property \App\Model\Entity\Souscriptionsmart[] $souscriptionsmarts
 * @property \App\Model\Entity\Souscriptiontele[] $souscriptionteles
 */
class Client extends Entity
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
        'name' => true,
        'pseudo' => true,
        'password' => true,
        'cel' => true,
        'tel' => true,
        'email' => true,
        'web' => true,
        'bp' => true,
        'adresse' => true,
        'localisation_site' => true,
        'created' => true,
        'modified' => true,
        'commentaires' => true,
        'souscriptionsmarts' => true,
        'souscriptionteles' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password',
    ];
}
