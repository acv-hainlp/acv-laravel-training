@extends('layouts.master')

@section ('title','Edit Post')

@section ('content')



<form method="post" action="/posts/{{ $post->id }}" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin ">
  {{ method_field('PATCH')}}
  {{ csrf_field() }}
  
  <h2 class="w3-center">Edit Post</h2>

  <div class="w3-row w3-section">
    <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="title" type="text" value="{{$post->title}}" required="">
    </div>
  </div>

  <div class="w3-row w3-section">
    <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">
    <textarea name="body" class="w3-input" placeholder="{{$post->body}}" required="">{{$post->body}}</textarea>
    </div>
  </div>

  <p class="w3-center">
    <button class="w3-button w3-section w3-blue w3-ripple"> Update </button>
  </p>
</form>

@endsection
