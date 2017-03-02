<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

      //validation
  		$this->validate(request(),[
  			'title' => 'required|min:2',
  			'body' => 'required|min:2',
        'image'=> 'image',

  			]);

       //save file
      if(request()->file('image'))
      {

        $file = request()->file('image'); // $ext = $file->extension();
        request()->file('image')->move(public_path('upload/posts-image'),$file->getClientOriginalName());

        Post::create([
          'title' => request('title'),
          'body' => request('body'),
          'image'=> 'upload/posts-image/'.$file->getClientOriginalName(),

        ]);
      } else {

        //create data

        Post::create([
          'title' => request('title'),
          'body' => request('body'),
          ]);

      }
      
      //redirect
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

  	public function edit($id)
  	{
  		$post = Post::find($id);
  		return view('/posts.edit',compact('post'));
  	}

  	public function update($id)
  	{
  		$post = Post::find($id);

  		$post->update(request()->all());

  		return back();
  	}


}
