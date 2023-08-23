<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\W3programrunTypesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\W3programrunTypesTable Test Case
 */
class W3programrunTypesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\W3programrunTypesTable
     */
    protected $W3programrunTypes;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.W3programrunTypes',
        'app.W3programruns',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('W3programrunTypes') ? [] : ['className' => W3programrunTypesTable::class];
        $this->W3programrunTypes = $this->getTableLocator()->get('W3programrunTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->W3programrunTypes);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\W3programrunTypesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
