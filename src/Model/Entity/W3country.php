<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * W3country Entity
 *
 * @property int $id
 * @property string $name_en
 * @property string $name
 * @property string $code
 * @property bool $is_active
 *
 * @property \App\Model\Entity\W3userAddress[] $w3user_addresses
 */
class W3country extends Entity
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
        'name_en' => true,
        'name' => true,
        'code' => true,
        'is_active' => true,
        'w3user_addresses' => true,
    ];
}
