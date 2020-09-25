<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Categoria;
use App\Obra;
use App\User;
use App\Serie;

class ObraManagerTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testAuthUserCanSeeObrasList()
    {
        $user = factory(User::class)->create();

        $categoria = factory(Categoria::class)->create();
        $serie = factory(Serie::class)->create();

        $obra1 = factory(Obra::class)->create(['categoria_id'=>1,'serie_id'=>1]);
        $obra2 = factory(Obra::class)->create(['categoria_id'=>1,'serie_id'=>1]);

        $response = $this->actingAs($user)
            ->get('/obra');
        $response->assertStatus(200);

    }

    public function testNoAuthUserCanNotSeeObrasList()
    {

        $response = $this->get('/obra');

        $response->assertStatus(302);

        $response->assertRedirect('/login');

    }


    public function testAuthUserCanCreateObra()
    {
        $user = factory(User::class)->create();

        $this->browser->visit('/obra/create')
            ->name;


    }

}
