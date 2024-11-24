<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <title>Admin Dashboard - Blog</title>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<body>

    <div class="container">
        <h1>All Blogs</h1>


        <div class="search-container">
            <input type="text" id="search" placeholder="Search posts by name" class="search-input">
        </div>


        @if (session('success'))
            <div class="alert">
                {{ session('success') }}
            </div>
        @endif

        <div class="blog-container" id="blog-list">

            @foreach ($posts as $post)
                <div class="post" data-post-name="{{ strtolower($post->name) }}">
                    <h2>{{ $post->name }}</h2>
                    <div class="post-meta">
                        <span>By {{ $post->author }} | {{ $post->created_at->format('d-m-Y') }}</span>
                    </div>
                    <div class="post-content">
                        @if($post->image)
                        <img src="{{ asset($post->image) }}" alt="Post Image" width="100">
                        @endif
                        <p>{{ Str::limit($post->content, 50) }}</p>
                    </div>
                    <a href="{{ url('posts/'.$post->id) }}" class="read-more">Read More</a>
                </div>
            @endforeach
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
