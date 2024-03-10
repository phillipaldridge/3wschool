<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * W3coursesFixture
 */
class W3coursesFixture extends TestFixture
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
                'w3course_type_id' => 1,
                'active' => 1,
                'reference' => 'Lorem ipsum dolor ',
                'name' => 'Lorem ip',
                'unitValue' => 1,
                'created' => '2023-09-17 09:23:54',
                'modified' => '2023-09-17 09:23:54',
            ],
        ];
        parent::init();
    }
}
