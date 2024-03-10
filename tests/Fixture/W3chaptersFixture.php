<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * W3ChaptersFixture
 */
class W3ChaptersFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'w3chapters';
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
                'unitValue' => 1,
                'passValue' => 1,
                'failValue' => 1,
                'created' => '2024-03-10 10:14:18',
                'modified' => '2024-03-10 10:14:18',
            ],
        ];
        parent::init();
    }
}
