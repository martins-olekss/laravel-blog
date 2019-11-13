<?php $__env->startSection('content'); ?>
    <h1><?php echo e($post->title); ?></h1>
    <p><?php echo $post->content; ?> </p>

    <ul>
        <li>Created: <?php echo e($post->created_at); ?> </li>
        <li>Updated: <?php echo e($post->updated_at); ?> </li>
        <li><a href="/posts/<?php echo e($post->id); ?>/edit">Edit</a></li>
    </ul>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/laravel-3dom/resources/views/posts/show.blade.php ENDPATH**/ ?>