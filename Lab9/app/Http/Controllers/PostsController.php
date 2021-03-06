<?php

namespace App\Http\Controllers;


use App\Post;
use App\Repositories\Posts;
use Carbon\Carbon;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index(Post $posts)
    {

        $posts = Post::latest()
            ->filter(request(['month','year']))
            ->get();

//        $posts = Post::latest();
//        if ($month = request('month'))
//        {
//            $posts->whereMonth('created_at', Carbon::parse($month)->month);
//        }
//        if ($year = request('year'))
//        {
//            $posts->whereYear('created_at', $year);
//        }
//        $posts = $posts->get();

//        $posts = $posts->all();

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

    public function store()
    {
        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required'
        ]);

        auth()->user()->publish(
            new Post(request(['title', 'body']))
        );


        // and then redirect to the homepage

        return redirect('/');
    }
}
