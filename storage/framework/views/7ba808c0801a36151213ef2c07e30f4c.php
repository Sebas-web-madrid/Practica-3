<?php $__env->startSection('title', 'Respuesta Formulario añadir Libro'); ?>
<?php $__env->startSection('content'); ?>
    <?php if($id > 0): ?>
        <p>El libro se ha añadido correctamente</p>
    <?php else: ?>
        <p>Ha ocurrido un error al insertar el libro</p>
    <?php endif; ?>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\libros\resources\views/addLibroOK_Formulario.blade.php ENDPATH**/ ?>