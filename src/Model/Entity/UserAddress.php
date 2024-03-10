<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * UserAddress Entity
 *
 * @property int $id
 * @property int $user_id
 * @property bool $prefered
 * @property string $num
 * @property string $street1
 * @property string|null $street2
 * @property string $city
 * @property string $postcode
 * @property int $country_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Country $country
 */
class UserAddress extends Entity
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
        'user_id' => true,
        'prefered' => true,
        'num' => true,
        'street1' => true,
        'street2' => true,
        'city' => true,
        'postcode' => true,
        'country_id' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
        'country' => true,
    ];
}
