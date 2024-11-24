<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(asset('css/dashboard.css')); ?>">
    <title>Admin Dashboard</title>
</head>
<body>


<div class="container">
    <h1>Admin Dashboard</h1>

    <?php if(session('success')): ?>
        <div class="alert">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <div class="button-container">
        <a href="<?php echo e(url('posts/create')); ?>" class="button">Create New Post</a>
        <a href="<?php echo e(url('/')); ?>" class="button button-index">All Blogs</a>
    </div>

    <form action="<?php echo e(route('admin.logout')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <button type="submit" class="button button-logout">Logout</button>
    </form>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Author</th>
                <th>Created At</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($post->id); ?></td>
                    <td><?php echo e($post->name); ?></td>
                    <td><?php echo e($post->author); ?></td>
                    <td><?php echo e($post->created_at->format('d-m-Y')); ?></td>
                    <td>
                        <?php if($post->image): ?>
                            <img src="<?php echo e(asset($post->image)); ?>" alt="Post Image" width="100">
                        <?php endif; ?>
                    </td>
                    <td>
                        <a href="<?php echo e(url('posts/'.$post->id.'/edit')); ?>" class="button button-edit">Edit</a>

                        <form action="<?php echo e(url('posts/'.$post->id)); ?>" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this post?');">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="button button-delete">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

</div>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\Blog\blog-app\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>