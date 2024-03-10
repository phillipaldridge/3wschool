<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\W3usersTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\W3usersTable Test Case
 */
class W3usersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\W3usersTable
     */
    protected $W3users;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.W3users',
        'app.W3userProfiles',
        'app.W3userAddresses',
        'app.W3userTrackings',
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
        $config = $this->getTableLocator()->exists('W3users') ? [] : ['className' => W3usersTable::class];
        $this->W3users = $this->getTableLocator()->get('W3users', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->W3users);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\W3usersTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
