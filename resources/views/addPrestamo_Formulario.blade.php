@extends('app')
@section('title', 'Formulario añadir Prestamo')
@section('content')
<style>

    input[type=number], select {
      width: 50%;
      padding: 12px 20px;
      margin: 8px 40px;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
    input[type=date], select {
      width: 90%;
      padding: 12px 20px;
      margin: 8px 40px;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    input[type=submit] {
      width: 92%;
      background-color: blue;
      color: white;
      padding: 14px 20px;
      margin: 8px 40px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    input[type=submit]:hover {
      background-color: rgb(3, 3, 152);
    }
    .principal{
      border: solid 1px black;
      width: 340px;
      height: 430px;
      margin-left:100px;
      margin-top: 15px;
    }
    .principal1{
      /* border: solid 1px black; */
      width: 340px;
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
    <h1 class="principal1 text-lg font-normal leading-normal mt-0 mb-2 text-white text-center bg-gray-500"> Crear Prestamo</h1>
  </div>
   <div class= 'principal flex p-4 mb-4 text-sm text-blue-700 bg-blue-100 rounded-lg'>
    <form action="{{ route('addPrestamo') }}" method="get">
        @csrf
        <div style="display: flex; flex-direction: column">

            <label for="">Id_Usuario</label>
            <input type="number" name="user_id" value = 'User'>
            <label for="">Id_Libro</label>
            <input type="number" name="book_id">
            <label for="">Fecha de Préstamo</label>
            <input type="date" name="fecha_prestamo">
            <label for="">Fecha de Devolución</label>
            <input type="date" name="fecha_devolucion">

        </div>
        <input type="submit" value= 'enviar datos'>
    </form>
</div>
    @endsection

