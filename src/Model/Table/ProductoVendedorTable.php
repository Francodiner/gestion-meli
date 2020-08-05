<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ProductoVendedor Model
 *
 * @method \App\Model\Entity\ProductoVendedor get($primaryKey, $options = [])
 * @method \App\Model\Entity\ProductoVendedor newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ProductoVendedor[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ProductoVendedor|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProductoVendedor saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProductoVendedor patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ProductoVendedor[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ProductoVendedor findOrCreate($search, callable $callback = null, $options = [])
 */
class ProductoVendedorTable extends Table
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

        $this->setTable('producto_vendedor');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Vendedor', [
            'foreignKey' => 'vendedor_id'
        ]);
        $this->belongsTo('Producto', [
            'foreignKey' => 'producto_id'
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
            ->integer('producto_id')
            ->notEmptyString('producto_id');

        $validator
            ->integer('vendedor_id')
            ->notEmptyString('vendedor_id');

        return $validator;
    }
}
