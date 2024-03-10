<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProgramrunsFixture
 */
class ProgramrunsFixture extends TestFixture
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
                'program_id' => 1,
                'programrun_type_id' => 1,
                'name' => 'Lorem ipsum dolor ',
                'reference' => 'Lorem ipsum dolor ',
                'dateStart' => '2024-03-10',
                'dateEnd' => '2024-03-10',
                'created' => '2024-03-10 16:05:15',
                'modified' => '2024-03-10 16:05:15',
            ],
        ];
        parent::init();
    }
}
