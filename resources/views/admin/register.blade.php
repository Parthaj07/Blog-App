<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    <title>Admin Register</title>


</head>
<body>

<div class="register-container">
    <h1>Admin Register</h1>



    <form action="{{ url('admin/register') }}" method="POST" id="registerForm">
        @csrf


        <div class="input-field">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required value="{{ old('name') }}">
            <div class="error" id="nameError"></div>
        </div>


        <div class="input-field">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required value="{{ old('email') }}">
            <div class="error" id="emailError">
                @error('email')
                    {{ $message }}
                @enderror
            </div>
        </div>


        <div class="input-field">
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>
            <div class="error" id="passwordError"></div>
        </div>


        <div class="input-field">
            <label for="password_confirmation">Confirm Password:</label>
            <input type="password" name="password_confirmation" id="password_confirmation" required>
            <div class="error" id="passwordConfirmationError"></div>
        </div>

        <button type="submit">Register</button>
    </form>

    <div class="login-link">
        <p>Already have an account? <a href="{{ url('admin/login') }}">Login</a></p>
    </div>
</div>

<script>

    const form = document.getElementById('registerForm');
    form.addEventListener('submit', function (event) {
        let isValid = true;

        document.querySelectorAll('.error').forEach(function (error) {
            error.textContent = '';
        });


        const name = document.getElementById('name').value;
        if (!name) {
            document.getElementById('nameError').textContent = 'Name is required.';
            isValid = false;
        }

        const email = document.getElementById('email').value;
        const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
        if (!email || !emailPattern.test(email)) {
            document.getElementById('emailError').textContent = 'Please enter a valid email.';
            isValid = false;
        }

        const password = document.getElementById('password').value;
        if (!password || password.length < 6) {
            document.getElementById('passwordError').textContent = 'Password must be at least 6 characters.';
            isValid = false;
        }


        const confirmPassword = document.getElementById('password_confirmation').value;
        if (confirmPassword !== password) {
            document.getElementById('passwordConfirmationError').textContent = 'Passwords do not match.';
            isValid = false;
        }

        if (!isValid) {
            event.preventDefault();
        }
    });
</script>

</body>
</html>
