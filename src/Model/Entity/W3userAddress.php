<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * W3userAddress Entity
 *
 * @property int $id
 * @property int $w3user_id
 * @property bool $prefered
 * @property string $num
 * @property string $street1
 * @property string|null $street2
 * @property string $city
 * @property int $w3country_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\W3user $w3user
 * @property \App\Model\Entity\W3country $w3country
 */
class W3userAddress extends Entity
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
        'prefered' => true,
        'num' => true,
        'street1' => true,
        'street2' => true,
        'city' => true,
        'w3country_id' => true,
        'created' => true,
        'modified' => true,
        'w3user' => true,
        'w3country' => true,
    ];
}
