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
}
