<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Publicacion;

class Imagen extends Model
{
    protected $table      = 'imagenes';
    protected $primaryKey = 'id';
    public $timestamps    = true;
    protected $fillable   = [
        'foto','publicacion_id'
    ];
    public function publicacion()
    {
       return $this->belongsTo(Publicacion::class,'publicacion_id');
    }
}
