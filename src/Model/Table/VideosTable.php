<?php
namespace App\Model\Table;

use App\Model\Entity\Video;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Videos Model
 *
 */
class VideosTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('videos');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
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
            ->requirePresence('titulo', 'create')
            ->notEmpty('titulo');
            
        $validator
            ->requirePresence('url', 'create')
            ->notEmpty('url');
            
        $validator
            ->requirePresence('inicio', 'create')
            ->notEmpty('inicio');

        $validator
            ->requirePresence('fim', 'create')
            ->notEmpty('fim');

        $validator
            #->add('dia', 'valid', ['rule' => 'numeric'])
            ->requirePresence('dia', 'create')
            ->notEmpty('dia');
            
        $validator
            #->add('mes', 'valid', ['rule' => 'numeric'])
            ->requirePresence('mes', 'create')
            ->notEmpty('mes');

        return $validator;
    }
}
