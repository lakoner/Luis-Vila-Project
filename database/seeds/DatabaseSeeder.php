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
        factory(User::class)->create(['id' => 1, 'name' => 'Admin', 'email' => 'admin@cancruz.com', 'password' => bcrypt('password')]);

        factory(Categoria::class)->create(['id' => 1, 'name' => 'Pintura']);
        factory(Categoria::class)->create(['id' => 2, 'name' => 'Escultura']);
        factory(Categoria::class)->create(['id' => 3, 'name' => 'Disseny']);

        factory(Serie::class)->create(['id' => 1, 'name' => 'Derivacions','year'=>'1994']);
        factory(Serie::class)->create(['id' => 2, 'name' => 'Monestir','year'=>'1995']);
        factory(Serie::class)->create(['id' => 3, 'name' => 'Navegants','year'=>'1997']);
        factory(Serie::class)->create(['id' => 4, 'name' => 'Logos','year'=>'1998-03']);
        factory(Serie::class)->create(['id' => 5, 'name' => 'Atmans', 'year'=>'2002-03']);
        factory(Serie::class)->create(['id' => 6, 'name' => 'Nautes','year'=>'2006-09']);
        factory(Serie::class)->create(['id' => 7, 'name' => 'Exvot','year'=>'2009']);
        factory(Serie::class)->create(['id' => 8, 'name' => 'Congreso del Mundo', 'year'=>'2010']);
        factory(Serie::class)->create(['id' => 9, 'name' => 'Pa','year'=>' - sin clasificar - ']);
        factory(Serie::class)->create(['id' => 10, 'name' => 'Geofagia','year'=>'1992']);
        factory(Serie::class)->create(['id' => 11, 'name' => 'Contraris','year'=>'1993-96']);
        factory(Serie::class)->create(['id' => 12, 'name' => 'Navegants','year'=>'1997']);
        factory(Serie::class)->create(['id' => 13, 'name' => 'Logos','year'=>'1998-03']);
        factory(Serie::class)->create(['id' => 14, 'name' => 'Regions Intermitges','year'=>'2004']);
        factory(Serie::class)->create(['id' => 15, 'name' => 'Barques','year'=>'2006']);
        factory(Serie::class)->create(['id' => 16, 'name' => 'Nautes','year'=>'2006-09']);
        factory(Serie::class)->create(['id' => 17, 'name' => 'Tokyo','year'=>'2008']);
        factory(Serie::class)->create(['id' => 18, 'name' => 'Absolut','year'=>'2009-10']);
        factory(Serie::class)->create(['id' => 19, 'name' => '- sin serie -']);

        factory(Obra::class)->create(['id' => 1, 'name' => 'Nombre no especificado','image'=>asset('Luis-Vila-Project/storage/app/public/obres/Disseny/LluisVila_Paris.jpg'),
        'year'=>'1985','technique'=>'- tecnica no especificada - ','categoria_id'=>3,'serie_id'=>19]);

        factory(Actualidad::class)->create(['id' => 1, 'title' => 'Noticia1','image'=>'LluisVila__450.jpg','subtitle'=>'subtile1',
        'text'=>'Hola que tal esto es el articulo o el texto de la noticia','date'=>'2013-04-13']);

        $this->call(CategoriaSeeder::class);
        $this->call(SerieSeeder::class);
        $this->call(ObraSeeder::class);
        $this->call(ActualidadSeeder::class);
    }
}
