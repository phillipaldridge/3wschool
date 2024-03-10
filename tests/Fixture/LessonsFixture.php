<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * LessonsFixture
 */
class LessonsFixture extends TestFixture
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
                'lesson_type_id' => 1,
                'active' => 1,
                'position' => 1,
                'access' => 'Lorem ip',
                'reference' => 'Lorem ipsum dolor ',
                'name' => 'Lorem ipsum dolor sit amet',
                'created' => '2024-03-10 15:59:47',
                'modified' => '2024-03-10 15:59:47',
            ],
        ];
        parent::init();
    }
}
