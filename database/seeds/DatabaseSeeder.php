<?php

use Illuminate\Database\Seeder;
use Illuminate\Http\Request;
use App\User;
use App\Categoria;
use App\Serie;
use App\Obra;
use App\Noticia;
use App\Actualidad;

use App\Seriepintura;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(Request $request)
    {
        factory(User::class)->create(['id' => 1, 'name' => 'Admin', 'email' => 'admin@cancruz.com']);

        factory(Categoria::class)->create(['id' => 1, 'name' => 'Pintura']);
        factory(Categoria::class)->create(['id' => 2, 'name' => 'Escultura']);
        factory(Categoria::class)->create(['id' => 3, 'name' => 'Disseny']);


        factory(Serie::class)->create(['id' => 1, 'name' => 'Atmans', 'year'=>'2002-03']);
        factory(Serie::class)->create(['id' => 2, 'name' => 'Congres del absolut', 'year'=>'2010']);
        factory(Serie::class)->create(['id' => 3, 'name' => 'Derivacions','year'=>'1994']);
        factory(Serie::class)->create(['id' => 4, 'name' => 'Exvot','year'=>'2009']);
        factory(Serie::class)->create(['id' => 5, 'name' => 'Logos','year'=>'1998-03']);
        factory(Serie::class)->create(['id' => 6, 'name' => 'Monestir','year'=>'1995']);
        factory(Serie::class)->create(['id' => 7, 'name' => 'Nautes','year'=>'2006-09']);
        factory(Serie::class)->create(['id' => 8, 'name' => 'Navegants','year'=>'1997']);
        factory(Serie::class)->create(['id' => 9, 'name' => 'Pa','year'=>' - sense lasificar - ']);

        factory(Serie::class)->create(['id' => 10, 'name' => 'Absolut','year'=>'2009-10']);
        factory(Serie::class)->create(['id' => 11, 'name' => 'Barques','year'=>'2006']);
        factory(Serie::class)->create(['id' => 12, 'name' => 'Contraris','year'=>'1993-96']);
        factory(Serie::class)->create(['id' => 13, 'name' => 'Geofagia','year'=>'1992']);
        factory(Serie::class)->create(['id' => 14, 'name' => 'Logos','year'=>'1998-03']);
        factory(Serie::class)->create(['id' => 15, 'name' => 'Nautes','year'=>'2006-09']);
        factory(Serie::class)->create(['id' => 16, 'name' => 'Navegants','year'=>'1997']);
        factory(Serie::class)->create(['id' => 17, 'name' => 'Regions Intermitges','year'=>'2004']);
        factory(Serie::class)->create(['id' => 18, 'name' => 'Tokyo','year'=>'2008']);

        factory(Obra::class)->create(['id' => 1, 'name' => 'Obra1','image'=>'LluisVila_Navegants_Goya.jpg','year'=>'1985','technique'=>'Mixta paper i acrilic ','categoria_id'=>1]);
        factory(Actualidad::class)->create(['id' => 1, 'title' => 'Noticia1','image'=>'LluisVila__450.jpg','subtitle'=>'subtile1',
        'text'=>'Hola que tal esto es el articulo o el texto de la noticia','date'=>'2013-04-13']);

        $this->call(CategoriaSeeder::class);
        $this->call(SerieSeeder::class);
        $this->call(ObraSeeder::class);
        $this->call(ActualidadSeeder::class);
    }
}
