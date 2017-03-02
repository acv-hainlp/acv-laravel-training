<?php

namespace App\Http\Controllers;

use File;

use Illuminate\Http\Request;

class CoverController extends Controller
{
	public function create()
    {
    	return view('upload-cover');
    }

    public function store()
        {
         	// request()->file('image')->store('cover-image');

            $this->validate(request(),[

                'image' => 'required|image',

                ]);

        	$file = request()->file('image');

        	$ext = "png";

         	// $ext = $file->extension(); //define file type exp: image.jpeg

         	// $file ->storeAs('cover-image', "cover.".$ext);

         	// Storage::disk('public')->put("cover.".$ext, $file);

         	File::delete(public_path('upload'),'cover.png');

         	request()->file('image')->move(public_path('upload'),"cover.".$ext);

         	return back();
        }    

}
