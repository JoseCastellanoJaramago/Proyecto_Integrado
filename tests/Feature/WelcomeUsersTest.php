<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WelcomeUsersTest extends TestCase
{
    /** @test */
    public function it_welcomes_users_with_nickname()
    {
        $this->get('saludo/Eva/EvaMarMej')
            ->assertStatus(200)
            ->assertSee('Bienvenido Eva, tu apodo es EvaMarMej');
    }

    /** @test */
    public function it_welcomes_users_without_nickname()
    {
        $this->get('saludo/Eva')
            ->assertStatus(200)
            ->assertSee('Bienvenido Eva');
    }
    
}
