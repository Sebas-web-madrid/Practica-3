<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Libro;
use App\Models\PrestamosModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class LibrosController extends Controller
{

    public function showFormularioAddLibro(){

        $accion = 'Añadir Libro';
        return view('addLibro_Formulario', compact('accion') );
    }
    public function addLibroFormulario(Request $request){
        $id_libro = Libro::create($request);

        return view('addLibroOK_Formulario' , ['id' => $id_libro]);
    }
    public function showMostrarTodosLibros(){
        $libro = Libro::todosLibros();

        return view('mostrarLibros' )->with('libro', $libro );
    }
    public function deleteLibro($id){
        Libro::destroy($id);
        return Redirect::to('mostrarLibros');
    }
    public function updateLibroForm($id){
        $libro = Libro::findLibroID($id);
        Session::put('id', $id);
        // dd($libro);
        return view('mostrarDatosLibroForm', compact('libro'));
    }
    public function updateLibro(Request $request){
        $id = Session::get('id');
        Libro::updatedLibroID($id, $request);
        return Redirect::to('/mostrarLibros');
    }
    public function showPrueba(){
        $prestamos = PrestamosModel::all();

        if(isset($prestamos)){
            foreach($prestamos as $prestamo)
            if($prestamo->libro->titulo == 'La isla'){
                return $prestamo->libro;
            }
            else{
                return "No está prestado este libro";
                }
        }
        else{
            return "No existe el prestamo";
        }
        // dd(PrestamosModel::find(1)->libro);
    }
}
