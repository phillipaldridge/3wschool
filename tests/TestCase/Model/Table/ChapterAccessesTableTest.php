<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ChapterAccessesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ChapterAccessesTable Test Case
 */
class ChapterAccessesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ChapterAccessesTable
     */
    protected $ChapterAccesses;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.ChapterAccesses',
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
        $config = $this->getTableLocator()->exists('ChapterAccesses') ? [] : ['className' => ChapterAccessesTable::class];
        $this->ChapterAccesses = $this->getTableLocator()->get('ChapterAccesses', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ChapterAccesses);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ChapterAccessesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
