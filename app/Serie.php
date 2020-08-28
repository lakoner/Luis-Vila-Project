<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    protected $fillable = ['name','year'];

    public function obra()
    {
    return $this->belongsTo(Obra::class);
    }

    // static function filter(){

    //     $series = Serie::filterBySerie($categoria->id);

    //     return $series;
    // }

}
