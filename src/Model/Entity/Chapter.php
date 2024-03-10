<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Chapter Entity
 *
 * @property int $id
 * @property int $lesson_id
 * @property int $chapter_type_id
 * @property int|null $chapter_access_id
 * @property string|null $reference
 * @property string|null $name
 * @property bool $active
 * @property int $position
 * @property int $unitValue
 * @property int|null $passValue
 * @property int|null $failValue
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Lesson $lesson
 * @property \App\Model\Entity\ChapterType $chapter_type
 * @property \App\Model\Entity\ChapterAccess $chapter_access
 * @property \App\Model\Entity\ChapterContent[] $chapter_contents
 * @property \App\Model\Entity\ChapterPath[] $chapter_paths
 * @property \App\Model\Entity\UserTracking[] $user_trackings
 */
class Chapter extends Entity
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
        'lesson_id' => true,
        'chapter_type_id' => true,
        'chapter_access_id' => true,
        'reference' => true,
        'name' => true,
        'active' => true,
        'position' => true,
        'unitValue' => true,
        'passValue' => true,
        'failValue' => true,
        'created' => true,
        'modified' => true,
        'lesson' => true,
        'chapter_type' => true,
        'chapter_access' => true,
        'chapter_contents' => true,
        'chapter_paths' => true,
        'user_trackings' => true,
    ];
}
