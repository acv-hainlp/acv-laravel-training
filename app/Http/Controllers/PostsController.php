<?php

namespace App\Http\Controllers;

use App\Post;

class PostsController extends Controller
{
    public function index()
    {
    	$posts = Post::all();

    	return view('posts.index',compact('posts'));
    }

    public function create()
    {
    	return view('posts.create');
    }

  	public function store()
  	{	

  		$this->validate(request(),[
  			'title' => 'required|min:2',
  			'body' => 'required|min:2',

  			]);

  		Post::create([
  			'title' => request('title'),
  			'body' => request('body'),

  			]);

  		return redirect('/posts');
  		
  	}

  	public function show($id)
  	{
  		$post = Post::find($id);

  		return view('posts.show',compact('post'));
  	}

  	public function destroy($id)
  	{
  		Post::destroy($id);

  		return redirect('/posts');
  	}
}
