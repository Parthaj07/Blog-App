<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(asset('css/show.css')); ?>">
    <title><?php echo e($post->name); ?></title>

</head>
<body>
    <div class="container">
        <div class="post-header">
            <h1><?php echo e($post->name); ?></h1>
            <p class="post-meta">Published on <?php echo e($post->created_at->format('M d, Y')); ?></p>
        </div>

        <?php if($post->image): ?>
        <div class="post-image">
            <img src="<?php echo e(asset($post->image)); ?>" alt="Post Image">
        </div>
        <?php endif; ?>

        <div class="post-content">
            <p><?php echo e($post->content); ?></p>
        </div>

        <a href="<?php echo e(url('/')); ?>" class="back-button">Back to Posts</a>
    </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\Blog\blog-app\resources\views/posts/show.blade.php ENDPATH**/ ?>