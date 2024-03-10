<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\W3ChaptersTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\W3ChaptersTable Test Case
 */
class W3ChaptersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\W3ChaptersTable
     */
    protected $W3Chapters;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.W3Chapters',
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
        $config = $this->getTableLocator()->exists('W3Chapters') ? [] : ['className' => W3ChaptersTable::class];
        $this->W3Chapters = $this->getTableLocator()->get('W3Chapters', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->W3Chapters);

        parent::tearDown();
    }
}
