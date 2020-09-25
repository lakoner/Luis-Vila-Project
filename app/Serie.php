<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    protected $fillable = ['name','year'];

    public function obras()
    {
    return $this->belongsTo(Obra::class);
    }

}
