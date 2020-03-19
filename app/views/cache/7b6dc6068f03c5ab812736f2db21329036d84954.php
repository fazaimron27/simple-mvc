<?php $__env->startSection('title', 'Add Users'); ?>

<?php $__env->startSection('content'); ?>
<div class="container mt-3">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">Edit User</div>
                <div class="card-body">
                    <form action="<?= BASEURL; ?>/user/update/<?php echo e($user->id); ?>" method="POST">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" name="username" id="username" class="form-control"
                                value="<?php echo e($user->username); ?>">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" value="<?php echo e($user->email); ?>">
                        </div>
                        <a href="<?php echo e(BASEURL); ?>/user" class="btn btn-danger">Back</a>
                        <button type="submit" class="btn btn-primary float-right">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\mvc\app\views/user/edit.blade.php ENDPATH**/ ?>