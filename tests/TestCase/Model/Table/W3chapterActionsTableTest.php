<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\W3chapterActionsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\W3chapterActionsTable Test Case
 */
class W3chapterActionsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\W3chapterActionsTable
     */
    protected $W3chapterActions;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.W3chapterActions',
        'app.W3chapterPaths',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('W3chapterActions') ? [] : ['className' => W3chapterActionsTable::class];
        $this->W3chapterActions = $this->getTableLocator()->get('W3chapterActions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->W3chapterActions);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\W3chapterActionsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
