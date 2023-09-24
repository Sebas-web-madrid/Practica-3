<?php $__env->startSection('title', 'Mostrar Préstamos'); ?>
<?php $__env->startSection('content'); ?>
    <?php if($prestamo->isEmpty()): ?>
        <p>No hay prestamos</p>
    <?php else: ?>

        <div class="relative overflow-x-auto  ml-4 mt-3">
            <table class=" text-sm text-center text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">Id Usuario</th>
                        <th scope="col" class="px-6 py-3">Id Libro</th>
                        <th scope="col" class="px-6 py-3">Fecha de Préstamo</th>
                        <th scope="col" class="px-6 py-3">Fecha de Devolución</th>
                        <th scope="col" class="px-6 py-3">Acciones</th>

                    </tr>
                </thead>
                <?php echo $__env->renderEach('tablaPrestamo', $prestamo, 'item'); ?>
            </table>
        </div>
    <?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\libros\resources\views/mostrarPrestamos.blade.php ENDPATH**/ ?>