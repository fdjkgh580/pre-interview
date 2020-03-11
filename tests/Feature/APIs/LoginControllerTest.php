<?php

namespace Tests\Feature\APIs;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginControllerTest extends TestCase
{
    public function testShow()
    {
        $response = $this->json("get", "/api/v1/login/facebook");
        $response->assertStatus(200);
        $response->assertJsonStructure(['status']);
        $this->assertTrue(false);
    }
}
