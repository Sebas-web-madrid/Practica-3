<style>
    input[type=text],
    select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 40px;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type=number],
    select {
        width: 50%;
        padding: 12px 20px;
        margin: 8px 40px;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type=bool],
    select {
        width: 6%;
        padding: 12px 20px;
        margin: 8px 20px;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type=submit] {
        width: 92%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 40px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

    /* div {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        } */

    .principal {
        border: solid 1px black;
        width: 620px;
        height: 650px;
        margin-left: 100px;
        margin-top: 15px;
    }

    .principal1 {
        /* border: solid 1px black; */
        width: 420px;
        height: 50px;
        margin-left: 40px;
        margin-top: 15px;
        font-size: 2.7rem;
        padding: 5px;
    }

    label {
        margin: 1px 40px;
    }

    .contenedor-flexbox {
        display: flex;
        /*Convertimos al menú en flexbox*/
        justify-content: space-between;
        /*Con esto le indicamos que margine todos los items que se encuentra adentro hacia la derecha e izquierda*/
        align-items: center;
        /*con esto alineamos de manera vertical*/
    }
</style>
<div>
    <div class='p-4 mb-4  text-blue-700 bg-blue-100 rounded-lg text-lg '>
        <h1
            class="principal1 text-lg font-normal leading-normal mt-0 mb-2 text-white text-center bg-gray-500 rounded-lg">
            Nuevo Libro
        </h1>
    </div>
    {{-- <div class='principal flex p-4 mb-4 text-sm text-blue-700 bg-blue-100 rounded-lg contenedor-flexbox'> --}}
        <div class="contenedor-flexbox">
        <form wire:submit.prevent="addLibro" style='width: 40%;'>
            @csrf
            {{-- <div style="display: flex; flex-direction: column"> --}}
            <div >
                <label for="">Titulo</label>
                <input type="text" wire:model='titulo' placeholder= 'Teclea el título'>
                <label for="">Autor</label>
                <input type="text" wire:model='autor' placeholder= 'Teclea el autor'>
                <label for="">Año Publicacion</label>
                <input type="number" wire:model='anno' placeholder= 'Teclea el año de publicación'>
                <label for="">Género</label>
                <input type="text" wire:model='genero' placeholder= 'Teclea el género'>
                <label for="">Disponible - Teclea 0 o 1</label>
                <input type="bool" wire:model='disponible' >
                <label for="">Devuelto - Teclea 0 o 1</label>
                <input type="bool" wire:model='devuelto'>
                <input type="submit" value='añadir Libro' >
                <br>
                <br>
            </div>
        </form>
        <div style="width:50%; display:inline-block; margin-top: -130px;>
            <p wire:model="errores"
            style="color:red;"> {{ $errores }}</p>
            <table class=" text-sm text-left text-gray-500 dark:text-gray-400 ">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 ">
                    <th scope="col" class="px-6 py-3">Titulo</th>
                    <th scope="col" class="px-6 py-3">Autor</th>
                    <th scope="col" class="px-6 py-3">Año Publicacion</th>
                    <th scope="col" class="px-6 py-3">Género</th>
                    <th scope="col" class="px-6 py-3">Disponible</th>
                    <th scope="col" class="px-6 py-3">Devuelto</th>
                </thead>
                <tbody>
                    @foreach ($libros as $libro)
                        <tr class="bg-white border-b bg-gray-800 border-gray-700">
                            <td>{{ $libro->titulo }}</td>
                            <td>{{ $libro->autor }}</td>
                            <td>{{ $libro->anno_publicacion }}</td>
                            <td>{{ $libro->genero }}</td>
                            <td >{{ $libro->disponible == 1 ? "Si" : "No"  }}</td>
                            <td >{{ $libro->devuelto == 1 ? "Si" : "No"  }}</td>
                        </tr>
                    @endforeach
                </tbody>
        </div>
        </table>
    </div>
</div>
