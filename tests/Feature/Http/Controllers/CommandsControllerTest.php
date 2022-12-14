<?php

namespace Tests\Feature\Http\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\CommandsController
 */
class CommandsControllerTest extends TestCase
{
    /**
     * @test
     */
    public function export_db_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $response = $this->get('export-db');

        $response->assertRedirect(to('/investorportal.zip'));

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function tst_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $response = $this->get('tst');

        $response->assertOk();

        // TODO: perform additional assertions
    }

    // test cases...
}
