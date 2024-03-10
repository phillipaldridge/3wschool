<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsersFixture
 */
class UsersFixture extends TestFixture
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
                'active' => 1,
                'level' => 1,
                'name' => 'Lorem ipsum dolor sit amet',
                'password' => 'Lorem ipsum dolor sit amet',
                'email' => 'Lorem ipsum dolor sit amet',
                'revisioncount' => 1,
                'changescount' => 1,
                'signuptime' => '2024-03-10 12:56:05',
                'lastpassword' => '2024-03-10 12:56:05',
                'lastlogin' => '2024-03-10 12:56:05',
                'created' => '2024-03-10 12:56:05',
                'modified' => '2024-03-10 12:56:05',
            ],
        ];
        parent::init();
    }
}
