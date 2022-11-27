<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LandingsTest extends TestCase
{
    use RefreshDatabase;

    public function testAssertNotFoundForm(): void
    {
        $user = User::factory()->create();
        $this->seed();
        $response = $this
            ->actingAs($user)
            ->get('/type-one/slug1');

        $response->assertNotFound();
    }

    public function testAssertNotFoundLanding(): void
    {
        $this->seed();
        $response = $this
            ->get('/type-type/odit-enim-et-est');

        $response->assertNotFound();
    }

    public function testGetLandingTypeOne(): void
    {
        $this->seed();
        $response = $this
            ->get('/type-one/odit-enim-et-est');

        $response->assertOk();
    }

    public function testGetLandingTypeTwo(): void
    {
        $this->seed();
        $response = $this
            ->get('/type-two/odit-enim-et-est');

        $response->assertOk();
    }

    public function testGetLandingTypeThree(): void
    {
        $this->seed();
        $response = $this
            ->get('/type-three/odit-enim-et-est');

        $response->assertOk();
    }
}
