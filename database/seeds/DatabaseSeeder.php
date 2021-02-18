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
        factory(Serie::class)->create(['id' => 9, 'name' => 'Pà','year'=>' - sin clasificar - ']);
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


        factory(Obra::class)->create(['id' => 1, 'name' => 'Allen','image'=>'obres/LluisVila_Allen.jpg',
        'year'=>'desconocido','technique'=>'- desconeguda - ','categoria_id'=>3,'serie_id'=>'19']);
        factory(Obra::class)->create(['id' => 2, 'name' => 'Arquitectures','image'=>'obres/LluisVila_Arquitectures.jpg',
        'year'=>'desconocido','technique'=>'- desconeguda - ','categoria_id'=>3,'serie_id'=>'19']);
        factory(Obra::class)->create(['id' => 3, 'name' => 'Assitencia','image'=>'obres/LluisVila_Assitencia.jpg',
        'year'=>'desconocido','technique'=>'- desconeguda - ','categoria_id'=>3,'serie_id'=>'19']);
        factory(Obra::class)->create(['id' => 4, 'name' => 'Cervol','image'=>'obres/LluisVila_Cervol.jpg',
        'year'=>'desconocido','technique'=>'- desconeguda - ','categoria_id'=>3,'serie_id'=>'19']);
        factory(Obra::class)->create(['id' => 5, 'name' => 'Diferent','image'=>'obres/LluisVila_Diferent.jpg',
        'year'=>'desconocido','technique'=>'- desconeguda - ','categoria_id'=>3,'serie_id'=>'19']);
        factory(Obra::class)->create(['id' => 6, 'name' => 'Mobiliari','image'=>'obres/LluisVila_Mobiliari.jpg',
        'year'=>'desconocido','technique'=>'- desconeguda - ','categoria_id'=>3,'serie_id'=>'19']);
        factory(Obra::class)->create(['id' => 7, 'name' => 'Montserrat','image'=>'obres/LluisVila_Montserrat.jpg',
        'year'=>'desconocido','technique'=>'- desconeguda - ','categoria_id'=>3,'serie_id'=>'19']);
        factory(Obra::class)->create(['id' => 8, 'name' => 'Paris','image'=>'obres/LluisVila_Paris.jpg',
        'year'=>'desconocido','technique'=>'- desconeguda - ','categoria_id'=>3,'serie_id'=>'19']);
        factory(Obra::class)->create(['id' => 9, 'name' => 'Polos','image'=>'obres/LluisVila_Polos.jpg',
        'year'=>'desconocido','technique'=>'- desconeguda - ','categoria_id'=>3,'serie_id'=>'19']);
        factory(Obra::class)->create(['id' => 10, 'name' => 'Tempo','image'=>'obres/LluisVila_Tempo.jpg',
        'year'=>'desconocido','technique'=>'- desconeguda - ','categoria_id'=>3,'serie_id'=>'19']);



        factory(Obra::class)->create(['id' => 11, 'name' => 'Adam','image'=>'obres/LluisVila_Adam.jpg',
        'year'=>'2002-03','technique'=>"Escultures d'acer oxidat amb serigrafia",'categoria_id'=>2,'serie_id'=>'5']);
        factory(Obra::class)->create(['id' => 12, 'name' => 'Adam bessons ar','image'=>'obres/LluisVila_adam_bessons_ar.jpg',
        'year'=>'desconocido','technique'=>"Escultures d'acer oxidat amb serigrafia",'categoria_id'=>2,'serie_id'=>'5']);
        factory(Obra::class)->create(['id' => 13, 'name' => 'David','image'=>'obres/LluisVila_David.jpg',
        'year'=>'desconocido','technique'=>"Escultures d'acer oxidat amb serigrafia",'categoria_id'=>2,'serie_id'=>'5']);
        factory(Obra::class)->create(['id' => 14, 'name' => 'Equidistant','image'=>'obres/LluisVila_equidistant.jpg',
        'year'=>'desconocido','technique'=>"Escultures d'acer oxidat amb serigrafia",'categoria_id'=>2,'serie_id'=>'5']);
        factory(Obra::class)->create(['id' => 15, 'name' => 'Marylin Manson','image'=>'obres/LluisVila_Marylin_Manson.jpg',
        'year'=>'desconocido','technique'=>"Escultures d'acer oxidat amb serigrafia",'categoria_id'=>2,'serie_id'=>'5']);
        factory(Obra::class)->create(['id' => 16, 'name' => "Pa d'angel",'image'=>'obres/LluisVila_PaDangel.jpg',
        'year'=>'desconocido','technique'=>"Escultures d'acer oxidat amb serigrafia",'categoria_id'=>2,'serie_id'=>'5']);

        

        factory(Obra::class)->create(['id' => 17, 'name' => 'Absolut1','image'=>'obres/LluisVila__Absolut1.jpg',
        'year'=>'2002-03','technique'=>"Mixta, látex y serigrafia de 50x50 cm",'categoria_id'=>2,'serie_id'=>'18']);
        factory(Obra::class)->create(['id' => 18, 'name' => 'Absolut2','image'=>'obres/LluisVila__Absolut2.jpg',
        'year'=>'2009-10','technique'=>"Mixta, látex y serigrafia de 50x50 cm",'categoria_id'=>2,'serie_id'=>'18']);
        factory(Obra::class)->create(['id' => 19, 'name' => 'Absolut3','image'=>'obres/LluisVila__Absolut3.jpg',
        'year'=>'2009-10','technique'=>"Mixta, látex y serigrafia de 50x50 cm",'categoria_id'=>2,'serie_id'=>'18']);
        factory(Obra::class)->create(['id' => 20, 'name' => 'Absolut4','image'=>'obres/LluisVila__Absolut4.jpg',
        'year'=>'2009-10','technique'=>"Mixta, látex y serigrafia de 50x50 cm",'categoria_id'=>2,'serie_id'=>'18']);
        factory(Obra::class)->create(['id' => 21, 'name' => 'Absolut5','image'=>'obres/LluisVila__Absolut5.jpg',
        'year'=>'2009-10','technique'=>"Mixta, látex y serigrafia de 50x50 cm",'categoria_id'=>2,'serie_id'=>'18']);
        factory(Obra::class)->create(['id' => 22, 'name' => "Absolut6",'image'=>'obres/LluisVila__Absolut6.jpg',
        'year'=>'2009-10','technique'=>"Mixta, látex y serigrafia de 50x50 cm",'categoria_id'=>2,'serie_id'=>'18']);
        factory(Obra::class)->create(['id' => 23, 'name' => 'Absolut7','image'=>'obres/LluisVila__Absolut7.jpg',
        'year'=>'2002-03','technique'=>"Mixta, látex y serigrafia de 50x50 cm",'categoria_id'=>2,'serie_id'=>'18']);
        factory(Obra::class)->create(['id' => 24, 'name' => 'Absolut8','image'=>'obres/LluisVila__Absolut8.jpg',
        'year'=>'2009-10','technique'=>"Mixta, látex y serigrafia de 50x50 cm",'categoria_id'=>2,'serie_id'=>'18']);
        factory(Obra::class)->create(['id' => 25, 'name' => 'Absolut9','image'=>'obres/LluisVila__Absolut9.jpg',
        'year'=>'2009-10','technique'=>"Mixta, látex y serigrafia de 50x50 cm",'categoria_id'=>2,'serie_id'=>'18']);
        factory(Obra::class)->create(['id' => 26, 'name' => 'Absolut10','image'=>'obres/LluisVila__Absolut10.jpg',
        'year'=>'2009-10','technique'=>"Mixta, látex y serigrafia de 50x50 cm",'categoria_id'=>2,'serie_id'=>'18']);
        factory(Obra::class)->create(['id' => 27, 'name' => 'Absolut11','image'=>'obres/LluisVila__Absolut11.jpg',
        'year'=>'2009-10','technique'=>"Mixta, látex y serigrafia de 50x50 cm",'categoria_id'=>2,'serie_id'=>'18']);
        factory(Obra::class)->create(['id' => 28, 'name' => "Absolut12",'image'=>'obres/LluisVila__Absolut12.jpg',
        'year'=>'2009-10','technique'=>"Mixta, látex y serigrafia de 50x50 cm",'categoria_id'=>2,'serie_id'=>'18']);
        factory(Obra::class)->create(['id' => 29, 'name' => "Absolut13",'image'=>'obres/LluisVila__Absolut13.jpg',
        'year'=>'2009-10','technique'=>"Mixta, látex y serigrafia de 50x50 cm",'categoria_id'=>2,'serie_id'=>'18']);


        
        factory(Obra::class)->create(['id' => 30, 'name' => 'Derivacions1','image'=>'obres/LluisVila_Derivacions1.jpg',
        'year'=>'1994','technique'=>"Escultures de poliester i elements variats",'categoria_id'=>2,'serie_id'=>'1']);
        factory(Obra::class)->create(['id' => 31, 'name' => "Derivacions2",'image'=>'obres/LluisVila_Derivacions2.jpg',
        'year'=>'1994','technique'=>"Escultures de poliester i elements variats",'categoria_id'=>2,'serie_id'=>'1']);
        factory(Obra::class)->create(['id' => 32, 'name' => "Derivacions3",'image'=>'obres/LluisVila_Derivacions3.jpg',
        'year'=>'1994','technique'=>"Escultures de poliester i elements variats",'categoria_id'=>2,'serie_id'=>'1']);



        factory(Obra::class)->create(['id' => 33, 'name' => 'Exvot1','image'=>'obres/Exvot1.jpg',
        'year'=>'2009','technique'=>"Escultures de bronze",'categoria_id'=>2,'serie_id'=>'7']);
        factory(Obra::class)->create(['id' => 34, 'name' => "Exvot2",'image'=>'obres/Exvot2.jpg',
        'year'=>'2009','technique'=>"Escultures de bronze",'categoria_id'=>2,'serie_id'=>'7']);
        factory(Obra::class)->create(['id' => 35, 'name' => "Exvot3",'image'=>'obres/Exvot3.jpg',
        'year'=>'2009','technique'=>"Escultures de bronze",'categoria_id'=>2,'serie_id'=>'7']);
        factory(Obra::class)->create(['id' => 36, 'name' => 'Exvot1','image'=>'obres/Exvot1.jpg',
        'year'=>'2009','technique'=>"Escultures de bronze",'categoria_id'=>2,'serie_id'=>'7']);
        factory(Obra::class)->create(['id' => 37, 'name' => "Exvot2",'image'=>'obres/Exvot2.jpg',
        'year'=>'2009','technique'=>"Escultures de bronze",'categoria_id'=>2,'serie_id'=>'7']);
        factory(Obra::class)->create(['id' => 38, 'name' => "Exvot3",'image'=>'obres/Exvot3.jpg',
        'year'=>'2009','technique'=>"Escultures de bronze",'categoria_id'=>2,'serie_id'=>'7']);
        factory(Obra::class)->create(['id' => 39, 'name' => "Exvot2",'image'=>'obres/Exvot2.jpg',
        'year'=>'2009','technique'=>"Escultures de bronze",'categoria_id'=>2,'serie_id'=>'7']);
        factory(Obra::class)->create(['id' => 40, 'name' => "Exvot3",'image'=>'obres/Exvot3.jpg',
        'year'=>'2009','technique'=>"Escultures de bronze",'categoria_id'=>2,'serie_id'=>'7']);



        factory(Obra::class)->create(['id' => 41, 'name' => 'Logos1','image'=>'obres/Lluis_Vila_Logos_SenseTitol01.jpg',
        'year'=>'1998-03','technique'=>"Fusta amb serigrafia, 2,22x1,07x1cm",'categoria_id'=>2,'serie_id'=>'4']);
        factory(Obra::class)->create(['id' => 42, 'name' => "Logos2",'image'=>'obres/Lluis_Vila_LogosSenseTitol02.jpg',
        'year'=>'1998-03','technique'=>"Fusta amb serigrafia, 2,22x1,07x1cm",'categoria_id'=>2,'serie_id'=>'4']);
        factory(Obra::class)->create(['id' => 43, 'name' => "Logos3",'image'=>'obres/LluisVila_NEPTÚ.jpg',
        'year'=>'1998-03','technique'=>"Fusta amb serigrafia, 2,22x1,07x1cm",'categoria_id'=>2,'serie_id'=>'4']);
        factory(Obra::class)->create(['id' => 44, 'name' => 'Logos4','image'=>'obres/LluisVila_VENUS.jpg',
        'year'=>'1998-03','technique'=>"Fusta amb serigrafia, 2,22x1,07x1cm",'categoria_id'=>2,'serie_id'=>'4']);



        factory(Obra::class)->create(['id' => 45, 'name' => "Monestir1",'image'=>'obres/LluisVila_Monestir01.jpg',
        'year'=>'1995','technique'=>"Mixta sobre papel y serigrafía",'categoria_id'=>2,'serie_id'=>'2']);
        factory(Obra::class)->create(['id' => 46, 'name' => 'Monestir2','image'=>'obres/LluisVila_Monestir02.jpg',
        'year'=>'1995','technique'=>"Mixta sobre papel y serigrafía",'categoria_id'=>2,'serie_id'=>'2']);



        factory(Obra::class)->create(['id' => 47, 'name' => "Nautes1",'image'=>'obres/LluisVila_Nautes_1.jpg',
        'year'=>'2006-09','technique'=>"Mixta sobre papel y serigrafía",'categoria_id'=>2,'serie_id'=>'6']);
        factory(Obra::class)->create(['id' => 48, 'name' => 'Nautes2','image'=>'obres/LluisVila_Nautes_2.jpg',
        'year'=>'2006-09','technique'=>"Mixta sobre papel y serigrafía",'categoria_id'=>2,'serie_id'=>'6']);
        factory(Obra::class)->create(['id' => 49, 'name' => "Nautes3",'image'=>'obres/LluisVila_Nautes_3.jpg',
        'year'=>'2006-09','technique'=>"Mixta sobr papel y serigrafía",'categoria_id'=>2,'serie_id'=>'6']);
        factory(Obra::class)->create(['id' => 50, 'name' => 'Nautes4','image'=>'obres/LluisVila_Nautes_artaudI.jpg',
        'year'=>'2006-09','technique'=>"Mixta sobre papel y serigrafía",'categoria_id'=>2,'serie_id'=>'6']);
        factory(Obra::class)->create(['id' => 51, 'name' => 'Nautes5','image'=>'obres/LluisVila_Nautes010.jpg',
        'year'=>'2006-09','technique'=>"Mixta sobre papel y serigrafía",'categoria_id'=>2,'serie_id'=>'6']);


        factory(Obra::class)->create(['id' => 52, 'name' => 'Navegants1','image'=>'obres/LluisVila_Navegants_Oreon.jpg',
        'year'=>'1997','technique'=>"Telas técnica mixta y planchas de acero montadas sobre soporte de metal",'categoria_id'=>2,'serie_id'=>'3']);
        factory(Obra::class)->create(['id' => 53, 'name' => 'Navegants2','image'=>'obres/LluisVila_Navegants_Moises1.jpg',
        'year'=>'1997','technique'=>"Telas técnica mixta y planchas de acero montadas sobre soporte de metal",'categoria_id'=>2,'serie_id'=>'3']);
        factory(Obra::class)->create(['id' => 54, 'name' => 'Navegants3','image'=>'obres/LluisVila_Navegants_Moises2.jpg',
        'year'=>'1997','technique'=>"Telas técnica mixta y planchas de acero montadas sobre soporte de metal",'categoria_id'=>2,'serie_id'=>'3']);
        factory(Obra::class)->create(['id' => 55, 'name' => 'Navegants4','image'=>'obres/LluisVila_Navegants_Moises3.jpg',
        'year'=>'1997','technique'=>"Telas técnica mixta y planchas de acero montadas sobre soporte de metal",'categoria_id'=>2,'serie_id'=>'3']);
        factory(Obra::class)->create(['id' => 56, 'name' => 'Navegants5','image'=>'obres/LluisVila_Navegants_Moises4.jpg',
        'year'=>'1997','technique'=>"Telas técnica mixta y planchas de acero montadas sobre soporte de metal",'categoria_id'=>2,'serie_id'=>'3']);
        factory(Obra::class)->create(['id' => 57, 'name' => 'Navegants6','image'=>'obres/LluisVila_Navegants_Moises5.jpg',
        'year'=>'1997','technique'=>"Telas técnica mixta y planchas de acero montadas sobre soporte de metal",'categoria_id'=>2,'serie_id'=>'3']);

        factory(Obra::class)->create(['id' => 58, 'name' => 'Pa1','image'=>'obres/LluisVila_Jardi.jpg',
        'year'=>'desconocido','technique'=>"Esculturas de bronce",'categoria_id'=>2,'serie_id'=>'9']);
        factory(Obra::class)->create(['id' => 59, 'name' => 'Pa2','image'=>'obres/LluisVila_EscAcer02.jpg',
        'year'=>'desconocido','technique'=>"Esculturas de bronce",'categoria_id'=>2,'serie_id'=>'9']);
        factory(Obra::class)->create(['id' => 60, 'name' => 'Pa3','image'=>'obres/LluisVila_escultura_.jpg',
        'year'=>'desconocido','technique'=>"Esculturas de bronce",'categoria_id'=>2,'serie_id'=>'9']);
        factory(Obra::class)->create(['id' => 61, 'name' => 'Pa4','image'=>'obres/LluisVila_escultura_barra_cassette.jpg',
        'year'=>'desconocido','technique'=>"Esculturas de bronce",'categoria_id'=>2,'serie_id'=>'9']);
        factory(Obra::class)->create(['id' => 62, 'name' => 'Pa5','image'=>'obres/LluisVila_escultura_Barreta.jpg',
        'year'=>'desconocido','technique'=>"Esculturas de bronce",'categoria_id'=>2,'serie_id'=>'9']);
        factory(Obra::class)->create(['id' => 63, 'name' => 'Pa6','image'=>'obres/LluisVila_escultura_Explorar.jpg',
        'year'=>'desconocido','technique'=>"Esculturas de bronce",'categoria_id'=>2,'serie_id'=>'9']);
        factory(Obra::class)->create(['id' => 64, 'name' => 'Pa7','image'=>'obres/LluisVila_escultura_LA-TRENA.jpg',
        'year'=>'desconocido','technique'=>"Esculturas de bronce",'categoria_id'=>2,'serie_id'=>'9']);
        factory(Obra::class)->create(['id' => 65, 'name' => 'Pa8','image'=>'obres/LluisVila_FinsArribar.jpg',
        'year'=>'desconocido','technique'=>"Esculturas de bronce",'categoria_id'=>2,'serie_id'=>'9']);
        factory(Obra::class)->create(['id' => 66, 'name' => 'Pa9','image'=>'obres/LluisVila_Afectiu.jpg',
        'year'=>'desconocido','technique'=>"Esculturas de bronce",'categoria_id'=>2,'serie_id'=>'9']);
        factory(Obra::class)->create(['id' => 67, 'name' => 'Pa10','image'=>'obres/LluisVila_Mare.jpg',
        'year'=>'desconocido','technique'=>"Esculturas de bronce",'categoria_id'=>2,'serie_id'=>'9']);

    


    

        $this->call(CategoriaSeeder::class);
        $this->call(SerieSeeder::class);
        $this->call(ObraSeeder::class);
        $this->call(ActualidadSeeder::class);
    }
}
