<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\W3chapterAccessesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\W3chapterAccessesTable Test Case
 */
class W3chapterAccessesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\W3chapterAccessesTable
     */
    protected $W3chapterAccesses;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.W3chapterAccesses',
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
        $config = $this->getTableLocator()->exists('W3chapterAccesses') ? [] : ['className' => W3chapterAccessesTable::class];
        $this->W3chapterAccesses = $this->getTableLocator()->get('W3chapterAccesses', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->W3chapterAccesses);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\W3chapterAccessesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
