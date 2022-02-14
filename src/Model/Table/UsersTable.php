<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @method \App\Model\Entity\User newEmptyEntity()
 * @method \App\Model\Entity\User newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\User|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UsersTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('users');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 50, 'O nome do usuário pode ter no maximo 50 caracteres')
            ->requirePresence('name', 'create')
            ->notEmptyString('name', 'O nome do usuário precisa ser preenchido');

        $validator
            ->scalar('username')
            ->maxLength('username', 50, 'O Nome de Login pode ter no maximo 50 caracteres')
            ->requirePresence('username', 'create')
            ->notEmptyString('username', 'O Nome de Login precisa ser preenchido');

        $validator
            ->email('email', false,'O e-mail não está no formato válido. Exemplo: seu@email.com')
            ->requirePresence('email', 'create', )
            ->notEmptyString('email', 'O e-mail precisa ser preenchido');

        $validator
            ->scalar('password')
            ->regex('password', '/^(?=.*[a-zA-Z])(?=.*[0-9])/', 'A senha precisa conter pelo menos 1 número e 1 letra')
            ->maxLength('password', 255)
            ->minLength('password', 8, 'A senha precisa ter no mínimo 8 caracteres')
            ->requirePresence('password', 'create')
            ->notEmptyString('password', 'A senha precisa ser preenchida');

        $validator
            ->scalar('zipcode')
            ->maxLength('zipcode', 8, 'O CEP pode ter no maximo 8 caracteres')
            ->requirePresence('zipcode', 'create')
            ->notEmptyString('zipcode', 'O CEP precisa ser preenchido');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->isUnique(['username']), ['errorField' => 'username']);
        $rules->add($rules->isUnique(['email']), ['errorField' => 'email']);

        return $rules;
    }
}
