<?php

namespace App\Http\Controllers;

use App\User;

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

    	//redirect

    	return redirect()->home();
    }
}
