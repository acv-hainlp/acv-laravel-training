@extends('layouts.master')

@section ('title','Edit Post')

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

<form method="post" action="/posts" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin ">
  {{ csrf_field() }}
  <h2 class="w3-center">New Post</h2>

  <div class="w3-row w3-section">
    <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="title" type="text" placeholder="Title" required="">
    </div>
  </div>

  <div class="w3-row w3-section">
    <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">
    <textarea name="body" class="w3-input" required=""></textarea>
    </div>
  </div>

  <p class="w3-center">
    <button class="w3-button w3-section w3-blue w3-ripple"> Publish </button>
  </p>
</form>

@endsection
