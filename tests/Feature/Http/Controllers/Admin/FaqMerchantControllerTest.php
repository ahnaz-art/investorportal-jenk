<?php

namespace Tests\Feature\Http\Controllers\Admin;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\Admin\FaqMerchantController
 */
class FaqMerchantControllerTest extends TestCase
{
    /**
     * @test
     */
    public function create_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $response = $this->get(route('admin::merchants::faq.create', ['merchant_id' => $merchant_id]));

        $response->assertOk();
        $response->assertViewIs('admin.merchants.faq.create');
        $response->assertViewHas('page_title');
        $response->assertViewHas('action');
        $response->assertViewHas('url');
        $response->assertViewHas('merchant_id');
        $response->assertViewHas('merchant');

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function datatable_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $response = $this->get(route('admin::merchants::faq.datatable', ['merchant_id' => $merchant_id]));

        $response->assertOk();

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function destroy_returns_an_ok_response()
    {
    }

    /**
     * @test
     */
    public function edit_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $response = $this->get(route('admin::merchants::faq.edit', ['merchant_id' => $merchant_id, 'faq' => $faq]));

        $response->assertOk();
        $response->assertViewIs('admin.merchants.faq.edit');
        $response->assertViewHas('page_title');
        $response->assertViewHas('action');
        $response->assertViewHas('faq');
        $response->assertViewHas('edit');
        $response->assertViewHas('url');
        $response->assertViewHas('merchant_id');
        $response->assertViewHas('id');
        $response->assertViewHas('merchant');

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function index_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $response = $this->get(route('admin::merchants::faq.index', ['merchant_id' => $merchant_id]));

        $response->assertOk();
        $response->assertViewIs('admin.merchants.faq.index');
        $response->assertViewHas('page_title');
        $response->assertViewHas('tableBuilder');
        $response->assertViewHas('title');
        $response->assertViewHas('create');
        $response->assertViewHas('merchant');

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function show_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $response = $this->get(route('admin::merchants::faq.show', ['merchant_id' => $merchant_id, 'faq' => $faq]));

        $response->assertOk();
        $response->assertViewIs('faq.show');
        $response->assertViewHas('faq');

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function store_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $response = $this->post(route('admin::merchants::faq.store', ['merchant_id' => $merchant_id]), [
            // TODO: send request data
        ]);

        $response->assertRedirect(to($url));

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function update_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $response = $this->put(route('admin::merchants::faq.update', ['merchant_id' => $merchant_id, 'faq' => $faq]), [
            // TODO: send request data
        ]);

        $response->assertRedirect(to($url));

        // TODO: perform additional assertions
    }

    // test cases...
}