<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProgramrunsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProgramrunsTable Test Case
 */
class ProgramrunsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProgramrunsTable
     */
    protected $Programruns;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Programruns',
        'app.Programs',
        'app.ProgramrunTypes',
        'app.UserTrackings',
        'app.Users',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Programruns') ? [] : ['className' => ProgramrunsTable::class];
        $this->Programruns = $this->getTableLocator()->get('Programruns', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Programruns);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ProgramrunsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ProgramrunsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
