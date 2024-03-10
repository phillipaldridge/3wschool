<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CoursesFixture
 */
class CoursesFixture extends TestFixture
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
                'course_type_id' => 1,
                'active' => 1,
                'reference' => 'Lorem ipsum dolor ',
                'name' => 'Lorem ipsum dolor ',
                'unitValue' => 1,
                'created' => '2024-03-10 15:59:18',
                'modified' => '2024-03-10 15:59:18',
            ],
        ];
        parent::init();
    }
}
