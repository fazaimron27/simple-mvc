<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('content'); ?>
<div class="jumbotron text-center">
    <div class="container">
        <h1 class="display-4">Simple PHP MVC</h1>
        <p class="lead">Build using pure php, Illuminate/database, phinx database, faker, and blade template engine</p>
        <hr class="my-4">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo fugiat dicta adipisci repellat aut recusandae
            quidem sit nobis</p>
        <a class="btn btn-primary btn-lg" href="https://github.com/fazaimron27/simple_mvc" target="_blank"
            role="button">View Code</a>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\mvc\app\views/home/index.blade.php ENDPATH**/ ?>