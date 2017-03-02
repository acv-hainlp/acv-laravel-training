<!-- Links (sit on top) -->
<div class="w3-top">
  <div class="w3-row w3-padding w3-black">
    <div class="w3-col s2">
      <a href="/posts" class="w3-button w3-block w3-black">All Posts</a>
    </div>

    <div class="w3-col s2">
      <a href="/posts/create" class="w3-button w3-block w3-black">Create Post</a>
    </div>

    <div class="w3-col s2">
      <a href="/upload-cover" class="w3-button w3-block w3-black">Change Cover</a>
    </div>

      @if(Auth::check())
      <div class="w3-col s2">
           <a href="" class="w3-button w3-block w3-black">{{ Auth::user()->name }}</a>
      </div>
      <div class="w3-col s2">
           <a href="/logout" class="w3-button w3-block w3-black">Logout</a>
      </div>
      @else 
      <div class="w3-col s2">
              <a href="/register" class="w3-button w3-block w3-black">Register</a>
      </div>
      <div class="w3-col s2">
              <a href="/login" class="w3-button w3-block w3-black">Login</a>
      </div>
      @endif



    

   </div>
</div>