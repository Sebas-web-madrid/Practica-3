<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Prestamo extends Model
{
    use HasFactory;
    public static function createPrestamo(Request $request){
        $prestamo = new Prestamo();
        $prestamo->user_id= $request->input('user_id');
        $prestamo->book_id = $request->input('book_id');
        $prestamo->fecha_prestamo = $request->input('fecha_prestamo');
        $prestamo->fecha_devolucion= $request->input('fecha_devolucion');
        $prestamo->save();
        return $prestamo->id;
    }
    public static function updatedPrestamoID($id, Request $request){
        $prestamo = Prestamo::find($id);
        $prestamo->user_id = $request->input('user_id');
        $prestamo->book_id = $request->input('book_id');
        $prestamo->fecha_prestamo = $request->input('fecha_prestamo');
        $prestamo->fecha_devolucion = $request->input('fecha_devolucion');
        $prestamo->save();
    }
    public static function destroyPrestamo($ids){
        $prestamo = Prestamo::find($ids);
        $prestamo->delete();
    }
    public static function todosPrestamos(){
        return Prestamo::all();
    }
    public static function findPrestamoID($id){
        return Prestamo::find($id);
    }
}
