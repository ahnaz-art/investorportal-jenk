<?php

namespace Tests\Feature\Http\Controllers\Admin;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\Admin\SettingController
 */
class SettingControllerTest extends TestCase
{
    /**
     * @test
     */
    public function setting_update_action_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $response = $this->get(route('admin::settings::index'));

        $response->assertRedirect(back());

        // TODO: perform additional assertions
    }
}