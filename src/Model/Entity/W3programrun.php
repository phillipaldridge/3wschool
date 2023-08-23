<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * W3programrun Entity
 *
 * @property int $id
 * @property bool $active
 * @property int $w3program_id
 * @property int $w3programrun_type_id
 * @property string $name
 * @property string $reference
 * @property \Cake\I18n\FrozenDate|null $dateStart
 * @property \Cake\I18n\FrozenDate|null $dateEnd
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\W3program $w3program
 * @property \App\Model\Entity\W3programrunType $w3programrun_type
 * @property \App\Model\Entity\W3userTracking[] $w3user_trackings
 * @property \App\Model\Entity\W3user[] $w3users
 */
class W3programrun extends Entity
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
        'active' => true,
        'w3program_id' => true,
        'w3programrun_type_id' => true,
        'name' => true,
        'reference' => true,
        'dateStart' => true,
        'dateEnd' => true,
        'created' => true,
        'modified' => true,
        'w3program' => true,
        'w3programrun_type' => true,
        'w3user_trackings' => true,
        'w3users' => true,
    ];
}
