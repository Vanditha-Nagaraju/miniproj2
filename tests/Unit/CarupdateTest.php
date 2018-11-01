<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class CarupdateTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $updatecar = Car::find(4);
        $updatecar->year = 2000;
        $updatecar->save();
        $this->assertDatabaseHas('cars', ["year" => '2000']);
    }
}
