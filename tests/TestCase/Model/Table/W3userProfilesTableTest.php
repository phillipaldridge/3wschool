<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\W3userProfilesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\W3userProfilesTable Test Case
 */
class W3userProfilesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\W3userProfilesTable
     */
    protected $W3userProfiles;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.W3userProfiles',
        'app.W3users',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('W3userProfiles') ? [] : ['className' => W3userProfilesTable::class];
        $this->W3userProfiles = $this->getTableLocator()->get('W3userProfiles', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->W3userProfiles);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\W3userProfilesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\W3userProfilesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
