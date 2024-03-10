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
                'w3targetchapter_id' => 1,
                'w3chapter_rule_id' => 1,
                'w3chapter_action_id' => 1,
                'score' => 1,
                'created' => '2024-03-03 10:59:24',
                'modified' => '2024-03-03 10:59:24',
            ],
        ];
        parent::init();
    }
}
