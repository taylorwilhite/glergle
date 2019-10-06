<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class GlerkTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    /** @test */
    public function it_has_an_owner() {
        $this->withoutExceptionHandling();
        $glerk = factory('App\Glerk')->create();

        $this->assertInstanceOf('App\User', $glerk->owner);
    }
}
