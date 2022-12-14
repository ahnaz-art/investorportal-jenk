<?php

namespace Tests\Unit\Http\Requests;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

/**
 * @see \App\Http\Requests\AdminUpdateMerchantRequest
 */
class AdminUpdateMerchantRequestTest extends TestCase
{
    /** @var \App\Http\Requests\AdminUpdateMerchantRequest */
    private $subject;

    protected function setUp(): void
    {
        parent::setUp();

        $this->subject = new \App\Http\Requests\AdminUpdateMerchantRequest();
    }

    /**
     * @test
     */
    public function authorize()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $actual = $this->subject->authorize();

        $this->assertTrue($actual);
    }

    /**
     * @test
     */
    public function rules()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $actual = $this->subject->rules();

        $this->assertValidationRules([
            'name' => [
                'required',
                'max:50',
            ],
            'sub_status_id' => [
                'required',
                'numeric',
            ],
            'syndication_fee' => [
                'nullable',
                'numeric',
            ],
            'credit_score' => [
                'nullable',
                'numeric',
                'between:350,850',
            ],
            'max_participant_fund' => [
                'nullable',
                'numeric',
                'between:0,99999999999',
            ],
            'max_participant_fund_per' => [
                'between:0,100',
            ],
            'lender_id' => [
                '',
            ],
        ], $actual);
    }

    /**
     * @test
     */
    public function messages()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $actual = $this->subject->messages();

        $this->assertEquals([
            'id.required' => 'Merchant id (MID) already in the system.',
        ], $actual);
    }

    // test cases...
}
