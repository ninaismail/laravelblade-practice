<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all(); // Fetch posts from the database
        $search = ""; // Initialize $search variable with an empty string
        return view('index', compact('search','posts'));
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $post = new Post();
        $post->title = $validatedData['title'];
        $post->description = $validatedData['description'];
        $post->save();

        return redirect()->back()->with('status', 'Post added successfully!');
    }
    public function search(Request $request)
    {
        $search = $request->input('search');
        
        $posts = Post::where('title', 'like', '%' . $search . '%')->get();
        
        return view('components.search-form', compact('posts', 'search'));
    }
}
