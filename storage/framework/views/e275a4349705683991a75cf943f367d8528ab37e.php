<?php $__env->startSection('content'); ?>

    <?php if(session()->has('message')): ?>
        <div class="max-w-6xl mx-auto bg-green-100 text-green-900 p-4 m-2">
            <?php echo e(session()->get('message')); ?>

        </div>
    <?php endif; ?>
    <div class="mx-auto text-xl flex justify-between items-center border-b-2 border-r-sky-900 mb-2 p-2"">
        <h2 class=" text-xl italic">Post Nº <?php echo e($post->id); ?></h2>
        <a class="bg-teal-500 hover:bg-teal-700 text-white px-2 rounded"href="<?php echo e(route('Cursos.index')); ?>">Volver a Blog</a>
    </div>

    <div class="max-w-6xl container mx-auto px-8 mt-8">
        <h2 class="font-bold italic mb-4"><?php echo e($post->title); ?></h2>
        <p><?php echo e($post->body); ?></p>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layaut', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/blog/post.blade.php ENDPATH**/ ?>