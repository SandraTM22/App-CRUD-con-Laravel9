<?php $__env->startSection('content'); ?>
    <div class="flex flex-row gap-4 mb-4">
        <a class="bg-teal-500 hover:bg-teal-700 text-white font-bold px-2 rounded"href="<?php echo e(route('Cursos.index')); ?>">Volver a Blog</a>
    </div>
    <?php if(session()->has('message')): ?>
        <div class="bg-green-100 text-green-900 p-4 m-2">
            <?php echo e(session()->get('message')); ?>

        </div>
    <?php endif; ?>
    <h2 class="border-b-2 border-r-sky-900 mb-2 p-2 italic">Post Nº <?php echo e($post->id); ?></h2>
    <div class="container mx-auto px-8 mt-8">
        <h2 class="font-bold italic mb-4"><?php echo e($post->title); ?></h2>
        <p><?php echo e($post->body); ?></p>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/blog/post.blade.php ENDPATH**/ ?>