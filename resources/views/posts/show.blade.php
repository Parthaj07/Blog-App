<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/show.css') }}">
    <title>{{ $post->name }}</title>

</head>
<body>
    <div class="container">
        <div class="post-header">
            <h1>{{ $post->name }}</h1>
            <p class="post-meta">Published on {{ $post->created_at->format('M d, Y') }}</p>
        </div>

        @if ($post->image)
        <div class="post-image">
            <img src="{{ asset($post->image) }}" alt="Post Image">
        </div>
        @endif

        <div class="post-content">
            <p>{{ $post->content}}</p>
        </div>

        <a href="{{ url('/') }}" class="back-button">Back to Posts</a>
    </div>
</body>
</html>
