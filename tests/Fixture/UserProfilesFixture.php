<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UserProfilesFixture
 */
class UserProfilesFixture extends TestFixture
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
                'active' => 1,
                'dateStart' => '2024-03-10',
                'dateEnd' => '2024-03-10',
                'created' => '2024-03-10 15:55:15',
                'modified' => '2024-03-10 15:55:15',
            ],
        ];
        parent::init();
    }
}
