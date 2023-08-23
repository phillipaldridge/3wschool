<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * W3class Entity
 *
 * @property int $id
 * @property string|null $reference
 * @property string|null $name
 * @property int $w3class_type_id
 * @property bool $active
 * @property int $position
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\W3classType $w3class_type
 * @property \App\Model\Entity\W3lesson[] $w3lessons
 * @property \App\Model\Entity\W3userTracking[] $w3user_trackings
 * @property \App\Model\Entity\W3course[] $w3courses
 */
class W3class extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'reference' => true,
        'name' => true,
        'w3class_type_id' => true,
        'active' => true,
        'position' => true,
        'created' => true,
        'modified' => true,
        'w3class_type' => true,
        'w3lessons' => true,
        'w3user_trackings' => true,
        'w3courses' => true,
    ];
}
