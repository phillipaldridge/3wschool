<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\W3chapterPathsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\W3chapterPathsTable Test Case
 */
class W3chapterPathsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\W3chapterPathsTable
     */
    protected $W3chapterPaths;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.W3chapterPaths',
        'app.W3chapters',
        'app.W3chapterRules',
        'app.W3chapterActions',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('W3chapterPaths') ? [] : ['className' => W3chapterPathsTable::class];
        $this->W3chapterPaths = $this->getTableLocator()->get('W3chapterPaths', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->W3chapterPaths);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\W3chapterPathsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\W3chapterPathsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
