<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class MainPageTest extends TestCase
{
    /**
     * Tests the main page.
     *
     * @return void
     */
    public function testPageLoad()
    {
        // Tests if the page loads
        $response = $this->get('/');
        $response->assertStatus(200);

        // Tests if the page loads proper texts

    }

    /**
     * Tests the main page texts.
     * @return void
     */
    public function testPageTexts()
    {
        // Set up page
        $response = $this->get('/');
        // Tests if the page loads proper texts
        $response->assertSeeText("Get Yours Started");
        $response->assertSeeText("Contact");
        $response->assertSeeText("Blog");
        $response->assertSeeText("About");

    }




}
