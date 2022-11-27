<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DownloadTest extends TestCase
{
    use RefreshDatabase;

    public function testDownload(): void
    {
        $user = User::factory()->create();
        $this->seed();
        $response = $this
            ->actingAs($user)
            ->get('/landings/5/download');

        $response->assertOk();
    }

    public function testWithoutUser(): void
    {
        $this->seed();
        $response = $this
            ->get('/landings/5/download');

        $response->assertRedirect('/login');
    }
}
