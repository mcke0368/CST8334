<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PagesLoadTest extends TestCase
{
    /**
     * Tests if all the pages of the website load.
     *
     * @return void
     */
    public function testPageLoad()
    {
        // MainPage
        $response = $this->get('/');
        $response->assertStatus(200);

        // Contact
        $response = $this->get('/contact');
        $response->assertStatus(200);

        // login
        $response = $this->get('/login');
        $response->assertStatus(200);

        // About
        $response = $this->get('/about');
        $response->assertStatus(200);

        //checks to make sure you can't access profile pages
        //without logging in.  Check status 302 (redirect) and
        $response = $this->get('/profile');
        $response->assertRedirect('/login');

    }
}
