<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Categoria;
use App\Serie;
use App\Obra;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create(['id' => 1, 'name' => 'Admin', 'email' => 'admin@cancruz.com']);


        factory(Obra::class)->create(['id' => 1, 'name' => 'Obra1','image'=>'','style'=>'mixta','year'=>'1985','categoria_id'=>2]);

        factory(Categoria::class)->create(['id' => 1, 'name' => 'Pintura']);
        factory(Categoria::class)->create(['id' => 2, 'name' => 'Escultura']);

        factory(Serie::class)->create(['id' => 1, 'name' => 'Atmans']);
        factory(Serie::class)->create(['id' => 2, 'name' => 'Congres del absolut']);
        factory(Serie::class)->create(['id' => 3, 'name' => 'Derivacions']);
        factory(Serie::class)->create(['id' => 4, 'name' => 'Exvot']);
        factory(Serie::class)->create(['id' => 5, 'name' => 'Logos']);
        factory(Serie::class)->create(['id' => 6, 'name' => 'Monestir']);
        factory(Serie::class)->create(['id' => 7, 'name' => 'Nautes']);
        factory(Serie::class)->create(['id' => 8, 'name' => 'Navegants']);
        factory(Serie::class)->create(['id' => 9, 'name' => 'Pa']);
        factory(Serie::class)->create(['id' => 10, 'name' => 'Absolut']);
        factory(Serie::class)->create(['id' => 11, 'name' => 'Barques']);
        factory(Serie::class)->create(['id' => 12, 'name' => 'Contraris']);
        factory(Serie::class)->create(['id' => 13, 'name' => 'Geofagia']);
        factory(Serie::class)->create(['id' => 14, 'name' => 'Logos']);
        factory(Serie::class)->create(['id' => 15, 'name' => 'Nautes']);
        factory(Serie::class)->create(['id' => 16, 'name' => 'Navegants']);
        factory(Serie::class)->create(['id' => 17, 'name' => 'Regions Intermitges']);
        factory(Serie::class)->create(['id' => 18, 'name' => 'Tokyo']);

        $this->call(CategoriaSeeder::class);
        $this->call(SerieSeeder::class);
        $this->call(ObraSeeder::class);
    }
}
