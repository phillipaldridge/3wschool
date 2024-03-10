<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * W3programsFixture
 */
class W3programsFixture extends TestFixture
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
                'w3program_type_id' => 1,
                'reference' => 'Lorem ipsum dolor ',
                'name' => 'Lorem ipsum dolor sit amet',
                'total_units_needed' => 1,
                'created' => '2023-09-17 09:22:48',
                'modified' => '2023-09-17 09:22:48',
            ],
        ];
        parent::init();
    }
}
