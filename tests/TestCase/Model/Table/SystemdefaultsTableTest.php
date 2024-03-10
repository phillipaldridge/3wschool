<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SystemdefaultsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SystemdefaultsTable Test Case
 */
class SystemdefaultsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SystemdefaultsTable
     */
    protected $Systemdefaults;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Systemdefaults',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Systemdefaults') ? [] : ['className' => SystemdefaultsTable::class];
        $this->Systemdefaults = $this->getTableLocator()->get('Systemdefaults', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Systemdefaults);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\SystemdefaultsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
