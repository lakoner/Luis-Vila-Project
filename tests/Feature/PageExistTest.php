<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Categoria;
use App\Obra;

class PageExistTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testWelcomeExit()
    {
        $response = $this->get('/');

        $response->assertStatus(200);

        $response->assertSee('Telf. 972 58 34 77');

    }

    public function testObrasExit()
    {
        $response = $this->get('/Obras');

        $response->assertStatus(200);

        $response->assertSee('EAT ART');

    }

    public function testBiografiaExit()
    {
        $response = $this->get('/biografia');

        $response->assertStatus(200);

        $response->assertSee('Lluís Vilà i Vendrell');

    }

    public function testEatArtExit()
    {
        $response = $this->get('/eat_art');

        $response->assertStatus(200);

        $response->assertSee('Lluís Vilà desde sus comienzos');

    }

    public function testEsculturatExit()
    {
        $response = $this->get('/escultura');

        $response->assertStatus(200);

        $response->assertSee('{{$obra->name}}');

    }

    public function testDiseñoExit()
    {
        $response = $this->get('/Diseño');

        $response->assertStatus(200);

        $response->assertSee('{{$obra->name}}');

    }

    public function testPinturaExit()
    {
        $response = $this->get('/pintura');

        $response->assertStatus(200);

        $response->assertSee('{{$obra->name}}');

    }

    public function testVolcaExit()
    {
        $response = $this->get('/pintura');

        $response->assertStatus(200);

        $response->assertSee('{{$obra->name}}');

    }






}
