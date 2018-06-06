<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Imagen;
use App\User;
use App\Subcategoria;

class Publicacion extends Model
{
    protected $table      = 'publicaciones';
    protected $primaryKey = 'id';
    public $timestamps    = true;
    protected $fillable   = [
        'subcategoria_id','user_id','titulo','descripcion','tipo','ranking','estado'
    ];
    public function user()
    {
       return $this->belongsTo(User::class,'user_id');
    }
    public function subcategoria()
    {
       return $this->belongsTo(Subcategoria::class,'subcategoria_id');
    }
    public function imagenes()
    {
       return $this->hasMany(Imagen::class,'publicacion_id');
    }
}
