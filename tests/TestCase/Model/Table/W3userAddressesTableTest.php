<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\W3userAddressesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\W3userAddressesTable Test Case
 */
class W3userAddressesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\W3userAddressesTable
     */
    protected $W3userAddresses;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.W3userAddresses',
        'app.W3users',
        'app.W3countries',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('W3userAddresses') ? [] : ['className' => W3userAddressesTable::class];
        $this->W3userAddresses = $this->getTableLocator()->get('W3userAddresses', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->W3userAddresses);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\W3userAddressesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\W3userAddressesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
