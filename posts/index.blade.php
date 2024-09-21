
<!-- resources/views/posts/index.blade.php -->
<h1>All Posts</h1>
<ul>
    @foreach($posts as $post)
        <li>
            {{ $post->title }} - {{ $post->description }}
            <form method="POST" action="{{ route('posts.delete', $post->id) }}" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </li>
    @endforeach
</ul>
