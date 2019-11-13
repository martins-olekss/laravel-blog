<html>
<head>
    <title>3dom</title>
    <link rel="stylesheet" href="<?php echo e(mix('/css/app.css')); ?>">
</head>
<body>
<nav>
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/posts">Post list</a></li>
        <li><a href="/posts/create">Add new post</a></li>
    </ul>
</nav>

<?php echo $__env->yieldContent('content'); ?>

</body>
</html>
<?php /**PATH /var/www/laravel-3dom/resources/views/layout.blade.php ENDPATH**/ ?>