<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Prestamo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class PrestamosController extends Controller
{
    public function showFormularioAddPrestamo(){

        $accion = 'Nuevo Prestamo';
        return view('addPrestamo_Formulario', compact('accion') );
    }
    public function addPrestamoFormulario(Request $request){
        $id_prestamo = Prestamo::createPrestamo($request);

        return view('addPrestamoOK_Formulario' , ['id' => $id_prestamo]);
    }
    public function showMostrarTodosPrestamos(){
        $prestamo = Prestamo::todosPrestamos();

        return view('mostrarPrestamos' )->with('prestamo', $prestamo );
    }
    public function deletePrestamo($id){
        Prestamo::destroy($id);
        return Redirect::to('mostrarPrestamos');
    }
    public function updatePrestamoForm($id){
        $prestamo = Prestamo::findPrestamoID($id);
        Session::put('id', $id);
        // dd($libro);
        return view('mostrarDatosPrestamoForm', compact('prestamo'));
    }
    public function updatePrestamo(Request $request){
        $id = Session::get('id');
        Prestamo::updatedPrestamoID($id, $request);
        return Redirect::to('/mostrarPrestamos');
    }
}
