<?php $__env->startSection('content'); ?>
    <h1>Create New Post</h1>

    <form method="POST" action="/posts" class="posts">
        <?php echo e(csrf_field()); ?>

        <input name="title" placeholder="title" type="text"/>
        <textarea name="article_content" placeholder="Content"></textarea>
        <button type="submit">Create post</button>
    </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/laravel-3dom/resources/views/posts/create.blade.php ENDPATH**/ ?>