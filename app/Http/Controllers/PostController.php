<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index(){
        $posts = Post::with(['user'])->get();

        return view('posts.index', compact('posts'));
    }
    
    public function create(){
        return view('posts.create');
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string'
        ]);

        Auth::user()->posts()->create([
            'title' => $request->title,
            'content' => $request->content
        ]);

        return redirect()->route('posts.index');
    }

    public function show($id){
        $post = Post::with('comments.user')->findOrFail($id);
        return view('posts.show',compact('post'));
    }
}
