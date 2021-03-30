<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo e(BASEURL); ?>public/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo e(BASEURL); ?>public/css/datatables.min.css">

    <title><?php echo $__env->yieldContent('title'); ?></title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="<?php echo e(BASEURL); ?>">MVC</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link" href="<?php echo e(BASEURL); ?>auth/logout">Logout</a>
                </div>
            </div>
        </div>
    </nav>

    <?php echo $__env->yieldContent('content'); ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo e(BASEURL); ?>public/js/jquery-3.4.1.js"></script>
    <script src="<?php echo e(BASEURL); ?>public/js/popper.min.js"></script>
    <script src="<?php echo e(BASEURL); ?>public/js/bootstrap.min.js"></script>
</body>

</html><?php /**PATH E:\xampp\htdocs\mvc\app\views/layouts/app.blade.php ENDPATH**/ ?>