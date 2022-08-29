<?php $__env->startSection('content'); ?>
    <h2 class="border-b-2 border-r-sky-900 mb-2 p-2 italic">Blog</h2>
    <div class="md:container md:mx-auto p-4 ">
        <?php if(session()->has('message')): ?>
            <div class="bg-green-100 text-green-900 p-4 m-2">
                <?php echo e(session()->get('message')); ?>

            </div>
        <?php endif; ?>
        <ul>
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class=" grid grid-cols-1 gap-2 mb-4 shadow-lg  sm:grid-cols-2 sm:hover:shadow-lg">
                <li class="list-none p-4 font-sans mr-2 mt-2">
                    <a href="<?php echo e(route('Cursos.show',$post->id)); ?>"><?php echo e($post -> title); ?></a>
                    
                </li>
                <div class="flex gap-2.5 justify-self-center  sm:justify-self-end md:mr-2">
                    <form method="POST" action="<?php echo e(route('Cursos.destroy', $post ->id)); ?>" >
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="_method" value="DELETE">
                        <div class="w-28 mt-2  flex bg-transparent hover:bg-red-600 text-red-700 font-semibold hover:text-white py-2 px-4 border border-red-500 hover:border-transparent rounded p-4">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                            <input type="submit" value="Borrar">
                        </div>
                    </form>
                    <div class="w-28 my-2 flex bg-transparent hover:bg-green-700 text-green-700 font-semibold hover:text-white py-2 px-4 border border-green-500 hover:border-transparent rounded p-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                        <a href="<?php echo e(route('Cursos.edit',$post ->id)); ?>">Editar</a>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/blog/blog.blade.php ENDPATH**/ ?>