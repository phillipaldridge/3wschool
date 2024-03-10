<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ChapterTypesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ChapterTypesTable Test Case
 */
class ChapterTypesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ChapterTypesTable
     */
    protected $ChapterTypes;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.ChapterTypes',
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
        $config = $this->getTableLocator()->exists('ChapterTypes') ? [] : ['className' => ChapterTypesTable::class];
        $this->ChapterTypes = $this->getTableLocator()->get('ChapterTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ChapterTypes);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ChapterTypesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
