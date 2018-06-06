<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategoria extends Model
{
    protected $table      = 'subcategorias';
    protected $primaryKey = 'id';
    public $timestamps    = true;
    protected $fillable   = [
        'nombre','categoria_id'
    ];
    public function categoria()
    {
       return $this->belongsTo(Categoria::class,'categoria_id');
    }
    public function publicaciones()
    {
       return $this->hasMany(Publicacion::class,'subcategoria_id');
    }
}
