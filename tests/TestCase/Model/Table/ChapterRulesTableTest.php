<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ChapterRulesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ChapterRulesTable Test Case
 */
class ChapterRulesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ChapterRulesTable
     */
    protected $ChapterRules;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.ChapterRules',
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
        $config = $this->getTableLocator()->exists('ChapterRules') ? [] : ['className' => ChapterRulesTable::class];
        $this->ChapterRules = $this->getTableLocator()->get('ChapterRules', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ChapterRules);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ChapterRulesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
