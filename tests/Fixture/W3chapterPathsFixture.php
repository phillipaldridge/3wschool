<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * W3chapterPathsFixture
 */
class W3chapterPathsFixture extends TestFixture
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
                'w3chapter_id' => 1,
                'w3chapter2_id' => 1,
                'w3chapter_rule_id' => 1,
                'w3chapter_action_id' => 1,
                'score' => 1,
                'created' => '2023-08-19 08:42:14',
                'modified' => '2023-08-19 08:42:14',
            ],
        ];
        parent::init();
    }
}
