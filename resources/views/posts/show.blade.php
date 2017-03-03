@extends('layouts.master')

@section ('title','All Posts')

@section ('content')



<!-- Add a background color and large text to the whole page -->
<div class="w3-sand w3-grayscale w3-large">

<!-- About Container -->

  <div class="w3-container" id="about">
    <div class="w3-content" style="max-width:700px">
      <h5 class="w3-center w3-padding-48 "><span class="w3-tag w3-wide w3-padding-left w3-padding-right">{{ $post->title }}</span></h5>
      <p class="w3-border w3-container">{{$post->body}}</p>
      <a href="/posts/{{$post->id}}/edit" class="w3-btn w3-grey w3-right">Edit</a>
      <a href="/posts/{{$post->id}}/delete" class="w3-btn w3-grey w3-right w3-margin-right">Delete</a>
    @if($post->image)
   		 <img src=" /{{ $post->image }}" style="max-width:700px">
    @endif
  </div>

    </div>

   </div>
</div>


@endsection
