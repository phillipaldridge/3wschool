<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UserAddressesFixture
 */
class UserAddressesFixture extends TestFixture
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
                'user_id' => 1,
                'prefered' => 1,
                'num' => 'Lorem ip',
                'street1' => 'Lorem ipsum dolor sit amet',
                'street2' => 'Lorem ipsum dolor sit amet',
                'city' => 'Lorem ipsum dolor ',
                'postcode' => 'Lorem ip',
                'country_id' => 1,
                'created' => '2024-03-10 16:21:34',
                'modified' => '2024-03-10 16:21:34',
            ],
        ];
        parent::init();
    }
}
