<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\W3chaptersTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\W3chaptersTable Test Case
 */
class W3chaptersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\W3chaptersTable
     */
    protected $W3chapters;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.W3chapters',
        'app.W3lessons',
        'app.W3chapterTypes',
        'app.W3chapterAccesses',
        'app.W3chapterContents',
        'app.W3chapterPaths',
        'app.W3userTrackings',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('W3chapters') ? [] : ['className' => W3chaptersTable::class];
        $this->W3chapters = $this->getTableLocator()->get('W3chapters', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->W3chapters);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\W3chaptersTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\W3chaptersTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
