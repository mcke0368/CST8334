<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DatabaseTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testDB()
    {
        // this will need to be changed to use a fake db for testing
        // when put into production
        // $user = factory(App\User::class)->create();
        // $this->assertDatabaseHas($user);
        $this->assertDatabaseHas('users',['firstname' => 'bob']);
    }
}
