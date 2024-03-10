<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ClassroomsFixture
 */
class ClassroomsFixture extends TestFixture
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
                'reference' => 'Lorem ipsum dolor ',
                'name' => 'Lorem ipsum dolor sit amet',
                'classroom_type_id' => 1,
                'active' => 1,
                'position' => 1,
                'created' => '2024-03-10 15:59:39',
                'modified' => '2024-03-10 15:59:39',
            ],
        ];
        parent::init();
    }
}
