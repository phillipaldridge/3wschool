<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * W3userProfilesFixture
 */
class W3userProfilesFixture extends TestFixture
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
                'active' => 1,
                'dateStart' => '2023-08-06',
                'dateEnd' => '2023-08-06',
                'created' => '2023-08-06 09:12:31',
                'modified' => '2023-08-06 09:12:31',
            ],
        ];
        parent::init();
    }
}
