@extends('app')
@section('title', 'Formulario añadir Libro')
@section('content')
<style>
    input[type=text], select {
      width: 90%;
      padding: 12px 20px;
      margin: 18px 40px;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
    input[type=number], select {
      width: 25%;
      padding: 12px 20px;
      margin: 8px 40px;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
    input[type=bool], select {
      width: 25%;
      padding: 12px 20px;
      margin: 8px 40px;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    input[type=submit] {

      background-color: #4CAF50;
      color: white;
      padding: 14px 20px;
      margin: 8px 250px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      text-align:center;
      width: 56%;
    }

    input[type=submit]:hover {
      background-color: #45a049;
    }
    .principal{
      border: solid 1px black;
      width: 620px;
      height: 650px;
      margin-left:100px;
      margin-top: 15px;
    }
    .principal1{
      /* border: solid 1px black; */
      width: 620px;
      height: 50px;
      margin-left:100px;
      margin-top: 15px;
      font-size: 2.7rem;
      padding:5px;
    }
label{
  margin: 1px 40px;
}

   </style>


<div class= 'p-4 mb-4  text-blue-700 bg-blue-100 rounded-lg text-lg '>
  <h1 class="principal1 text-lg font-normal leading-normal mt-0 mb-2 text-white text-center bg-gray-500 rounded-lg"> Añadir libros</h1>
</div>

   <div class= 'principal flex p-4 mb-4 text-sm text-blue-700 bg-blue-100 rounded-lg'>
    <form action="{{ route('addLibro') }}" method="get">
        @csrf
        <div style="display: flex; flex-direction: column">

            <label for="">Titulo</label>
            <input type="text" name="titulo" placeholder= 'Teclea el título'>
            <label for="">Autor</label>
            <input type="text" name="autor" placeholder= 'Teclea el autor'>
            <label for="">Año de publicacion</label>
            <input type="number" name="anno_publicacion" placeholder= 'Teclea el año de publicación'>
            <label for="">Género</label>
            <input type="text" name="genero" placeholder= 'Teclea el género'>
            <label for="">Disponible</label>
            <select name="disponible " >
                <option value="0" >No
                <option value="1" selected>Si
            </select>

            {{-- <input type="bool" name="disponible" placeholder= 'Teclea 0 o 1'> --}}
            <label for="">Devuelto</label>
            <select name="devuelto ">
                <option value="0" >No
                <option value="1" selected>Si
            </select>
            {{-- <input type="bool" name="devuelto" placeholder= 'Teclea 0 o 1'> --}}
            <input type="submit" value= 'enviar datos' style='width:92'>
        </div>
        <br>
        <br>

    </form>
</div>
    @endsection

