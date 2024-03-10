<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UserTrackingsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UserTrackingsTable Test Case
 */
class UserTrackingsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\UserTrackingsTable
     */
    protected $UserTrackings;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.UserTrackings',
        'app.Programruns',
        'app.Programs',
        'app.Courses',
        'app.Lessons',
        'app.Chapters',
        'app.Users',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('UserTrackings') ? [] : ['className' => UserTrackingsTable::class];
        $this->UserTrackings = $this->getTableLocator()->get('UserTrackings', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->UserTrackings);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\UserTrackingsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\UserTrackingsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
