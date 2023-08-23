<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * W3chapterContent Entity
 *
 * @property int $id
 * @property int $w3chapter_id
 * @property bool $active
 * @property string|null $name
 * @property string $content
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\W3chapter $w3chapter
 */
class W3chapterContent extends Entity
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
        'active' => true,
        'name' => true,
        'content' => true,
        'created' => true,
        'modified' => true,
        'w3chapter' => true,
    ];
}
