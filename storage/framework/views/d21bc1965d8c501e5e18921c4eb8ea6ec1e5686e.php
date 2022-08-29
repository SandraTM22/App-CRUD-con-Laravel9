<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto Laravel</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
</head>
<body>
<header>
    <nav class="flex items-center justify-around flex-wrap bg-teal-500 p-6">
        <div class="flex items-center text-white mr-6">
            <span class="font-semibold text-xl tracking-tight">Example LARAVEL</span>
        </div>
        <div class="block lg:hidden">
            <button id="btn" class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
                <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
            </button>
        </div>
        <div id="menu" class="w-full block lg:flex lg:items-center lg:w-auto hidden">
            <div class="text-sm lg:flex-grow">
                <a href="<?php echo e(route('home')); ?>" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">
                    Home
                </a>
                <a href="<?php echo e(route('about')); ?>" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">
                    About us
                </a>
                <a href="<?php echo e(route('Cursos.index')); ?>" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">
                    Blog
                </a>
                <a href="<?php echo e(route('contact')); ?>" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">
                    Contact
                </a>
            </div>
        </div>
    </nav>

</header>
<div class="mx-auto p-6 ">
    <?php echo $__env->yieldContent('content'); ?>
</div>

</body>
<script src="<?php echo e(asset('js/app.js')); ?>"></script>
</html>
<?php /**PATH /var/www/html/resources/views/welcome.blade.php ENDPATH**/ ?>