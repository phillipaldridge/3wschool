<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\W3coursesController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\W3coursesController Test Case
 *
 * @uses \App\Controller\W3coursesController
 */
class W3coursesControllerTest extends TestCase
{
    use IntegrationTestTrait;

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
        'app.W3classesW3courses',
        'app.W3coursesW3programs',
    ];

    /**
     * Test index method
     *
     * @return void
     * @uses \App\Controller\W3coursesController::index()
     */
    public function testIndex(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     * @uses \App\Controller\W3coursesController::view()
     */
    public function testView(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     * @uses \App\Controller\W3coursesController::add()
     */
    public function testAdd(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     * @uses \App\Controller\W3coursesController::edit()
     */
    public function testEdit(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     * @uses \App\Controller\W3coursesController::delete()
     */
    public function testDelete(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
