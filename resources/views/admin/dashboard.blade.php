<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <title>Admin Dashboard</title>
</head>
<body>


<div class="container">
    <h1>Admin Dashboard</h1>

    @if (session('success'))
        <div class="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="button-container">
        <a href="{{ url('posts/create') }}" class="button">Create New Post</a>
        <a href="{{ url('/') }}" class="button button-index">All Blogs</a>
    </div>

    <form action="{{ route('admin.logout') }}" method="POST">
        @csrf
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
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->name }}</td>
                    <td>{{ $post->author }}</td>
                    <td>{{ $post->created_at->format('d-m-Y') }}</td>
                    <td>
                        @if ($post->image)
                            <img src="{{ asset($post->image) }}" alt="Post Image" width="100">
                        @endif
                    </td>
                    <td>
                        <a href="{{ url('posts/'.$post->id.'/edit') }}" class="button button-edit">Edit</a>

                        <form action="{{ url('posts/'.$post->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this post?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="button button-delete">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>

</body>
</html>
