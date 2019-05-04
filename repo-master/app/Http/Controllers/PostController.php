<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Post;
class PostController extends Controller
{
    //
public function index()
{
  $posts=Post::all();
  
    return view('posts.index',compact('posts'));
}

public function create()
{
 
  
    return view('posts.create');
}
public function show($id){
    $post=Post::find($id);
    return view('posts.show',compact('post'));
    dd($id);
}

public function store(Request $request)
{
   
// $request->validate([
//     'title' => 'required',
//     'body' => 'required',
// ]);

  $post = Post::Create([
        'title' => $request->title,
        'body' => $request->body,
    ]);
return redirect()->route('posts.index')->with('success','Note Add ');
}

}
