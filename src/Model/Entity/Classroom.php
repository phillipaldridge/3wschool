<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Classroom Entity
 *
 * @property int $id
 * @property string|null $reference
 * @property string|null $name
 * @property int $classroom_type_id
 * @property bool $active
 * @property int $position
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\ClassroomType $classroom_type
 * @property \App\Model\Entity\Course[] $courses
 * @property \App\Model\Entity\Lesson[] $lessons
 */
class Classroom extends Entity
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
        'classroom_type_id' => true,
        'active' => true,
        'position' => true,
        'created' => true,
        'modified' => true,
        'classroom_type' => true,
        'courses' => true,
        'lessons' => true,
    ];
}
