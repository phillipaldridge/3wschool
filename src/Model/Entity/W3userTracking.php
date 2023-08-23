<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * W3userTracking Entity
 *
 * @property int $id
 * @property int $w3programrun_id
 * @property int $w3program_id
 * @property int $w3course_id
 * @property int $w3class_id
 * @property int $w3lesson_id
 * @property int $w3chapter_id
 * @property int $w3user_id
 * @property int $score
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\W3programrun $w3programrun
 * @property \App\Model\Entity\W3program $w3program
 * @property \App\Model\Entity\W3course $w3course
 * @property \App\Model\Entity\W3class $w3class
 * @property \App\Model\Entity\W3lesson $w3lesson
 * @property \App\Model\Entity\W3chapter $w3chapter
 * @property \App\Model\Entity\W3user $w3user
 */
class W3userTracking extends Entity
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
        'w3programrun_id' => true,
        'w3program_id' => true,
        'w3course_id' => true,
        'w3class_id' => true,
        'w3lesson_id' => true,
        'w3chapter_id' => true,
        'w3user_id' => true,
        'score' => true,
        'created' => true,
        'modified' => true,
        'w3programrun' => true,
        'w3program' => true,
        'w3course' => true,
        'w3class' => true,
        'w3lesson' => true,
        'w3chapter' => true,
        'w3user' => true,
    ];
}
