@extends('layouts.master')

@section ('title','All Posts')

@section ('content')


<!-- Header with image -->
<header class="bgimg w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-bottomleft w3-center w3-padding-xlarge w3-hide-small">
    <span class="w3-tag">Open from 6am to 5pm</span>
  </div>
  <div class="w3-display-middle w3-center">
    <span class="w3-text-white" style="font-size:90px">My<br>Blog</span>
  </div>
  <div class="w3-display-bottomright w3-center w3-padding-xlarge">
    <span class="w3-text-white">15 Adr street, 5015</span>
  </div>
</header>

<!-- Add a background color and large text to the whole page -->
<div class="w3-sand w3-grayscale w3-large">

<!-- About Container -->

  <div class="w3-container" id="about">
    <div class="w3-content" style="max-width:700px">
      <h5 class="w3-center w3-padding-48 "><span class="w3-tag w3-wide w3-padding-left w3-padding-right">{{ $post->title }}</span></h5>
      <p class="w3-border w3-container">{{$post->body}}</p>
      <a href="/posts/{{$post->id}}/edit" class="w3-btn w3-grey w3-right">Edit</a>
      <a href="/posts/{{$post->id}}/delete" class="w3-btn w3-grey w3-right w3-margin-right">Delete</a>
    </div>
  </div>
</div>


@endsection
