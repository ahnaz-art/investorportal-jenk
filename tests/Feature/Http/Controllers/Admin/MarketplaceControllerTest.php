<?php

namespace Tests\Feature\Http\Controllers\Admin;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\Admin\MarketplaceController
 */
class MarketplaceControllerTest extends TestCase
{
    /**
     * @test
     */
    public function list_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $response = $this->get(route('admin::marketplace'));

        $response->assertOk();
        $response->assertViewIs('admin.marketplace.list');
        $response->assertViewHas('funds');
        $response->assertViewHas('filter_id');
        $response->assertViewHas('page_title');

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function listdocs_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $response = $this->get(route('admin::document', ['mid' => $mid]));

        $response->assertOk();
        $response->assertViewIs('admin.marketplace.documents');
        $response->assertViewHas('page_title');
        $response->assertViewHas('tableBuilder');
        $response->assertViewHas('merchantId');

        // TODO: perform additional assertions
    }

    // test cases...
}