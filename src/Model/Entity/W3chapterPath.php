<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * W3chapterPath Entity
 *
 * @property int $id
 * @property int $w3chapter_id
 * @property int $w3chapter2_id
 * @property int|null $w3chapter_rule_id
 * @property int|null $w3chapter_action_id
 * @property int $score
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\W3chapter $w3chapter
 * @property \App\Model\Entity\W3chapterRule $w3chapter_rule
 * @property \App\Model\Entity\W3chapterAction $w3chapter_action
 */
class W3chapterPath extends Entity
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
        'w3chapter_id' => true,
        'w3chapter2_id' => true,
        'w3chapter_rule_id' => true,
        'w3chapter_action_id' => true,
        'score' => true,
        'created' => true,
        'modified' => true,
        'w3chapter' => true,
        'w3chapter_rule' => true,
        'w3chapter_action' => true,
    ];
}
