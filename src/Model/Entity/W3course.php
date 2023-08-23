<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * W3course Entity
 *
 * @property int $id
 * @property int $w3course_type_id
 * @property bool $active
 * @property string|null $reference
 * @property string|null $name
 * @property int $unitValue
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\W3courseType $w3course_type
 * @property \App\Model\Entity\W3userTracking[] $w3user_trackings
 * @property \App\Model\Entity\W3class[] $w3classes
 * @property \App\Model\Entity\W3program[] $w3programs
 */
class W3course extends Entity
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
        'w3course_type_id' => true,
        'active' => true,
        'reference' => true,
        'name' => true,
        'unitValue' => true,
        'created' => true,
        'modified' => true,
        'w3course_type' => true,
        'w3user_trackings' => true,
        'w3classes' => true,
        'w3programs' => true,
    ];
}
