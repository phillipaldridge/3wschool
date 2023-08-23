<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * W3userProfile Entity
 *
 * @property int $id
 * @property int $w3user_id
 * @property bool $active
 * @property \Cake\I18n\FrozenDate|null $dateStart
 * @property \Cake\I18n\FrozenDate|null $dateEnd
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\W3user $w3user
 */
class W3userProfile extends Entity
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
        'w3user_id' => true,
        'active' => true,
        'dateStart' => true,
        'dateEnd' => true,
        'created' => true,
        'modified' => true,
        'w3user' => true,
    ];
}
