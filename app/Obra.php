<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Obra extends Model
{
    protected $fillable = ['name','image','style','year'];

    public function categorias()
    {
    return $this->hasMany(categoria::class);
    }
}
