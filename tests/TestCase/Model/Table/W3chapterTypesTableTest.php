<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\W3chapterTypesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\W3chapterTypesTable Test Case
 */
class W3chapterTypesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\W3chapterTypesTable
     */
    protected $W3chapterTypes;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.W3chapterTypes',
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
        $config = $this->getTableLocator()->exists('W3chapterTypes') ? [] : ['className' => W3chapterTypesTable::class];
        $this->W3chapterTypes = $this->getTableLocator()->get('W3chapterTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->W3chapterTypes);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\W3chapterTypesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
