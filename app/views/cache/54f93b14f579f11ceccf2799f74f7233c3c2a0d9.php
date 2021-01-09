<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo e(BASEURL); ?>/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo e(BASEURL); ?>/public/css/datatables.min.css">

    <title>Login</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header">Login Form</div>
                    <div class="card-body">
                        <form action="<?php echo e(BASEURL); ?>/auth/postLogin" method="post">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" name="username" id="username" class="form-control"
                                    placeholder="username" autofocus autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control"
                                    placeholder="password" autocomplete="off">
                            </div>
                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo e(BASEURL); ?>/public/js/jquery-3.4.1.js"></script>
    <script src="<?php echo e(BASEURL); ?>/public/js/popper.min.js"></script>
    <script src="<?php echo e(BASEURL); ?>/public/js/bootstrap.min.js"></script>
</body>

</html><?php /**PATH E:\xampp\htdocs\mvc\app\views/auth/login.blade.php ENDPATH**/ ?>