@extends('layouts.master')

@section('title', 'registation')

@section('content')


<form class="w3-container w3-card-4 w3-margin-top" method="post" action="/login">
	{{ csrf_field() }}
	 <h2 class="w3-center">Login</h2>

		<input class="w3-input" type="text" name="email" required>
		<label class="w3-label w3-validate">Email</label></p>

		<input class="w3-input" type="password" name="password" required>
		<label class="w3-label w3-validate">Password</label>

		<button class="w3-btn-block w3-section w3-teal w3-ripple"> Login </button>

</form>

@endsection