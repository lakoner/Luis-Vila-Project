<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actualidad extends Model
{
    protected $fillable = ['title','subtitle','text','image','created_at','updated_at'];


    public $timestamps = false;

    static function noticia($id)
    {

        $actualidades = Actualidad::where('id','=', $id)
           ->get();

        return $actualidades;
    }

}
