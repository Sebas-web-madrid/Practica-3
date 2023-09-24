<?php $__env->startSection('title', 'Primeros pasos Livewire '); ?>
<?php $__env->startSection('content'); ?>
<?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('tabla-libro-component');

$__html = app('livewire')->mount($__name, $__params, 'b3rksOI', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\libros\resources\views/primerComponente.blade.php ENDPATH**/ ?>