<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Programrun Entity
 *
 * @property int $id
 * @property bool $active
 * @property int $program_id
 * @property int $programrun_type_id
 * @property string $name
 * @property string $reference
 * @property \Cake\I18n\FrozenDate|null $dateStart
 * @property \Cake\I18n\FrozenDate|null $dateEnd
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Program $program
 * @property \App\Model\Entity\ProgramrunType $programrun_type
 * @property \App\Model\Entity\UserTracking[] $user_trackings
 * @property \App\Model\Entity\User[] $users
 */
class Programrun extends Entity
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
        'program_id' => true,
        'programrun_type_id' => true,
        'name' => true,
        'reference' => true,
        'dateStart' => true,
        'dateEnd' => true,
        'created' => true,
        'modified' => true,
        'program' => true,
        'programrun_type' => true,
        'user_trackings' => true,
        'users' => true,
    ];
}
