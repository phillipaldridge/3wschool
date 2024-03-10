<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ChapterActionsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ChapterActionsTable Test Case
 */
class ChapterActionsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ChapterActionsTable
     */
    protected $ChapterActions;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.ChapterActions',
        'app.ChapterPaths',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ChapterActions') ? [] : ['className' => ChapterActionsTable::class];
        $this->ChapterActions = $this->getTableLocator()->get('ChapterActions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ChapterActions);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ChapterActionsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
