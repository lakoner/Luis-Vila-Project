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

    public function series()
    {
    return $this-belongsTo(Serie::class);
    }

    static function filterByCategory($id)
    {

        $obras = Obra::where('categoria_id','=', $id)
           ->get();

        return $obras;
    }

    static function filterBySeries($id)
    {

        $serie = Serie::where('categoria_id','=', $id)
           ->get();

        return $serie;
    }

    static function id(String $name)
    {
        $categoria = Categoria::where('name','=',$name)->first();

        return $categoria->id;
    }
}
