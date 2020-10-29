<?php

namespace App\Http\Controllers;
use App\Post;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = auth()->user();
        $posts = Post::where('user_id',$user->id)->get();
        return view('home',compact("posts"));
    }
    public function show($id)
    {
        $posts = Post::find($id);
        
        return view('posts.show',compact("posts"));
    }
    

}
