<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * W3usersFixture
 */
class W3usersFixture extends TestFixture
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
                'signuptime' => '2024-03-03 11:16:01',
                'lastpassword' => '2024-03-03 11:16:01',
                'lastlogin' => '2024-03-03 11:16:01',
                'created' => '2024-03-03 11:16:01',
                'modified' => '2024-03-03 11:16:01',
            ],
        ];
        parent::init();
    }
}
