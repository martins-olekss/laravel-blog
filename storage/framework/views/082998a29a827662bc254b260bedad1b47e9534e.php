<?php $__env->startSection('content'); ?>
    <h1>All posts</h1>
    <table class="post-list">
        <tr>
            <th>Title</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th></th>
            <th></th>
        </tr>
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($post->title); ?></td>
                <td><?php echo e($post->created_at); ?> </td>
                <td><?php echo e($post->updated_at); ?> </td>
                <td><a href="/posts/<?php echo e($post->id); ?>">View</a></td>
                <td><a href="/posts/<?php echo e($post->id); ?>/edit">Edit</a></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/laravel-3dom/resources/views/posts/index.blade.php ENDPATH**/ ?>