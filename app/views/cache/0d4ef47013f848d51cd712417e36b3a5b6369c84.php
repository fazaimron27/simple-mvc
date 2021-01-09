<?php $__env->startSection('title', 'Posts'); ?>

<?php $__env->startSection('content'); ?>
<div class="container mt-3">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    List Users
                    <a href="<?php echo e(BASEURL); ?>/post/create" class="badge badge-primary">Add</a>
                </div>
                <div class="card-body">
                    <table class="table table-hover" id="table_user">
                        <thead>
                            <tr>
                                <th scope="col">Title</th>
                                <th scope="col">Body</th>
                                <th scope="col">Created at</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($post->title); ?></td>
                                <td><?php echo e($post->body); ?></td>
                                <td><?php echo e($post->created_at->diffForHumans()); ?></td>
                                <td align="center"><a href="<?php echo e(BASEURL); ?>/post/edit/<?php echo e($post->id); ?>"
                                        class="badge badge-secondary">Edit</a></td>
                                <td align="center"><a onclick="return confirm('Are You Sure');"
                                        href="<?php echo e(BASEURL); ?>/post/destroy/<?php echo e($post->id); ?>"
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\mvc\app\views/post/index.blade.php ENDPATH**/ ?>