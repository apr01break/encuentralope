<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Subcategoria;

class Categoria extends Model
{
    protected $table      = 'categorias';
    protected $primaryKey = 'id';
    public $timestamps    = true;
    protected $fillable   = [
        'nombre'
    ];
    public function subcategorias()
    {
       return $this->hasMany(Subcategoria::class,'categoria_id');
    }
}
