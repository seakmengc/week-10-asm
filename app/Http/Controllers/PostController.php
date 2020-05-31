<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        // $this->authorize("viewAny", Post::class);
        //
    }

    public function store(PostRequest $request)
    {
        // $this->authorize("create", Post::class);
        //
    }

    public function show(Post $post)
    {
        // $this->authorize("view", Post::class);
        //
    }

    public function update(PostRequest $request,Post $post)
    {
        // $this->authorize("update", Post::class);
        //
    }

    public function destroy(Post $post)
    {
        // $this->authorize("delete", Post::class);
        //
    }

    public function restore($id)
    {
        // only super admin can access, and check with middleware at the __construct function
        //
    }

    public function forceDestroy($id)
    {
        // only super admin can access, and check with middleware at the __construct function
        //
    }
}