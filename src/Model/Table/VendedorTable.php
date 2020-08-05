<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Vendedor Model
 *
 * @property \App\Model\Table\SiteTable&\Cake\ORM\Association\BelongsTo $Site
 * @property \App\Model\Table\ProductoTable&\Cake\ORM\Association\BelongsToMany $Producto
 *
 * @method \App\Model\Entity\Vendedor get($primaryKey, $options = [])
 * @method \App\Model\Entity\Vendedor newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Vendedor[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Vendedor|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Vendedor saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Vendedor patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Vendedor[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Vendedor findOrCreate($search, callable $callback = null, $options = [])
 */
class VendedorTable extends Table
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

        $this->setTable('vendedor');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Site', [
            'foreignKey' => 'site_id'
        ]);
        $this->belongsToMany('Producto', [
            'foreignKey' => 'vendedor_id',
            'targetForeignKey' => 'producto_id',
            'joinTable' => 'producto_vendedor'
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
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('nombre')
            ->maxLength('nombre', 50)
            ->allowEmptyString('nombre');

        $validator
            ->scalar('apellido')
            ->maxLength('apellido', 50)
            ->allowEmptyString('apellido');

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
        $rules->add($rules->existsIn(['site_id'], 'Site'));

        return $rules;
    }
}
