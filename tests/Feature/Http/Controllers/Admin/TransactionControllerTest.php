<?php

namespace Tests\Feature\Http\Controllers\Admin;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\Admin\TransactionController
 */
class TransactionControllerTest extends TestCase
{
    /**
     * @test
     */
    public function approve_transactions_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $response = $this->post(route('admin::payments::approve'), [
            // TODO: send request data
        ]);

        $response->assertOk();

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function pending_transactions_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $response = $this->get(route('admin::payments::pending-transactions'));

        $response->assertOk();
        $response->assertViewIs('admin.payments.pending_transactions');
        $response->assertViewHas('tableBuilder');
        $response->assertViewHas('page_title');
        $response->assertViewHas('investors');
        $response->assertViewHas('page_description');

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function transaction_data_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $response = $this->post(route('admin::merchants::TransactionData'), [
            // TODO: send request data
        ]);

        $response->assertOk();

        // TODO: perform additional assertions
    }

    // test cases...
}
