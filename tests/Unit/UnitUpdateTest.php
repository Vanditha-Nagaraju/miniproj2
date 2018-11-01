<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class UnitUpdateTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $updateuser = User::find(40);
        $updateuser->name = 'Steve Smith';
        $updateuser->save();
        $this->assertDatabaseHas('users', ["name" => 'Steve Smith']);
    }
}
