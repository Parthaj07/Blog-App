<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo e(asset('css/edit.css')); ?>">
    <title>Edit post</title>
</head>
<body>

    <form action="<?php echo e(route('posts.update', $post->id)); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <h1 class="edit-heading">Edit Post</h1>

        <div>
            <label for="name">Title:</label>
            <input type="text" name="name" value="<?php echo e(old('name', $post->name)); ?>" required>
        </div>


        <div>
            <label for="content">Content:</label>
            <textarea name="content" required><?php echo e(old('content', $post->content)); ?></textarea>
        </div>


        <div>
            <label for="author">Author:</label>
            <input type="text" name="author" value="<?php echo e(old('author', $post->author)); ?>">
        </div>


        <div>
            <label for="image">Image:</label>
            <input type="file" name="image">
            <?php if($post->image): ?>
            <img src="<?php echo e(asset($post->image)); ?>" alt="Post Image" width="100">
            <?php endif; ?>
        </div>

        <button type="submit">Update Post</button>
    </form>



</body>
</html>
<?php /**PATH C:\xampp\htdocs\Blog\blog-app\resources\views/admin/edit.blade.php ENDPATH**/ ?>