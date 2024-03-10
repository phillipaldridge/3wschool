<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ChapterPath Entity
 *
 * @property int $id
 * @property int $chapter_id
 * @property int $chapter_target_id
 * @property int|null $chapter_rule_id
 * @property int|null $chapter_action_id
 * @property int $score
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Chapter $chapter
 * @property \App\Model\Entity\ChapterRule $chapter_rule
 * @property \App\Model\Entity\ChapterAction $chapter_action
 */
class ChapterPath extends Entity
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
        'chapter_id' => true,
        'chapter_target_id' => true,
        'chapter_rule_id' => true,
        'chapter_action_id' => true,
        'score' => true,
        'created' => true,
        'modified' => true,
        'chapter' => true,
        'chapter_rule' => true,
        'chapter_action' => true,
    ];
}
