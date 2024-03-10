<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ChaptersTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ChaptersTable Test Case
 */
class ChaptersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ChaptersTable
     */
    protected $Chapters;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Chapters',
        'app.Lessons',
        'app.ChapterTypes',
        'app.ChapterAccesses',
        'app.ChapterContents',
        'app.ChapterPaths',
        'app.UserTrackings',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Chapters') ? [] : ['className' => ChaptersTable::class];
        $this->Chapters = $this->getTableLocator()->get('Chapters', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Chapters);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ChaptersTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ChaptersTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
