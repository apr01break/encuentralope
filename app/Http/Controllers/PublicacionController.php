<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Publicacion;
use Auth;
use Response;
use App\Categoria;
use App\Imagen;
use App\Subcategoria;
use Intervention\Image\ImageManagerStatic as Image;

class PublicacionController extends Controller
{
    public function inicio()
    {
        $pubs_enc = Publicacion::where('tipo','Encontré un objeto')->with('imagenes')->take(6)->get();
        $pubs_per = Publicacion::where('tipo','Perdí un objeto')->with('imagenes')->take(6)->get();
        return view('inicio',compact('pubs_enc','pubs_per'));
    }

    public function index()
    {
        $categorias = Categoria::all();
        $subcategorias = Subcategoria::all();
        return view('publicar',compact('categorias','subcategorias'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'fotos' => 'required',
            'tipo' => 'required',
            'titulo' => 'required',
            'descripcion' => 'required',
            'subcategoria_id' => 'required',
        ]);
        $pub = new Publicacion();
        $pub->user_id = Auth::id();
        $pub->subcategoria_id = $request->subcategoria_id;
        $pub->titulo = $request->titulo;
        $pub->descripcion = $request->descripcion;
        $pub->tipo = $request->tipo;
        $pub->ranking = 0;
        $pub->estado = 1;
        $pub->save();

        $fotos=Input::file('fotos');
        foreach($fotos as $foto){
            $imagen            = new Imagen();
            
            $imagen->publicacion_id = $pub->id;
            $foto=Image::make($foto->getRealPath());
            Response::make($foto->encode('jpeg','30'));
            $imagen->foto = $foto;
            $imagen->save();
        }
            

        return redirect()->route('publicar.show',['id' => $pub->id]);
    }

    public function show($id)
    {
        $pub = Publicacion::with('imagenes')->find($id);
        return view('publicacion',compact('pub'));
    }

    public function encontrados()
    {
        $pubs = Publicacion::where('tipo','Encontré un objeto')->with('imagenes')->get();
        return view('objetos_encontrados',compact('pubs'));
    }

    public function perdidos()
    {
        $pubs = Publicacion::where('tipo','Perdí un objeto')->with('imagenes')->get();
        return view('objetos_perdidos',compact('pubs'));
    }
}

