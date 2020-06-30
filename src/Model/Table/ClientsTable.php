<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Clients Model
 *
 * @property \App\Model\Table\CommentairesTable&\Cake\ORM\Association\HasMany $Commentaires
 * @property \App\Model\Table\ComptesTable&\Cake\ORM\Association\HasMany $Comptes
 * @property \App\Model\Table\SouscriptionsmartsTable&\Cake\ORM\Association\HasMany $Souscriptionsmarts
 * @property \App\Model\Table\SouscriptiontelesTable&\Cake\ORM\Association\HasMany $Souscriptionteles
 *
 * @method \App\Model\Entity\Client get($primaryKey, $options = [])
 * @method \App\Model\Entity\Client newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Client[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Client|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Client saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Client patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Client[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Client findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ClientsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('clients');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Commentaires', [
            'foreignKey' => 'client_id',
        ]);
        $this->hasMany('Comptes', [
            'foreignKey' => 'client_id',
        ]);
        $this->hasMany('Souscriptionsmarts', [
            'foreignKey' => 'client_id',
        ]);
        $this->hasMany('Souscriptionteles', [
            'foreignKey' => 'client_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->nonNegativeInteger('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->allowEmptyString('name');

        $validator
            ->scalar('cel')
            ->maxLength('cel', 45)
            ->allowEmptyString('cel');

        $validator
            ->scalar('tel')
            ->maxLength('tel', 45)
            ->allowEmptyString('tel');

        $validator
            ->email('email')
            ->allowEmptyString('email');

        $validator
            ->scalar('web')
            ->maxLength('web', 45)
            ->allowEmptyString('web');

        $validator
            ->scalar('bp')
            ->maxLength('bp', 45)
            ->allowEmptyString('bp');

        $validator
            ->scalar('adresse')
            ->maxLength('adresse', 45)
            ->allowEmptyString('adresse');

        $validator
            ->scalar('localisation_site')
            ->maxLength('localisation_site', 4294967295)
            ->allowEmptyString('localisation_site');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['email']));

        return $rules;
    }
}
