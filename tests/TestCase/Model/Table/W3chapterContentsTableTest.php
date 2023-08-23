<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\W3chapterContentsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\W3chapterContentsTable Test Case
 */
class W3chapterContentsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\W3chapterContentsTable
     */
    protected $W3chapterContents;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.W3chapterContents',
        'app.W3chapters',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('W3chapterContents') ? [] : ['className' => W3chapterContentsTable::class];
        $this->W3chapterContents = $this->getTableLocator()->get('W3chapterContents', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->W3chapterContents);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\W3chapterContentsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\W3chapterContentsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
