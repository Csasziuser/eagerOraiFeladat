<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
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
}
