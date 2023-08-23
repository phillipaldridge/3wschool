<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\W3programrunsController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\W3programrunsController Test Case
 *
 * @uses \App\Controller\W3programrunsController
 */
class W3programrunsControllerTest extends TestCase
{
    use IntegrationTestTrait;

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
        'app.W3programrunsW3users',
    ];

    /**
     * Test index method
     *
     * @return void
     * @uses \App\Controller\W3programrunsController::index()
     */
    public function testIndex(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     * @uses \App\Controller\W3programrunsController::view()
     */
    public function testView(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     * @uses \App\Controller\W3programrunsController::add()
     */
    public function testAdd(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     * @uses \App\Controller\W3programrunsController::edit()
     */
    public function testEdit(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     * @uses \App\Controller\W3programrunsController::delete()
     */
    public function testDelete(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
