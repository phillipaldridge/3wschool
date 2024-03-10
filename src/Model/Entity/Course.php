<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Course Entity
 *
 * @property int $id
 * @property int $course_type_id
 * @property bool $active
 * @property string|null $reference
 * @property string|null $name
 * @property int $unitValue
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\CourseType $course_type
 * @property \App\Model\Entity\UserTracking[] $user_trackings
 * @property \App\Model\Entity\Class[] $classes
 * @property \App\Model\Entity\Program[] $programs
 */
class Course extends Entity
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
        'course_type_id' => true,
        'active' => true,
        'reference' => true,
        'name' => true,
        'unitValue' => true,
        'created' => true,
        'modified' => true,
        'course_type' => true,
        'user_trackings' => true,
        'classes' => true,
        'programs' => true,
    ];
}
