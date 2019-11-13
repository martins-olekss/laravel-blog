<?php $__env->startSection('content'); ?>
    <h1>Welcome</h1>
    <p>This is example blog application. To view list of articles go <a href="/posts">here</a></p>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/laravel-3dom/resources/views/home.blade.php ENDPATH**/ ?>