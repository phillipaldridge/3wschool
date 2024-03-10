<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Program Entity
 *
 * @property int $id
 * @property bool $active
 * @property int $program_type_id
 * @property string|null $reference
 * @property string|null $name
 * @property int|null $total_units_needed
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\ProgramType $program_type
 * @property \App\Model\Entity\Programrun[] $programruns
 * @property \App\Model\Entity\UserTracking[] $user_trackings
 * @property \App\Model\Entity\Course[] $courses
 */
class Program extends Entity
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
        'program_type_id' => true,
        'reference' => true,
        'name' => true,
        'total_units_needed' => true,
        'created' => true,
        'modified' => true,
        'program_type' => true,
        'programruns' => true,
        'user_trackings' => true,
        'courses' => true,
    ];
}
