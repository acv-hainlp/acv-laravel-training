@extends('layouts.master')

@section ('title','All Posts')

@section ('content')



<div class="w3-row" style="max-width: 1000px; margin: 0 auto">
  <div class="w3-half w3-sand w3-large">

    <div class="w3-container" id="about">
      <div class="w3-content" style="max-width:100%">
        <h5 class="w3-center w3-padding-48 ">
          <span class="w3-tag w3-wide w3-padding-left w3-padding-right">{{ $post->title }}</span>
          <p>by {{ $post->user->name }} at {{ $post->created_at->diffForHumans() }} </p>
        </h5>

        <p class="w3-border w3-container">{{$post->body}}</p>
        @if($post->image)
            <img src=" /{{ $post->image }}" style="max-width:100%">
        @endif
        <a href="/posts/{{$post->id}}/edit" class="w3-btn w3-grey w3-right">Edit</a>
        <a href="/posts/{{$post->id}}/delete" class="w3-btn w3-grey w3-right w3-margin-right">Delete</a>
      </div>
    </div>
  </div>

@include('layouts.sidebar')
  
</div>


@endsection
