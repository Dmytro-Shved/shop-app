<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LiquidsTest extends TestCase
{

    public function test_home_page_has_liquids_data(): void
    {
        $response = $this->get('/');

        $response->assertDontSee('No liquids in the database');

        $response->assertStatus(200);
    }
}
