<?php $__env->startSection('title', 'Edit Post'); ?>

<?php $__env->startSection('content'); ?>
<div class="container mt-3">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">Edit Post</div>
                <div class="card-body">
                    <form action="<?= BASEURL; ?>/post/update/<?php echo e($post->id); ?>" method="POST">
                        <div class="form-group">
                            <label for="Title">Title</label>
                            <input type="text" name="title" id="title" class="form-control" value="<?php echo e($post->title); ?>">
                        </div>
                        <div class="form-group">
                            <label for="content">Content</label>
                            <textarea class="form-control" name="content" id="content"><?php echo e($post->body); ?></textarea>
                        </div>
                        <a href="<?php echo e(BASEURL); ?>/post" class="btn btn-danger">Back</a>
                        <button type="submit" class="btn btn-primary float-right">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\mvc\app\views/post/edit.blade.php ENDPATH**/ ?>