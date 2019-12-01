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

        $user = factory('App\User')->create();
        $newGlerk = ['content' => 'test glerk'];

        $this->actingAs($user, 'api')->post('v1/glerks', $newGlerk);

        $this->assertDatabaseHas('glerks', $newGlerk);
    }
    /** @test */
    public function a_user_can_retrieve_glerks() {
        $this->withoutExceptionHandling();
        $glerk = factory('App\Glerk')->create();

        $this->actingAs($glerk->owner, 'api')
            ->get('v1/glerks')
            ->assertStatus(200)
            ->assertJsonFragment([
                'content' => $glerk->content,
            ]);
    }
}
