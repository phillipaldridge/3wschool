<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * W3programrunsFixture
 */
class W3programrunsFixture extends TestFixture
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
                'w3program_id' => 1,
                'w3programrun_type_id' => 1,
                'name' => 'Lorem ipsum dolor ',
                'reference' => 'Lorem ipsum dolor ',
                'dateStart' => '2023-08-06',
                'dateEnd' => '2023-08-06',
                'created' => '2023-08-06 09:21:31',
                'modified' => '2023-08-06 09:21:31',
            ],
        ];
        parent::init();
    }
}
