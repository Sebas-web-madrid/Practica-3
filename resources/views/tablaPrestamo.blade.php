<tbody>

    <tr class="bg-white border-b bg-gray-800 border-gray-700">
        <td >{{ $item->user_id}}</td>
        <td >{{ $item->book_id }}</td>
        <td >{{ $item->fecha_prestamo }}</td>
        <td >{{ $item->fecha_devolucion }}</td>


        <td >
            <div style= "display:flex">
            <a href="http://libros.test/deletePrestamo/{{ $item->id }}"><button style="background-color: red; color:white">Borrar</button></a>
            <a href="http://libros.test/updatePrestamoForm/{{ $item->id }}"><button style="background-color: green; color:white">Modificar</button></a>
        </div>
        </td>

    </tr>

</tbody>
