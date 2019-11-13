<?php $__env->startSection('content'); ?>
    <h1>Update Post</h1>

    <form method="POST" action="/posts/<?php echo e($post->id); ?>" class="posts">
        <?php echo e(method_field('PATCH')); ?>

        <?php echo e(csrf_field()); ?>

        <input name="title" placeholder="title" type="text" value="<?php echo e($post->title); ?>"/>
        <textarea name="article_content" placeholder="Content"><?php echo e($post->content); ?></textarea>
        <button type="submit">Update post</button>
    </form>

    <form method="POST" action="/posts/<?php echo e($post->id); ?>" class="posts">
        <?php echo e(method_field('DELETE')); ?>

        <?php echo e(csrf_field()); ?>

        <button type="submit">DELETE post</button>
    </form>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/laravel-3dom/resources/views/posts/edit.blade.php ENDPATH**/ ?>