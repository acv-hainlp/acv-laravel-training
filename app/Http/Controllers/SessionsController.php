<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function create()
    {
    	return view('sessions.create');
    }

    public function destroy()
    {
    	auth()->logout();

    	return redirect()->home();
    }

    public function store()
    {
    	// Attempt to authenticate the user.

    	if(!auth()->attempt(request(['email','password'])))
    	{

    		return back()->withErrors([
    				'message' => 'Wrong Email or Password.',
    			]);
    	}

    	return redirect()->home();
    	


    	//if not return back


    	//signin



    	//redirect
    }
}
