<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(asset('css/index.css')); ?>">
    <title>Admin Dashboard - Blog</title>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<body>

    <div class="container">
        <h1>All Blogs</h1>


        <div class="search-container">
            <input type="text" id="search" placeholder="Search posts by name" class="search-input">
        </div>


        <?php if(session('success')): ?>
            <div class="alert">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>

        <div class="blog-container" id="blog-list">

            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="post" data-post-name="<?php echo e(strtolower($post->name)); ?>">
                    <h2><?php echo e($post->name); ?></h2>
                    <div class="post-meta">
                        <span>By <?php echo e($post->author); ?> | <?php echo e($post->created_at->format('d-m-Y')); ?></span>
                    </div>
                    <div class="post-content">
                        <?php if($post->image): ?>
                        <img src="<?php echo e(asset($post->image)); ?>" alt="Post Image" width="100">
                        <?php endif; ?>
                        <p><?php echo e(Str::limit($post->content, 50)); ?></p>
                    </div>
                    <a href="<?php echo e(url('posts/'.$post->id)); ?>" class="read-more">Read More</a>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>


        <div id="no-match-message" style="display: none;">
            <p>No posts found that match your search.</p>
        </div>
    </div>


    <script>
        $(document).ready(function() {

            $('#search').on('keyup', function() {
                let searchQuery = $(this).val().toLowerCase();
                filterPosts(searchQuery);
            });

            function filterPosts(query) {
                let matchFound = false;

                $('.post').each(function() {
                    let postName = $(this).data('post-name');
                    if (postName.includes(query)) {
                        $(this).show();
                        matchFound = true;
                    } else {
                        $(this).hide();
                    }
                });


                if (matchFound) {
                    $('#no-match-message').hide();
                } else {
                    $('#no-match-message').show();
                }
            }
        });
    </script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\Blog\blog-app\resources\views/posts/index.blade.php ENDPATH**/ ?>