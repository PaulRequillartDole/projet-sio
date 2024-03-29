<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Mark Entity
 *
 * @property int $id
 * @property int $value
 * @property int $label
 * @property int $user_id
 * @property int $module_id
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Module $module
 */
class Mark extends Entity
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
        'value' => true,
        'label' => true,
        'user_id' => true,
        'module_id' => true,
        'user' => true,
        'module' => true
    ];
}
