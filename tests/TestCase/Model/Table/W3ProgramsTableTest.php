<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\W3programsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\W3programsTable Test Case
 */
class W3programsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\W3programsTable
     */
    protected $W3programs;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.W3programs',
        'app.W3programTypes',
        'app.W3programruns',
        'app.W3userTrackings',
        'app.W3courses',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('W3programs') ? [] : ['className' => W3programsTable::class];
        $this->W3programs = $this->getTableLocator()->get('W3programs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->W3programs);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\W3programsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\W3programsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
