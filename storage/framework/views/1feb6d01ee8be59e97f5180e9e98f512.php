<?php $__env->startSection('title', 'Mostrar Libros'); ?>
<?php $__env->startSection('content'); ?>
    <?php if($libro->isEmpty()): ?>
        <p>No hay libros</p>
    <?php else: ?>
        <style>
            .centrar {
                text-align: center;
            }
        </style>
        <form action="<?php echo e(route('showPrestamos')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <label for="">Usuario al  que se ha prestado el libro :</label>
            <input type="text" name="user_prestamo">

            <label for="">Titulo del libro:</label>
            <input type="text" name="titulo_libro">

            <input type="submit" value="Find">
        </form>
        <div class="relative overflow-x-auto ml-4 mt-3">
            <table class=" text-sm text-left text-gray-500 dark:text-gray-400 ">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 ">
                    <tr>
                        <th scope="col" class="px-6 py-3">Titulo</th>
                        <th scope="col" class="px-6 py-3">Autor</th>
                        <th scope="col" class="px-6 py-3 items-center">Año de Publicación</th>
                        <th scope="col" class="px-6 py-3 centrar">Género</th>
                        <th scope="col" class="px-6 py-3 centrar">Disponible</th>
                        <th scope="col" class="px-6 py-3 centrar">Acciones</th>
                    </tr>
                </thead>
                <?php echo $__env->renderEach('tabla', $libro, 'item'); ?>
            </table>
        </div>
    <?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\libros\resources\views/mostrarLibros.blade.php ENDPATH**/ ?>