<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CourseTypesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CourseTypesTable Test Case
 */
class CourseTypesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CourseTypesTable
     */
    protected $CourseTypes;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.CourseTypes',
        'app.Courses',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('CourseTypes') ? [] : ['className' => CourseTypesTable::class];
        $this->CourseTypes = $this->getTableLocator()->get('CourseTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->CourseTypes);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CourseTypesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
