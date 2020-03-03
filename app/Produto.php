<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'produtos';
    protected $fillable = ['id','nome','categoria'];
    public $timestamps=false;


    public function categoria()
    {
        return $this->hasMany(Categoria::class);
    }
}
