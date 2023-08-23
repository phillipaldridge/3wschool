<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * W3program Entity
 *
 * @property int $id
 * @property bool $active
 * @property int $w3program_type_id
 * @property string|null $reference
 * @property string|null $name
 * @property int|null $total_units_needed
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\W3programType $w3program_type
 * @property \App\Model\Entity\W3programrun[] $w3programruns
 * @property \App\Model\Entity\W3userTracking[] $w3user_trackings
 * @property \App\Model\Entity\W3course[] $w3courses
 */
class W3program extends Entity
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
        'active' => true,
        'w3program_type_id' => true,
        'reference' => true,
        'name' => true,
        'total_units_needed' => true,
        'created' => true,
        'modified' => true,
        'w3program_type' => true,
        'w3programruns' => true,
        'w3user_trackings' => true,
        'w3courses' => true,
    ];
}
