<?php

namespace App\Http\Controllers;

use App\User;

use App\Mail\Welcome;

class RegistrationController extends Controller
{
    public function create()
    {
    	return view('registration.create');
    }


    public function store()
    {
    	//validate
    	$this->validate(request(),[
    		'name' 		=> 'required|min:2',
    		'email' 	=> 'required|email',
    		'password' 	=> 'required|confirmed',

		]);

    	//create user

    	$user = User::create([
    		'name'		=>	request('name'),
    		'email'		=>	request('email'),
    		'password'	=>	bcrypt(request('password')),
    	]);

    	//login

    	auth()->login($user);

        //sendemail to user

        \Mail::to($user)->send(new Welcome($user)); // send user view welcome w $user data

    	//redirect

    	return redirect()->home();
    }
}
