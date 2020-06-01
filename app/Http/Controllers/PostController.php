<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\PostRequest;
use App\Http\Controllers\Controller;
use App\Models\Category;

class PostController extends Controller
{
    public function index()
    {
        // $this->authorize("viewAny", Post::class);
        $posts = Post::with('category')->paginate();

        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::all();

        return view('posts.create', compact('categories'));
    }

    public function store(PostRequest $request)
    {
        // $this->authorize("create", Post::class);
        //

        Post::create($request->validated());

        return redirect()->route('posts.index');
    }

    public function show(Post $post)
    {
        // $this->authorize("view", Post::class);
        //

        return view('posts.show', compact('post'));
    }

    public function edit(Post $post)
    {
        $categories = Category::all();
        
        return view('posts.edit', compact(['post', 'categories']));
    }

    public function update(PostRequest $request,Post $post)
    {
        // $this->authorize("update", Post::class);
        
        $post->update($request->validated());

        return redirect()->route('posts.show', $post);
    }

    public function destroy(Post $post)
    {
        // $this->authorize("delete", Post::class);
        
        $post->delete();

        return redirect()->route('posts.index');
    }

    public function ajaxDestroy(Post $post)
    {
        $post->delete();

        return response()->json([
            'success' => true,
            'message' => 'Deleted'
        ]);
    }
}