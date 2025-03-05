<?php

namespace App\Http\Controllers;


use App\Models\Post;
use App\Mail\Postsend;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\postrequst;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $post=Post::orderBy('id','desc')->get();
        return view('home' ,compact('post'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        $category = Category::all();
        return view('create',compact('category') );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(postrequst $request)
    {
         $validated=$request->validated();
         $post = Post::create($validated);

        
        return redirect('/posts')->with('status', ' Post created was Success');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        
        return view('show' ,compact('post',));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $category = Category::all();
        return view('edit' ,compact('post','category'))->with('status', ' Post edited was Success');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(postrequst $request,Post $post)
    {
        $validated=$request->validated();
        $post->update($validated);


        return redirect('/posts');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect('/posts')->with('status', ' Post Deleted was Success');
    }
}
