<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(asset('css/login.css')); ?>">
    <title>Admin Login</title>

</head>
<body>

    <div class="login-container">
    <h1>Admin Login</h1>
    <form action="<?php echo e(url('admin/login')); ?>" method="POST">
        <?php echo csrf_field(); ?>


        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required value="<?php echo e(old('email')); ?>">
            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>


        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>
            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <button type="submit">Login</button>
    </form>


    <div class="login-link">
        <p>Don't have an account? <a href="<?php echo e(route('admin.register')); ?>">Register here</a></p>
    </div>
</div>

    <script>

        const form = document.querySelector('form');
        form.addEventListener('submit', function (event) {
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;

            if (!email || !password || password.length < 6) {
                event.preventDefault();
                alert('Please fill in all fields with valid information.');
            }
        });
    </script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\Blog\blog-app\resources\views/admin/login.blade.php ENDPATH**/ ?>