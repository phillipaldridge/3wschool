<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ClassesFixture
 */
class ClassesFixture extends TestFixture
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
                'class_type_id' => 1,
                'active' => 1,
                'position' => 1,
                'created' => '2024-03-10 12:57:03',
                'modified' => '2024-03-10 12:57:03',
            ],
        ];
        parent::init();
    }
}
