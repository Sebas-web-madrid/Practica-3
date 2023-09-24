<?php

namespace App\Models;

// use App\Models\Libro;
use Illuminate\Http\Request;
use App\Models\PrestamosModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Libro extends Model
{
    use HasFactory;

    public function prestamos(){
        return $this->belongsTo(PrestamosModel::class, 'book_id', 'id');
    }
    public static function create(Request $request){
        $libro = new Libro();
        $libro->titulo = $request->input('titulo');
        $libro->autor = $request->input('autor');
        $libro->anno_publicacion = $request->input('anno_publicacion');
        $libro->genero = $request->input('genero');
        $libro->disponible = $request->input('disponible');
        $libro->devuelto = $request->input('devuelto');
        $libro->save();
        return $libro->id;
    }
    public static function updatedLibroID($id, Request $request){
        $libro = Libro::find($id);
        $libro->titulo = $request->input('titulo');
        $libro->autor = $request->input('autor');
        $libro->anno_publicacion = $request->input('anno_publicacion');
        $libro->genero = $request->input('genero');
        $libro->disponible = $request->input('disponible');
        $libro->devuelto = $request->input('devuelto');
        $libro->save();
    }
    public static function destroy($ids){
        $libro = Libro::find($ids);
        $libro->delete();
    }
    public static function todosLibros(){
        return Libro::all();
    }
    public static function findLibroID($id){
        return Libro::find($id);
    }
    public static function createValores($titulo,$autor,$anno,$genero,$disponible,$devuelto){
        $libro = new Libro();
        $libro->titulo = $titulo;
        $libro->autor = $autor;
        $libro->anno_publicacion = $anno;
        $libro->genero = $genero;
        $libro->disponible = $disponible;
        $libro->devuelto = $devuelto;
        $libro->save();
        return $libro;
        //return $libro->id;
    }
    public static function findTitulo($titulo){
        return Libro::where('titulo', '=', $titulo)->get();
    }
}
