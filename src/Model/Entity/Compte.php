<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Compte Entity
 *
 * @property int $id
 * @property string|null $login
 * @property string|null $password
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property string|null $client_id
 *
 * @property \App\Model\Entity\Client $client
 */
class Compte extends Entity
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
        'login' => true,
        'password' => true,
        'created' => true,
        'modified' => true,
        'client_id' => true,
        'client' => true,
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
