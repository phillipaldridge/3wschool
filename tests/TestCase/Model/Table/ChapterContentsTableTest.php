<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ChapterContentsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ChapterContentsTable Test Case
 */
class ChapterContentsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ChapterContentsTable
     */
    protected $ChapterContents;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.ChapterContents',
        'app.Chapters',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ChapterContents') ? [] : ['className' => ChapterContentsTable::class];
        $this->ChapterContents = $this->getTableLocator()->get('ChapterContents', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ChapterContents);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ChapterContentsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ChapterContentsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
