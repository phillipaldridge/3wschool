<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * W3userAddressesFixture
 */
class W3userAddressesFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'w3user_id' => 1,
                'prefered' => 1,
                'num' => 'Lorem ip',
                'street1' => 'Lorem ipsum dolor sit amet',
                'street2' => 'Lorem ipsum dolor sit amet',
                'city' => 'Lorem ipsum dolor ',
                'w3country_id' => 1,
                'created' => '2023-08-20 13:09:48',
                'modified' => '2023-08-20 13:09:48',
            ],
        ];
        parent::init();
    }
}
