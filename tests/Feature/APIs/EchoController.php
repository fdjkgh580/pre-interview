<?php

namespace Tests\Feature\APIs;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EchoController extends TestCase
{
    public function testGet()
    {
        $response = $this->json("GET", "/api/echo", ['act' => 'get']);
        $response->assertStatus(200);
        $response->assertJson(['echo' => ['act' => 'get']]);
    }

    public function testPost()
    {
        $response = $this->json("POST", "/api/echo", ['act' => 'post']);
        $response->assertStatus(200);
        $response->assertJson(['echo' => ['act' => 'post']]);
    }

    public function testPut()
    {
        $response = $this->json("PUT", "/api/echo", ['act' => 'put']);
        $response->assertStatus(200);
        $response->assertJson(['echo' => ['act' => 'put']]);
    }

    public function testDelete()
    {
        $response = $this->json("DELETE", "/api/echo", ['act' => 'delete']);
        $response->assertStatus(200);
        $response->assertJson(['echo' => ['act' => 'delete']]);
    }
}
