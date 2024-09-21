<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts= Post::get();
        return view("posts.index", compact('posts'));
    }
    
    public function create()
{
    return view('posts.create');
}


public function store(Request $request)
{
    $validated = $request->validate([
        
        'title' => 'required|max:255',
        'description' => 'required',
    ]);

    $post = new Post();

    $post->title = $validated['title'];
    $post->description = $validated['description'];
    $post->save();

    return redirect()->route('posts.index');
}


public function edit(Post $post)
{
    return view('posts.edit');

}


public function update(Request $request)
{
    $validated = $request->validate([
        'title' => 'required|max:255',
        'description' => 'required',
    ]);

    $post->title = $validated['title'];
    $post->description = $validated['description'];
    $post->save();

    return redirect()->route('posts.index');
}



public function delete(Post $post)
{
    $post->delete();
    return redirect()->route('posts.index');
}





}
