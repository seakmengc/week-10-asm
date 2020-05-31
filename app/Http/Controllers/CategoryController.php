<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    public function index()
    {
        // return view('categories.index');
    }

    public function store(CategoryRequest $request)
    {
        // $this->authorize("create", Category::class);
        //
    }

    public function show(Category $category)
    {
        // $this->authorize("view", Category::class);
        //
    }

    public function update(CategoryRequest $request,Category $category)
    {
        // $this->authorize("update", Category::class);
        //
    }

    public function destroy(Category $category)
    {
        
    }
}