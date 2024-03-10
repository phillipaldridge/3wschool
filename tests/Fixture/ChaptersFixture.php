<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ChaptersFixture
 */
class ChaptersFixture extends TestFixture
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
                'lesson_id' => 1,
                'chapter_type_id' => 1,
                'chapter_access_id' => 1,
                'reference' => 'Lorem ipsum dolor ',
                'name' => 'Lorem ipsum dolor sit amet',
                'active' => 1,
                'position' => 1,
                'unitValue' => 1,
                'passValue' => 1,
                'failValue' => 1,
                'created' => '2024-03-10 15:59:53',
                'modified' => '2024-03-10 15:59:53',
            ],
        ];
        parent::init();
    }
}
