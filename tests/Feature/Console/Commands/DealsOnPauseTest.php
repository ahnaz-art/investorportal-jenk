<?php

namespace Tests\Feature\Console\Commands;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

/**
 * @see \App\Console\Commands\DealsOnPause
 */
class DealsOnPauseTest extends TestCase
{
    /**
     * @test
     */
    public function it_runs_successfully()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $this->artisan('DealsOnPause:DealsOnPause')
            ->assertExitCode(0)
            ->run();

        // TODO: perform additional assertions to ensure the command behaved as expected
    }
}
