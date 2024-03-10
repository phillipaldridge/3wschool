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
                'dateStart' => '2024-03-03',
                'dateEnd' => '2024-03-03',
                'created' => '2024-03-03 11:15:51',
                'modified' => '2024-03-03 11:15:51',
            ],
        ];
        parent::init();
    }
}
