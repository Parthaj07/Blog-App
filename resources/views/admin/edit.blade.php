<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/edit.css') }}">
    <title>Edit post</title>
</head>
<body>

    <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <h1 class="edit-heading">Edit Post</h1>

        <div>
            <label for="name">Title:</label>
            <input type="text" name="name" value="{{ old('name', $post->name) }}" required>
        </div>


        <div>
            <label for="content">Content:</label>
            <textarea name="content" required>{{ old('content', $post->content) }}</textarea>
        </div>


        <div>
            <label for="author">Author:</label>
            <input type="text" name="author" value="{{ old('author', $post->author) }}">
        </div>


        <div>
            <label for="image">Image:</label>
            <input type="file" name="image">
            @if ($post->image)
            <img src="{{ asset($post->image) }}" alt="Post Image" width="100">
            @endif
        </div>

        <button type="submit">Update Post</button>
    </form>



</body>
</html>
