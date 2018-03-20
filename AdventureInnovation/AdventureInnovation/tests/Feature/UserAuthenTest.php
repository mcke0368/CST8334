<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use env;

class UserAuthenTest extends TestCase
{
    /**
     * A basic test to make sure users can login.
     *
     * @return void
     */
    public function testLogin()
    {
        //simple test to make sure admin is in the db at all times
        //will later upgrade this to actual user authentication
        $this->assertDatabaseHas('users',['firstname' => env('ADMIN_USER_NAME')]);
        $this->assertDatabaseHas('users',['lastname' => env('ADMIN_USER_NAME')]);
        $this->assertDatabaseHas('users',['username' => env('ADMIN_USER_NAME')]);
        $this->assertDatabaseHas('users',['email' => env('ADMIN_USER_EMAIL')]);
    }
}
