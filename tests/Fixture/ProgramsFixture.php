<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProgramsFixture
 */
class ProgramsFixture extends TestFixture
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
                'program_type_id' => 1,
                'reference' => 'Lorem ipsum dolor ',
                'name' => 'Lorem ipsum dolor sit amet',
                'total_units_needed' => 1,
                'created' => '2024-03-10 15:55:56',
                'modified' => '2024-03-10 15:55:56',
            ],
        ];
        parent::init();
    }
}
