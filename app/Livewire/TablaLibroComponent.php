<?php

namespace App\Livewire;

use App\Models\Libro;
use Livewire\Component;

class TablaLibroComponent extends Component
{
    public $libros = [];
    public $titulo;
    public $autor;
    public $anno;
    public $genero;
    public $disponible;
    public $devuelto;
    public $errores;

    public function mount(){
        $this->libros = Libro::todosLibros();
    }

    public function addLibro(){

        if( $this->anno > date("Y")){
            $this->errores = "El año de publicación no puede ser mayor que el año actual";
        }
        else{
            $this->errores = "";
            // crear un nuevo libro
            //Libro::createValores($this->titulo,$this->autor,$this->anno,$this->genero,$this->disponible,$this->devuelto);
            $newLibro = Libro::createValores($this->titulo,$this->autor,$this->anno,$this->genero,$this->disponible,$this->devuelto);

            // Recargo valores
        // $this->libros = Libro::todosLibros();
            $this->libros[] = $newLibro;
            // limpio valores
            $this->titulo = '';
            $this->autor = '';
            $this->anno = '';
            $this->genero = '';
            $this->disponible = '';
            $this->devuelto = '';
        }

    }
    public function render()
    {
        return view('livewire.tabla-libro-component');
    }
}
