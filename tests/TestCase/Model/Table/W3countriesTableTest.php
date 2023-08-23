<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\W3countriesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\W3countriesTable Test Case
 */
class W3countriesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\W3countriesTable
     */
    protected $W3countries;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.W3countries',
        'app.W3userAddresses',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('W3countries') ? [] : ['className' => W3countriesTable::class];
        $this->W3countries = $this->getTableLocator()->get('W3countries', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->W3countries);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\W3countriesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
