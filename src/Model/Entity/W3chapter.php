<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * W3chapter Entity
 *
 * @property int $id
 * @property int $w3lesson_id
 * @property int $w3chapter_type_id
 * @property int|null $w3chapter_access_id
 * @property string|null $reference
 * @property string|null $name
 * @property bool $active
 * @property int $position
 * @property string|null $access
 * @property int $unitValue
 * @property int|null $passValue
 * @property int|null $failValue
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\W3lesson $w3lesson
 * @property \App\Model\Entity\W3chapterType $w3chapter_type
 * @property \App\Model\Entity\W3chapterAccess $w3chapter_access
 * @property \App\Model\Entity\W3chapterContent $w3chapter_content
 * @property \App\Model\Entity\W3chapterPath[] $w3chapter_paths
 * @property \App\Model\Entity\W3userTracking[] $w3user_trackings
 */
class W3chapter extends Entity
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
        'w3lesson_id' => true,
        'w3chapter_type_id' => true,
        'w3chapter_access_id' => true,
        'reference' => true,
        'name' => true,
        'active' => true,
        'position' => true,
        'access' => true,
        'unitValue' => true,
        'passValue' => true,
        'failValue' => true,
        'created' => true,
        'modified' => true,
        'w3lesson' => true,
        'w3chapter_type' => true,
        'w3chapter_access' => true,
        'w3chapter_content' => true,
        'w3chapter_paths' => true,
        'w3user_trackings' => true,
    ];
}
