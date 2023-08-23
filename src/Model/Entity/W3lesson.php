<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * W3lesson Entity
 *
 * @property int $id
 * @property int $w3lesson_type_id
 * @property bool $active
 * @property int|null $position
 * @property string|null $access
 * @property string|null $reference
 * @property string|null $name
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\W3lessonType $w3lesson_type
 * @property \App\Model\Entity\W3chapter[] $w3chapters
 * @property \App\Model\Entity\W3userTracking[] $w3user_trackings
 * @property \App\Model\Entity\W3class[] $w3classes
 */
class W3lesson extends Entity
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
        'w3lesson_type_id' => true,
        'active' => true,
        'position' => true,
        'access' => true,
        'reference' => true,
        'name' => true,
        'created' => true,
        'modified' => true,
        'w3lesson_type' => true,
        'w3chapters' => true,
        'w3user_trackings' => true,
        'w3classes' => true,
    ];
}
