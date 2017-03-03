<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use Carbon\Carbon;

class PostsController extends Controller
{

    public function __construct()
      { 
        $this->middleware('auth',['except'=> 'index']); // If not login, only except index
      }

    public function index()
    {
      $posts = Post::latest()
              ->filter(request(['month','year']))
              ->get();

      // //default index [ OP 1 ]
      // $posts = Post::latest(); // $posts = Post::orderBy('created_at', 'desc');

      // //filter by Month and Year
      // if ($month = request('month')) {
      //   $posts->whereMonth('created_at', Carbon::parse($month)->month ); // February = 2, January = 1
      // }

      // if ($year = request('year')){
      //   $posts->whereYear('created_at',$year);
      // }

      // $posts = $posts->get();


      $archives = Post::selectRaw('
        year(created_at) year,
        monthname(created_at) month,
        count(*) publish')
      ->groupBy('year','month')
      ->orderByRaw('min(created_at) desc')
      ->get()
      ->toArray();

    	return view('posts.index',compact('posts','archives'));
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

        //create data
        Post::create([
          'title' => request('title'),
          'body' => request('body'),
          'user_id' => auth()->id(),

          'image'=> 'upload/posts-image/'.$file->getClientOriginalName(),

        ]);
      } else {

        //create data

        Post::create([
          'title' => request('title'),
          'body' => request('body'),
          'user_id' => auth()->id(),
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

      //validation
      $this->validate(request(),[
        'title' => 'required|min:2',
        'body' => 'required|min:2',
        'image'=> 'image',
        ]);

  		$post = Post::find($id);

      //update the image
      if(request()->file('image')) //if have image upload
      {
          $file = request()->file('image'); // get file info
          request()->file('image')->move(public_path('upload/posts-image'),$file->getClientOriginalName()); //save file with original name
          
          $data = request()->all(); //save all request to $data, all() -> JSON format
          $data['image'] = 'upload/posts-image/'.$file->getClientOriginalName(); // set image url
                    
          // note: unset to delete input

      }      

  		$post->update($data); // update record white JSON Format

  		return back();
  	}


}
