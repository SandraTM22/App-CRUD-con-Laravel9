<?php $__env->startSection('content'); ?>
    <h2 class="border-b-2 border-r-sky-900 mb-2 p-2 italic">Crear nuevo Post</h2>
    <div class="container mx-auto px-8 mt-6">
        <form action="<?php echo e(route('Cursos.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <input type="text" hidden  name="slug" value="slug por defecto">
            <div class="w-full flex gap-4 justify-between flex-col mb-4">
                <label class="text-lg font-medium" for="titulo">Título</label>
                <textarea name="titulo" id="titulo" placeholder="Introduce el titulo..." cols="30" rows="3"></textarea>
            </div>
            <div class="w-full flex gap-4 justify-between flex-col mb-4">
                <label class="text-lg font-medium" for="body">Contenido</label>
                <textarea class="w-full" name="body" id="body" cols="30" rows="10" placeholder="Escribe aquí el contenido de tu post..."></textarea>
            </div>
            <input class="bg-teal-500 hover:bg-teal-700 text-white font-bold py-2 px-4 rounded" type="submit" value="Crear Post">
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/blog/create.blade.php ENDPATH**/ ?>