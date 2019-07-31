<?php

namespace Tests\Unit;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Str;

class UserTest extends TestCase
{
    use RefreshDatabase, WithFaker;
    /** @test */
    public function a_user_requires_a_username() {

        $user = [
            'name' => $this->faker->name(),
            'email' => $this->faker->safeEmail(),
            'username' => '',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];

        $this->post('/register', $user)
            ->assertSessionHasErrors('username');
    }
}
