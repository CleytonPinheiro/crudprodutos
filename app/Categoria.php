<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = ['id','nome'];
    protected $timestamps=false;


    public function produto()
    {
        return $this->belongsTo(Produto::class);
    }
}
