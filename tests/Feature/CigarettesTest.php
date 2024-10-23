<?php

namespace Tests\Feature;

use App\Models\Cigarette;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CigarettesTest extends TestCase
{
    public function test_home_page_has_cigarettes_data(): void
    {
        $response = $this->get('/');

        $response->assertSee('Gene Pod');

        $response->assertStatus(200);
    }
}
