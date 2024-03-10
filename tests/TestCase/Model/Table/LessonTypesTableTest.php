<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LessonTypesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LessonTypesTable Test Case
 */
class LessonTypesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\LessonTypesTable
     */
    protected $LessonTypes;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.LessonTypes',
        'app.Lessons',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('LessonTypes') ? [] : ['className' => LessonTypesTable::class];
        $this->LessonTypes = $this->getTableLocator()->get('LessonTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->LessonTypes);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\LessonTypesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
