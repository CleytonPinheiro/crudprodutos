<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table ='categorias';
    protected $fillable = ['id','nome'];
    public $timestamps=false;


    public function produto()
    {
        return $this->belongsTo(Produto::class);
    }

    public function produtoCat()
    {
        return $this->hasMany(Produto::class);
    }
}
