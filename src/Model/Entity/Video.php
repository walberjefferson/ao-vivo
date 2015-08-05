<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Video Entity.
 */
class Video extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'titulo' => true,
        'url' => true,
        'inicio' => true,
        'fim' => true,
        'dia' => true,
        'mes' => true,
    ];
}
