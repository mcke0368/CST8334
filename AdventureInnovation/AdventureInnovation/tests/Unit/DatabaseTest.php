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

        // Test to see if there are any values in the tables
        $this->assertDatabaseHas('users',['firstname' => 'admin']);
        $this->assertDatabaseHas('guides',['id' => '1']);
        $this->assertDatabaseHas('certifications',['cert_name' => 'Rock Climbing Training']);
        $this->assertDatabaseHas('migrations',['id' => '1']);

        //For now this tests if these tables have no values
        //once factories are set up then we can set these to assertDatabaseHas
        $this->assertDatabaseMissing('climbing_logs',['id' => '1']);
        $this->assertDatabaseMissing('base_logs',['id' => '1']);
        $this->assertDatabaseMissing('companies',['id' => '1']);
        $this->assertDatabaseMissing('company_guide',['id' => '1']);
        $this->assertDatabaseMissing('employees',['id' => '1']);
        $this->assertDatabaseMissing('kayaking_logs',['id' => '1']);
        $this->assertDatabaseMissing('logbook_types',['id' => '1']);
        $this->assertDatabaseMissing('logbooks',['id' => '1']);
        $this->assertDatabaseMissing('logs',['id' => '1']);
        $this->assertDatabaseMissing('password_resets',['email' => '1']);
        $this->assertDatabaseMissing('trips',['id' => '1']);


    }
}
