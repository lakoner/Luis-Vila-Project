<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Obra extends Model
{
    protected $fillable = ['name','image','style','year','categoria_id'];

    public function categoria()
    {
    return $this->belongsTo(Categoria::class);
    }

    static function filterByCategory($id)
    {

        $obras = Obra::where('categoria_id','=', $id)
           ->get('categoria_id');

        return $obras;
    }
}
