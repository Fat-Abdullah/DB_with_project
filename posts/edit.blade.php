<form method="POST" action="{{ route('posts.update', $post->id) }}">
    @csrf
    @method('PUT')
    <label for="title">Title:</label>
    <input type="text" name="title" id="title" value="{{ $post->title }}">
    <br>
    <label for="description">Description:</label>
    <textarea name="description" id="description">{{ $post->description }}</textarea>
    <br>
    <button type="submit">Update Post</button>
</form>