<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\W3lessonsController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\W3lessonsController Test Case
 *
 * @uses \App\Controller\W3lessonsController
 */
class W3lessonsControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.W3lessons',
        'app.W3lessonTypes',
        'app.W3chapters',
        'app.W3userTrackings',
        'app.W3classes',
        'app.W3classesW3lessons',
    ];

    /**
     * Test index method
     *
     * @return void
     * @uses \App\Controller\W3lessonsController::index()
     */
    public function testIndex(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     * @uses \App\Controller\W3lessonsController::view()
     */
    public function testView(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     * @uses \App\Controller\W3lessonsController::add()
     */
    public function testAdd(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     * @uses \App\Controller\W3lessonsController::edit()
     */
    public function testEdit(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     * @uses \App\Controller\W3lessonsController::delete()
     */
    public function testDelete(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
