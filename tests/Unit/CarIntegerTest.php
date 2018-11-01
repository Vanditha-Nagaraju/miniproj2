<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class CarIntegerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $carsyear = Car::inRandomOrder()->first();
        $year= (int)$carsyear->year;
        $this->assertInternalType("int", $year);
    }
}
