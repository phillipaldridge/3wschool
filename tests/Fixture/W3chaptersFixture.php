<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * W3chaptersFixture
 */
class W3chaptersFixture extends TestFixture
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
                'w3lesson_id' => 1,
                'w3chapter_type_id' => 1,
                'w3chapter_access_id' => 1,
                'reference' => 'Lorem ipsum dolor ',
                'name' => 'Lorem ipsum dolor sit amet',
                'active' => 1,
                'position' => 1,
                'access' => 'Lorem ip',
                'unitValue' => 1,
                'passValue' => 1,
                'failValue' => 1,
                'created' => '2023-08-19 09:12:49',
                'modified' => '2023-08-19 09:12:49',
            ],
        ];
        parent::init();
    }
}
