


<form method="POST" action="{{route('posts.store')}}">
    @csrf
    <label for="title">Title:</label>
    <input type="text" name="title" id="title">
    <br>
    <label for="description">Description:</label>
    <textarea name="description" id="description"></textarea>
    <br>
    <button type="submit">Add Post</button>
</form>

