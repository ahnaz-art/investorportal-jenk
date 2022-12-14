<?php

namespace Tests\Feature\Http\Controllers\Admin;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\User;
use App\Merchant;
use App\MerchantUser;
use App\ParticipentPayment;
use Illuminate\Http\Response;
/**
* @see \App\Http\Controllers\Admin\PaymentController
*/
class PaymentControllerTest extends TestCase
{
    /**
    * @test
    */
    public function net_amount_calculation_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');
        
        $response = $this->post(route('admin::merchants::NetAmountCalculation'), [
            // TODO: send request data
        ]);
        
        $response->assertOk();
        
        // TODO: perform additional assertions
    }
    
    /**
    * @test
    */
    public function ach_check_single_status_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');
        
        $response = $this->get(route('admin::payments::ach-requests.view', ['id' => $id]));
        
        $response->assertOk();
        
        // TODO: perform additional assertions
    }
    
    /**
    * @test
    */
    public function ach_check_status_csv_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');
        
        $response = $this->post(route('admin::payments::ach-requests.status'), [
            // TODO: send request data
        ]);
        
        $response->assertOk();
        
        // TODO: perform additional assertions
    }
    
    /**
    * @test
    */
    public function ach_confirmation_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');
        
        $response = $this->get(route('admin::payments::ach-payment.index'));
        
        $response->assertOk();
        $response->assertViewIs('admin.payments.ach_payments');
        $response->assertViewHas('page_title');
        $response->assertViewHas('statuses');
        $response->assertViewHas('payments');
        $response->assertViewHas('total_payment_amount');
        $response->assertViewHas('date');
        $response->assertViewHas('merchants_id');
        $response->assertViewHas('tomorrow');
        $response->assertViewHas('fee_types');
        
        // TODO: perform additional assertions
    }
    
    /**
    * @test
    */
    public function ach_confirmation_store_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');
        
        $response = $this->post(route('admin::payments::ach-payment.store'), [
            // TODO: send request data
        ]);
        
        $response->assertOk();
        
        // TODO: perform additional assertions
    }
    
    /**
    * @test
    */
    public function ach_fees_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');
        
        $response = $this->get(route('admin::payments::ach-fees.index'));
        
        $response->assertOk();
        $response->assertViewIs('admin.payments.ach_fees');
        $response->assertViewHas('page_title');
        $response->assertViewHas('tableBuilder');
        $response->assertViewHas('merchants_id');
        $response->assertViewHas('statuses');
        $response->assertViewHas('fee_types');
        
        // TODO: perform additional assertions
    }
    
    /**
    * @test
    */
    public function ach_fees_export_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');
        
        $response = $this->post(route('admin::payments::ach-fees.export'), [
            // TODO: send request data
        ]);
        
        $response->assertOk();
        
        // TODO: perform additional assertions
    }
    
    /**
    * @test
    */
    public function ach_requests_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');
        
        $response = $this->post(route('admin::payments::achRequests.datatable'), [
            // TODO: send request data
        ]);
        
        $response->assertOk();
        $response->assertViewIs('admin.payments.ach_requests');
        $response->assertViewHas('tableBuilder');
        $response->assertViewHas('page_title');
        $response->assertViewHas('page_description');
        $response->assertViewHas('merchants_id');
        $response->assertViewHas('statuses');
        
        // TODO: perform additional assertions
    }
    
    /**
    * @test
    */
    public function ach_requests_export_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');
        
        $response = $this->post(route('admin::payments::ach-requests.export'), [
            // TODO: send request data
        ]);
        
        $response->assertOk();
        
        // TODO: perform additional assertions
    }
    
    /**
    * @test
    */
    public function add_payments_for_lenders_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');
        
        $response = $this->post(route('admin::payments::add_payments_for_lenders'), [
            // TODO: send request data
        ]);
        
        $response->assertOk();
        
        // TODO: perform additional assertions
    }
    
    /**
    * @test
    */
    public function change_auto_ach_status_merchant_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');
        
        $response = $this->post(route('admin::payments::ach-auto-status'), [
            // TODO: send request data
        ]);
        
        $response->assertOk();
        
        // TODO: perform additional assertions
    }
    
    /**
    * @test
    */
    public function create_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');
        
        $response = $this->get(route('admin::payments::create'));
        
        $response->assertRedirect(back());
        
        // TODO: perform additional assertions
    }
    
    /**
    * @test
    */
    public function delete_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');
        
        $response = $this->post(route('admin::payments::delete', ['id' => $id]), [
            // TODO: send request data
        ]);
        
        $response->assertRedirect(withErrors($e->getMessage()));
        
        // TODO: perform additional assertions
    }
    
    /**
    * @test
    */
    public function delete_multi_payment_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');
        
        $response = $this->post(route('admin::merchant_investor::multi_delete'), [
            // TODO: send request data
        ]);
        
        $response->assertOk();
        
        // TODO: perform additional assertions
    }
    
    /**
    * @test
    */
    public function index_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');
        
        $response = $this->get(route('admin::payments::index'));
        
        $response->assertOk();
        $response->assertViewIs('admin.payments.index');
        $response->assertViewHas('merchant_batch');
        $response->assertViewHas('tableBuilder');
        $response->assertViewHas('title');
        $response->assertViewHas('totalPaymentsToday');
        $response->assertViewHas('investors');
        $response->assertViewHas('batches');
        $response->assertViewHas('batch_id');
        
        // TODO: perform additional assertions
    }
    
    /**
    * @test
    */
    public function investor_ach_check_ach_request_status_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');
        
        $response = $this->post(route('admin::payments::investor-ach-requests-status.check-all'), [
            // TODO: send request data
        ]);
        
        $response->assertOk();
        
        // TODO: perform additional assertions
    }
    
    /**
    * @test
    */
    public function investor_ach_check_ach_status_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');
        
        $response = $this->get(route('admin::payments::investor-ach-status.check-all'));
        
        $response->assertOk();
        
        // TODO: perform additional assertions
    }
    
    /**
    * @test
    */
    public function investor_ach_check_single_status_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');
        
        $response = $this->get(route('admin::payments::investor-ach-requests.check', ['id' => $id]));
        
        $response->assertOk();
        
        // TODO: perform additional assertions
    }
    
    /**
    * @test
    */
    public function investor_ach_requests_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');
        
        $response = $this->get(route('admin::payments::investor-ach-requests.index'));
        
        $response->assertOk();
        $response->assertViewIs('admin.payments.investor_ach_requests');
        $response->assertViewHas('tableBuilder');
        $response->assertViewHas('page_title');
        $response->assertViewHas('investors');
        $response->assertViewHas('page_description');
        
        // TODO: perform additional assertions
    }
    
    /**
    * @test
    */
    public function investor_ach_requests_export_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');
        
        $response = $this->post(route('admin::payments::investor-ach-requests.export'), [
            // TODO: send request data
        ]);
        
        $response->assertOk();
        
        // TODO: perform additional assertions
    }
    
    /**
    * @test
    */
    public function lender_payment_check_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');
        
        $response = $this->post(route('admin::payments::lenderPaymentCheck'), [
            // TODO: send request data
        ]);
        
        $response->assertOk();
        
        // TODO: perform additional assertions
    }
    
    /**
    * @test
    */
    public function lender_payment_generation_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');
        
        $response = $this->get(route('admin::payments::get-lender-payment-generation'));
        
        $response->assertRedirect(withErrors($e->getMessage()));
        
        // TODO: perform additional assertions
    }
    
    /**
    * @test
    */
    public function make_payment_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');
        
        $response = $this->get(route('get-make-payment', ['id' => $id, 'amount' => $amount]));
        
        $response->assertOk();
        
        // TODO: perform additional assertions
    }
    
    /**
    * @test
    */
    public function net_payment_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');
        
        $response = $this->post(route('admin::payments::netPayment'), [
            // TODO: send request data
        ]);
        
        $response->assertOk();
        
        // TODO: perform additional assertions
    }
    
    /**
    * @test
    */
    public function net_payment_all_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');
        
        $response = $this->post(route('admin::payments::netPaymentAll'), [
            // TODO: send request data
        ]);
        
        $response->assertOk();
        
        // TODO: perform additional assertions
    }
    
    /**
    * @test
    */
    public function open_items_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');
        
        $response = $this->get(route('admin::payments::openitems'));
        
        $response->assertOk();
        $response->assertViewIs('admin.payments.open-items');
        $response->assertViewHas('tableBuilder');
        $response->assertViewHas('page_title');
        
        // TODO: perform additional assertions
    }
    
    /**
    * @test
    */
    public function payment_check_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');
        
        $response = $this->post(route('admin::payments::paymentCheck'), [
            // TODO: send request data
        ]);
        
        $response->assertOk();
        
        // TODO: perform additional assertions
    }
    
    /**
    * @test
    */
    public function process_stripe_payment_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');
        
        $response = $this->post(route('admin::merchants::process_stripe_payment_merchant', ['id' => $id]), [
            // TODO: send request data
        ]);
        
        $response->assertOk();
        
        // TODO: perform additional assertions
    }
    
    /**
    * @test
    */
    public function process_stripe_payment_investor_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');
        
        $response = $this->post(route('process-stripe-payment-investor'), [
            // TODO: send request data
        ]);
        
        $response->assertOk();
        
        // TODO: perform additional assertions
    }
    
    /**
    * @test
    */
    public function remove_investor_a_c_h_pending_verification_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');
        
        $response = $this->get(route('admin::payments::investor-ach-status.delete-verification', ['data' => $data]));
        
        $response->assertRedirect(route('admin::payments::investor-ach-requests.index'));
        
        // TODO: perform additional assertions
    }
    
    /**
    * @test
    */
    public function share_check_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');
        
        $response = $this->post(route('admin::payments::shareCheck'), [
            // TODO: send request data
        ]);
        
        $response->assertOk();
        
        // TODO: perform additional assertions
    }
    
    /**
    * @test
    */
    public function store_returns_an_ok_response()
    {
        $user = User::first();//Admin
        $Merchant=Merchant::get();
        foreach ($Merchant as $key => $value) {
            $merchant_id = $value->id;
            $rtr = $value->rtr;
            echo "\n payment Merchant ".$merchant_id;
            $no_of_payments = $value->pmnts;
            $response=$this
            ->actingAs($user)
            ->get(route('admin::merchants::index'))
            ->assertStatus(Response::HTTP_OK);
            $this
            ->actingAs($user)
            ->get(route('admin::merchants::view',$merchant_id))
            ->assertStatus(Response::HTTP_OK);
            $this
            ->actingAs($user)
            ->get(route('admin::payments::createForMerchant',$merchant_id))
            ->assertStatus(Response::HTTP_OK);
            $MerchantUser = MerchantUser::where('merchant_id',$merchant_id);
            $MerchantUser = $MerchantUser->where('amount','!=',0);
            $MerchantUser = $MerchantUser->pluck('user_id','user_id');
            $MerchantUser = $MerchantUser->toArray();
            $paid=ParticipentPayment::where('merchant_id',$merchant_id)->where('model','like', '%ParticipentPayment%')->sum('payment');
            $payments=$paid+$value->payment_amount;
            if($rtr>=$payments){
                $payment_amount=$value->payment_amount;
            } else {
                $balance=$rtr-$paid;
                $payment_amount=$balance;
            }
            if($payment_amount<0){
                $payment_amount=1000;
            }
            $data=[
                'user_id'      => $MerchantUser,
                'payment'      => $payment_amount,
                'payment_date' => date('Y-m-d',strtotime($value->date_funded." +10 day")),
                'merchant_id'  => $merchant_id,
            ];
            $this
            ->actingAs($user)
            ->get(url('admin/merchants/adjust-company-funded-amount',['mid'=>$merchant_id]))
            ->assertSessionHasNoErrors();
            $response = $this->actingAs($user);
            $response = $response->post(route('admin::payments::store'),$data);
            $response = $response->assertSessionHasNoErrors();
            $response = $response->assertRedirect(route('admin::merchants::view',$merchant_id));
            $response = $response->assertStatus(Response::HTTP_FOUND);
        }
    }
    
    /**
    * @test
    */
    public function update_achpayments_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');
        
        $response = $this->post(route('admin::payments::ach-payment.update'), [
            // TODO: send request data
        ]);
        
        $response->assertRedirect(back());
        
        // TODO: perform additional assertions
    }
    
    // test cases...
}
