<?php

namespace Tests\Feature\Http\Controllers\Admin;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\Admin\MarketOfferController
 */
class MarketOfferControllerTest extends TestCase
{
    /**
     * @test
     */
    public function add_edit_investors_offer_action_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $response = $this->get(route('admin::addEditInvestorsOffers'));

        $response->assertOk();
        $response->assertViewIs();

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function add_edit_merchants_offer_action_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $response = $this->get(route('admin::addEditMerchantsOffers'));

        $response->assertOk();
        $response->assertViewIs();

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function add_update_investor_market_offer_action_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $response = $this->post(route('admin::addUpdateInvestorMarketOffer'), [
            // TODO: send request data
        ]);

        $response->assertRedirect(withInput());

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function add_update_merchant_market_offer_action_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $response = $this->post(route('admin::addUpdateMerchantMarketOffer'), [
            // TODO: send request data
        ]);

        $response->assertRedirect(withInput());

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function investor_delete_offer_action_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $response = $this->post(route('admin::investor_delete_Offers', ['id' => $id]), [
            // TODO: send request data
        ]);

        $response->assertRedirect(route('admin::investorMarketOfferList'));

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function investor_market_offer_data_action_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $response = $this->get(route('admin::investor_market_offer_data'));

        $response->assertOk();

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function investor_market_offer_list_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $response = $this->get(route('admin::investorMarketOfferList'));

        $response->assertOk();
        $response->assertViewIs('admin.market_offers.investorsOffersList');
        $response->assertViewHas('page_title');
        $response->assertViewHas('tableBuilder');

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function merchant_delete_offer_action_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $response = $this->post(route('admin::merchant_delete_Offers', ['id' => $id]), [
            // TODO: send request data
        ]);

        $response->assertRedirect(route('admin::merchantMarketOfferList'));

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function merchant_market_offer_data_action_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $response = $this->get(route('admin::merchant_market_offer_data'));

        $response->assertOk();

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function merchant_market_offer_list_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $response = $this->get(route('admin::merchantMarketOfferList'));

        $response->assertOk();
        $response->assertViewIs('admin.market_offers.merchantOffersList');
        $response->assertViewHas('page_title');
        $response->assertViewHas('tableBuilder');

        // TODO: perform additional assertions
    }

    // test cases...
}