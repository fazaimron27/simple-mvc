<?php $__env->startSection('title', 'Users'); ?>

<?php $__env->startSection('content'); ?>
<div class="container mt-3">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    List Users
                    <a href="<?php echo e(BASEURL); ?>/user/create" class="badge badge-primary">Add</a>
                </div>
                <div class="card-body">
                    <table class="table table-hover" id="table_user">
                        <thead>
                            <tr>
                                <th scope="col">Username</th>
                                <th scope="col">Email</th>
                                <th scope="col">Created at</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($user->username); ?></td>
                                <td><?php echo e($user->email); ?></td>
                                <td><?php echo e($user->created_at->diffForHumans()); ?></td>
                                <td align="center"><a href="<?php echo e(BASEURL); ?>/user/edit/<?php echo e($user->id); ?>"
                                        class="badge badge-secondary">Edit</a></td>
                                <td align="center"><a onclick="return confirm('Are You Sure');"
                                        href="<?php echo e(BASEURL); ?>/user/destroy/<?php echo e($user->id); ?>"
                                        class="badge badge-danger">Delete</a></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\mvc\app\views/user/index.blade.php ENDPATH**/ ?>