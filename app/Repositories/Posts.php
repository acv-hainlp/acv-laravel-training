<?php

namespace App\Repositories;


use \App\Post;

/**
* 
*/
class Posts
{
	public function all()
	{
		// return Post::all();
		$posts = Post::latest() //Move to Repositories
              ->filter(request(['month','year']))
              ->get();

        return $posts;
	}

	public function create()
	{
		return view('posts.create');

	}
}