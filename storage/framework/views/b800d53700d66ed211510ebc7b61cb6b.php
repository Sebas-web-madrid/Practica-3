<tbody>

    <tr class="bg-white border-b bg-gray-800 border-gray-700">
        <td ><?php echo e($item->titulo); ?></td>
        <td ><?php echo e($item->autor); ?></td>
        <td ><?php echo e($item->anno_publicacion); ?></td>
        <td ><?php echo e($item->genero); ?></td>
        <td ><?php echo e($disponible = $item->disponible == 1 ? "Si" : "No"); ?></td>

        <td >
            <div style= "display:flex">
            <a href="http://libros.test/deleteLibro/<?php echo e($item->id); ?>"><button style="background-color: red; color:white">Borrar</button></a>
            <a href="http://libros.test/updateLibroForm/<?php echo e($item->id); ?>"><button style="background-color: green; color:white">Modificar</button></a>
        </div>
        </td>

    </tr>

</tbody>
<?php /**PATH C:\laragon\www\libros\resources\views/tabla.blade.php ENDPATH**/ ?>