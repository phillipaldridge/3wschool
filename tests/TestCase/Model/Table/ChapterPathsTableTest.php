<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ChapterPathsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ChapterPathsTable Test Case
 */
class ChapterPathsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ChapterPathsTable
     */
    protected $ChapterPaths;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.ChapterPaths',
        'app.Chapters',
        'app.ChapterRules',
        'app.ChapterActions',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ChapterPaths') ? [] : ['className' => ChapterPathsTable::class];
        $this->ChapterPaths = $this->getTableLocator()->get('ChapterPaths', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ChapterPaths);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ChapterPathsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ChapterPathsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
