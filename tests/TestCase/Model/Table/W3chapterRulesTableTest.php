<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\W3chapterRulesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\W3chapterRulesTable Test Case
 */
class W3chapterRulesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\W3chapterRulesTable
     */
    protected $W3chapterRules;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.W3chapterRules',
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
        $config = $this->getTableLocator()->exists('W3chapterRules') ? [] : ['className' => W3chapterRulesTable::class];
        $this->W3chapterRules = $this->getTableLocator()->get('W3chapterRules', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->W3chapterRules);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\W3chapterRulesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
