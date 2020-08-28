<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{

    protected $fillable = ['name'];

    public function obras()
    {
    return $this->hasMany(Obra::class);
    }

    static function filterByCategory($id)
    {

        $obras = Obra::where('categoria_id','=', $id)
           ->get();

        return $obras;
    }

    static function filterBySeries($id)
    {

        $series = Serie::where('categoria_id','=', $id)
           ->get();

        return $series;
    }

    static function id(String $name)
    {
        $categoria = Categoria::where('name','=',$name)->first();

        return $categoria->id;
    }
}
