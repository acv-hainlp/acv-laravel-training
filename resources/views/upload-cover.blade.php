@extends('layouts.master')

@section ('title','Change cover')

@section('content')


<form method="post" action="/upload-cover" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin " enctype="multipart/form-data">
  {{ csrf_field() }}
  
    <div class="w3-row w3-section">
    <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">
    <input type="file" name='image'>
    </div>

  <p class="w3-center">
    <button class="w3-button w3-section w3-blue w3-ripple"> Upload </button>
  </p>
</form>


@endsection