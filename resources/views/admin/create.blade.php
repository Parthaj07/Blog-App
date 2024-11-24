<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create New Post</title>
    <link rel="stylesheet" href="{{ asset('css/create.css') }}">
</head>
<body>
    <div class="form-container">
        <h1 class="form-heading">Create New Post</h1>

        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data" class="post-form">
            @csrf

            <div class="form-group">
                <label for="name">Title:</label>
                <input type="text" name="name" value="{{ old('name') }}" required class="form-input">
            </div>

            <div class="form-group">
                <label for="content">Content:</label>
                <textarea name="content" required class="form-textarea">{{ old('content') }}</textarea>
            </div>

            <div class="form-group">
                <label for="author">Author:</label>
                <input type="text" name="author" value="{{ old('author') }}" class="form-input">
            </div>

            <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" name="image" class="form-input">
            </div>

            <button type="submit" class="submit-btn">Create Post</button>
        </form>
    </div>
</body>
</html>
