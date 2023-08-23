<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\W3userTrackingsController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\W3userTrackingsController Test Case
 *
 * @uses \App\Controller\W3userTrackingsController
 */
class W3userTrackingsControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.W3userTrackings',
        'app.W3programruns',
        'app.W3programs',
        'app.W3courses',
        'app.W3classes',
        'app.W3lessons',
        'app.W3chapters',
        'app.W3users',
    ];

    /**
     * Test index method
     *
     * @return void
     * @uses \App\Controller\W3userTrackingsController::index()
     */
    public function testIndex(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     * @uses \App\Controller\W3userTrackingsController::view()
     */
    public function testView(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     * @uses \App\Controller\W3userTrackingsController::add()
     */
    public function testAdd(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     * @uses \App\Controller\W3userTrackingsController::edit()
     */
    public function testEdit(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     * @uses \App\Controller\W3userTrackingsController::delete()
     */
    public function testDelete(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
