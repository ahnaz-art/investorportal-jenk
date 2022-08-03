<?php

namespace Tests\Unit\Http\Requests;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

/**
 * @see \App\Http\Requests\AdminCreateCollectionUserRequest
 */
class AdminCreateCollectionUserRequestTest extends TestCase
{
    /** @var \App\Http\Requests\AdminCreateCollectionUserRequest */
    private $subject;

    protected function setUp(): void
    {
        parent::setUp();

        $this->subject = new \App\Http\Requests\AdminCreateCollectionUserRequest();
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
            'email' => [
                'required',
                'unique:users',
                'max:255',
            ],
            'name' => [
                'required',
            ],
            'password' => [
                'required',
                'confirmed',
            ],
            'password_confirmation' => [
                'required',
                'min:6',
            ],
        ], $actual);
    }

    // test cases...
}
