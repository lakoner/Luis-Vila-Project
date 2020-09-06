<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Categoria;
use App\Obra;
use Illuminate\Foundation\Testing\RefreshDatabase;


class ObraTest extends TestCase
{
use RefreshDatabase;

    public function test_filtro_categorias()
    {


        $categorias =  factory(Categoria::class,2)->create();
        $obras_devolver = factory(Obra::class,2)->create(['categoria_id'=> $categorias[0]->id]);
        $obra_descartar = factory(Obra::class)->create(['categoria_id'=> $categorias[1]->id]);


        $obras_filtradas = Obra::filterByCategory($categorias[0]->id);

        $this->assertEquals(2,count($obras_filtradas));
        $this->assertEquals($categorias[0]->id,$obras_filtradas[0]->categoria_id);


    }

    public function text_filtro_series()
    {
        $series = factory(Serie::class,2)-create();
        $obras_devolver = factory(Obra::class,2)->create(['serie_id'=> $series[0]->id]);
        $obra_descartar = factory(Obra::class)->create(['serie_id'=> $series[1]->id]);

        $obras_filtradas = Obra::filterBySerie($serie_id[0]->id);

        $this->assertEquals(2,count($obras_filtradas));
        $this->assertEquals($series[0]->id,$obras_filtradas[0]->series_id);


    }
}
