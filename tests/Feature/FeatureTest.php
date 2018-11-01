<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class FeatureTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test1()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }
    public function test2()
    {
    $response = $this->get('/login');

    $response->assertStatus(200);
    }
    public function test3()
    {
        $response = $this->get('/about');

        $response->assertStatus(200);
    }
    public function test4()
    {
        $response = $this->get('/contact');

        $response->assertStatus(200);
    }

}
