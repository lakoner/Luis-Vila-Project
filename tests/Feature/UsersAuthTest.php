<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Categoria;
use App\Obra;
use App\User;

class UsersAuthTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUserAuthCanAcces()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)->get('/home');

        $response->assertStatus(200);
    }

    public function testUserAuthCanAccess()
    {

        $response = $this->get('/home');

        $response->assertStatus(302);

        $response->assertRedirect('/login');

    }





}
