<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ManageGlerkTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function a_user_can_create_glerks() {
        $this->withoutExceptionHandling();

        $newGlerk = ['content' => 'test glerk'];

        $this->post('/glerks', $newGlerk);

        $this->assertDatabaseHas('glerks', $newGlerk);
    }
}
