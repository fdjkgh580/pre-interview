<?php

namespace Tests\Feature\APIs;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EchoControllerTest extends TestCase
{
    public function testGet()
    {
        $response = $this->json("GET", "/api/v1/echo", ['act' => 'get']);
        $response->assertStatus(200);
        $response->assertJson(['echo' => ['act' => 'get']]);
    }

    public function testPost()
    {
        $response = $this->json("POST", "/api/v1/echo", ['act' => 'post']);
        $response->assertStatus(200);
        $response->assertJson(['echo' => ['act' => 'post']]);
    }

    public function testPut()
    {
        $response = $this->json("PUT", "/api/v1/echo", ['act' => 'put']);
        $response->assertStatus(200);
        $response->assertJson(['echo' => ['act' => 'put']]);
    }

    public function testDelete()
    {
        $response = $this->json("DELETE", "/api/v1/echo", ['act' => 'delete']);
        $response->assertStatus(200);
        $response->assertJson(['echo' => ['act' => 'delete']]);
    }
}
