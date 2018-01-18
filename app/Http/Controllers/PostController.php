<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Image;

use App\Post;


class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index() 
    {
        $posts = Post::latest()
            ->filter(request(['month', 'year']))
            ->get();

        return view('posts.index', compact('posts'));
    }

    public function show(Post $post) 
    {
        return view('posts.show', compact('post'));
    }

    public function create() 
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $this->validate(request(), [
            'title' => 'required|min:2',
            'body' => 'required',
            'img' => 'required'
        ]);

        $img = $request->file('img');
        $filename = time() . '.' . $img->getClientOriginalExtension();
        Image::make($img)->save( public_path('/uploads/setups/' . $filename ) );

        auth()->user()->publish(
            new Post([
                'title' => request('title'), 
                'body' => request('body'), 
                'img' => $filename
                ])
        );

        return redirect('/');
    }
}
