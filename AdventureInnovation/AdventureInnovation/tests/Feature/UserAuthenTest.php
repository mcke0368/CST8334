<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

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
        $this->assertDatabaseHas('users',['email' => 'admin@localhost']);
        $this->assertDatabaseHas('users',['password' => 'admin']);
    }
}
