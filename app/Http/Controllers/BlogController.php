<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Blog::get();
        return response()->json($posts);
    }

    // Fetch a specific post
    public function show($id)
    {
        $post = Blog::with('category')->findOrFail($id);
        return response()->json($post);
    }

    // Create a new post (optional for your use case)
    public function store(Request $request)
    {
        $post = Blog::create($request->all());
        return response()->json($post, 201);
    }
}
