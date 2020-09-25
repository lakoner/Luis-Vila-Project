<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Obra extends Model
{
    protected $fillable = ['name','image','style','year','categoria_id','serie_id'];

    public function categoria()
    {
    return $this->belongsTo(Categoria::class);
    }

    public function serie()
    {
    return $this->belongsTo(Serie::class);
    }



    static function filterByCategory($id)
    {

        $obras = Obra::where('categoria_id','=', $id)
           ->get();

        return $obras;
    }

    static function filterBySerie($id)
    {

        $obras = Obra::where('serie_id','=', $id)
        ->get();

     return $obras;
    }



}
