<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UserTrackingsFixture
 */
class UserTrackingsFixture extends TestFixture
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
                'programrun_id' => 1,
                'program_id' => 1,
                'course_id' => 1,
                'class_id' => 1,
                'lesson_id' => 1,
                'chapter_id' => 1,
                'user_id' => 1,
                'score' => 1,
                'created' => '2024-03-10 16:14:49',
                'modified' => '2024-03-10 16:14:49',
            ],
        ];
        parent::init();
    }
}
