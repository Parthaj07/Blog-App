<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <title>Admin Login</title>

</head>
<body>

    <div class="login-container">
    <h1>Admin Login</h1>
    <form action="{{ url('admin/login') }}" method="POST">
        @csrf


        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required value="{{ old('email') }}">
            @error('email')
                <div>{{ $message }}</div>
            @enderror
        </div>


        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>
            @error('password')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <button type="submit">Login</button>
    </form>


    <div class="login-link">
        <p>Don't have an account? <a href="{{ route('admin.register') }}">Register here</a></p>
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
