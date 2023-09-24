<?php $__env->startSection('title', 'Editando Libro'); ?>
<?php $__env->startSection('content'); ?>
    <style>
        input[type=text],
        select {
            width: 160%;
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
            width: 50%;
            padding: 12px 20px;
            margin: 8px 40px;
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
    
    <div class='p-4 mb-4  text-blue-700 bg-blue-100 rounded-lg text-lg '>
        <h1 class="principal1 text-lg font-normal leading-normal mt-0 mb-2 text-white text-center bg-gray-500 rounded-lg"> Editar Libro
        </h1>
    </div>
    <div class='principal flex p-4 mb-4 text-sm text-blue-700 bg-blue-100 rounded-lg'>
        <form action="<?php echo e(route('updateLibro')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div style="display: flex; flex-direction: column">
            <label for="">Titulo</label>
            <input type="text" name="titulo" value="<?php echo e($libro->titulo); ?>">
            <label for="">Autor</label>
            <input type="text" name="autor" value="<?php echo e($libro->autor); ?>">
            <label for="">Año de publicacion</label>
            <input type="number" name="anno_publicacion" value="<?php echo e($libro->anno_publicacion); ?>">
            <label for="">Género</label>
            <input type="text" name="genero" value="<?php echo e($libro->genero); ?>">
            <label for="">Disponible</label>
            <input type="bool" name="disponible" value="<?php echo e($libro->disponible); ?>">
            <label for="">Devuelto</label>
            <input type="bool" name="devuelto" value="<?php echo e($libro->devuelto); ?>">
            <input type="submit" value='enviar datos'>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\libros\resources\views/mostrarDatosLibroForm.blade.php ENDPATH**/ ?>