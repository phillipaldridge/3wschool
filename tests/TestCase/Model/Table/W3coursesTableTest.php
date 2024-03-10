<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\W3coursesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\W3coursesTable Test Case
 */
class W3coursesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\W3coursesTable
     */
    protected $W3courses;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.W3courses',
        'app.W3courseTypes',
        'app.W3userTrackings',
        'app.W3classes',
        'app.W3programs',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('W3courses') ? [] : ['className' => W3coursesTable::class];
        $this->W3courses = $this->getTableLocator()->get('W3courses', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->W3courses);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\W3coursesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\W3coursesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
