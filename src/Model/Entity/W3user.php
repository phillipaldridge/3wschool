<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * W3user Entity
 *
 * @property int $id
 * @property bool $active
 * @property int $level
 * @property string $name
 * @property string $password
 * @property string $email
 * @property int $revisioncount
 * @property int $changescount
 * @property \Cake\I18n\FrozenTime $signuptime
 * @property \Cake\I18n\FrozenTime $lastpassword
 * @property \Cake\I18n\FrozenTime $lastlogin
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\W3userProfile $w3user_profile
 * @property \App\Model\Entity\W3userAddress[] $w3user_addresses
 * @property \App\Model\Entity\W3userTracking[] $w3user_trackings
 * @property \App\Model\Entity\W3programrun[] $w3programruns
 */
class W3user extends Entity
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
        'level' => true,
        'name' => true,
        'password' => true,
        'email' => true,
        'revisioncount' => true,
        'changescount' => true,
        'signuptime' => true,
        'lastpassword' => true,
        'lastlogin' => true,
        'created' => true,
        'modified' => true,
        'w3user_profile' => true,
        'w3user_addresses' => true,
        'w3user_trackings' => true,
        'w3programruns' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array<string>
     */
    protected $_hidden = [
        'password',
    ];
}
