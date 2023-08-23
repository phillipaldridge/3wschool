<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\W3lessonsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\W3lessonsTable Test Case
 */
class W3lessonsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\W3lessonsTable
     */
    protected $W3lessons;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.W3lessons',
        'app.W3lessonTypes',
        'app.W3chapters',
        'app.W3userTrackings',
        'app.W3classes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('W3lessons') ? [] : ['className' => W3lessonsTable::class];
        $this->W3lessons = $this->getTableLocator()->get('W3lessons', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->W3lessons);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\W3lessonsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\W3lessonsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
