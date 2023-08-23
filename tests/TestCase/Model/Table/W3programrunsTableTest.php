<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\W3programrunsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\W3programrunsTable Test Case
 */
class W3programrunsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\W3programrunsTable
     */
    protected $W3programruns;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.W3programruns',
        'app.W3programs',
        'app.W3programrunTypes',
        'app.W3userTrackings',
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
        $config = $this->getTableLocator()->exists('W3programruns') ? [] : ['className' => W3programrunsTable::class];
        $this->W3programruns = $this->getTableLocator()->get('W3programruns', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->W3programruns);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\W3programrunsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\W3programrunsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
