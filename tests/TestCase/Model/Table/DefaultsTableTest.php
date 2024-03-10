<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DefaultsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DefaultsTable Test Case
 */
class DefaultsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DefaultsTable
     */
    protected $Defaults;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Defaults',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Defaults') ? [] : ['className' => DefaultsTable::class];
        $this->Defaults = $this->getTableLocator()->get('Defaults', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Defaults);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\DefaultsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
