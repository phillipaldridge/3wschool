<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Lesson Entity
 *
 * @property int $id
 * @property int $lesson_type_id
 * @property bool $active
 * @property int|null $position
 * @property string|null $access
 * @property string|null $reference
 * @property string|null $name
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\LessonType $lesson_type
 * @property \App\Model\Entity\Chapter[] $chapters
 * @property \App\Model\Entity\UserTracking[] $user_trackings
 * @property \App\Model\Entity\Classroom[] $classrooms
 */
class Lesson extends Entity
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
        'lesson_type_id' => true,
        'active' => true,
        'position' => true,
        'access' => true,
        'reference' => true,
        'name' => true,
        'created' => true,
        'modified' => true,
        'lesson_type' => true,
        'chapters' => true,
        'user_trackings' => true,
        'classrooms' => true,
    ];
}
