<?php

namespace App\Http\Controllers;
use App\Post;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    
    public function index() {
        $posts = Post::where('Pstatus',1)->get();
        return view('posts.index', compact('posts'));
        
    }
   
    public function create() {

        return view('posts.create');
    }


   /* public function show($id)
    {
        $posts = Post::find($id);
        $posts=Post::all();
        return view('posts.show',compact('posts'));
    }
    */
   
    public function postAccept($id)
    {
        Post::find($id)->update(['Pstatus'=>1]);
        $posts= Post::all();

        return view('admin.dashboard',compact('posts'));
    }
    
    public function postIndex()
    {
        $posts = Post::all();
        $user=auth()->user();
        if ($user->user_type=='normal') {
            $posts = Post::where('user_id', $user->id)->get();
        }
        return view('admin.dashboard',compact('posts'));
    }

    public function store(Request $request)
    {
         
        $this->validate($request,[
            'title'=>'required',
            'info'=>'required',
            'date'=>'required',
            'image'=>'image|mimes:png,jpg,bmp,jpeg'
           
    
           ]);
           $post= new Post;
        
           $post->title=$request->title;
           $post->info=$request->info;
           $post->date=$request->date;
           
           $post->user_id=auth()->user()->id;
          
           if ($request->hasFile('image')) {
               $file=$request->file('image');
               $ext=$file->getClientOriginalExtension();
               $filename=time().'.'.$ext;
               $path=$file->move('posts', $filename);
               $post->image=$filename;
               //dd($path);
           }else{
return $request;
$post->image='';
           }
    
         
        $post->save();
        
        $posts = Post::all();
    
        return redirect('/posts/create')->with('status', 'تم إنشاء المدونة!');
        
        

    }

    
    }



