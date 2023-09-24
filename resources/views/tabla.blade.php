<tbody>

    <tr class="bg-white border-b bg-gray-800 border-gray-700">
        <td >{{ $item->titulo }}</td>
        <td >{{ $item->autor }}</td>
        <td >{{ $item->anno_publicacion }}</td>
        <td >{{ $item->genero }}</td>
        <td >{{ $disponible = $item->disponible == 1 ? "Si" : "No"  }}</td>

        <td >
            <div style= "display:flex">
            <a href="http://libros.test/deleteLibro/{{ $item->id }}"><button style="background-color: red; color:white">Borrar</button></a>
            <a href="http://libros.test/updateLibroForm/{{ $item->id }}"><button style="background-color: green; color:white">Modificar</button></a>
        </div>
        </td>

    </tr>

</tbody>
