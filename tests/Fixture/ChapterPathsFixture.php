<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ChapterPathsFixture
 */
class ChapterPathsFixture extends TestFixture
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
                'chapter_id' => 1,
                'chapter_target_id' => 1,
                'chapter_rule_id' => 1,
                'chapter_action_id' => 1,
                'score' => 1,
                'created' => '2024-03-10 16:01:36',
                'modified' => '2024-03-10 16:01:36',
            ],
        ];
        parent::init();
    }
}
