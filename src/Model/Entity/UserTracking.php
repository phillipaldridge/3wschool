<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * UserTracking Entity
 *
 * @property int $id
 * @property int $programrun_id
 * @property int $program_id
 * @property int $course_id
 * @property int $class_id
 * @property int $lesson_id
 * @property int $chapter_id
 * @property int $user_id
 * @property int $score
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Programrun $programrun
 * @property \App\Model\Entity\Program $program
 * @property \App\Model\Entity\Course $course
 * @property \App\Model\Entity\Lesson $lesson
 * @property \App\Model\Entity\Chapter $chapter
 * @property \App\Model\Entity\User $user
 */
class UserTracking extends Entity
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
        'programrun_id' => true,
        'program_id' => true,
        'course_id' => true,
        'class_id' => true,
        'lesson_id' => true,
        'chapter_id' => true,
        'user_id' => true,
        'score' => true,
        'created' => true,
        'modified' => true,
        'programrun' => true,
        'program' => true,
        'course' => true,
        'lesson' => true,
        'chapter' => true,
        'user' => true,
    ];
}
