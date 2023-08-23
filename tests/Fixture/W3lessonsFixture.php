<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * W3lessonsFixture
 */
class W3lessonsFixture extends TestFixture
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
                'w3lesson_type_id' => 1,
                'active' => 1,
                'position' => 1,
                'access' => 'Lorem ip',
                'reference' => 'Lorem ipsum dolor ',
                'name' => 'Lorem ipsum dolor sit amet',
                'created' => '2023-08-06 09:55:35',
                'modified' => '2023-08-06 09:55:35',
            ],
        ];
        parent::init();
    }
}
