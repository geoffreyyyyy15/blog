<x-layout>
    <x-nav />
    <div class="mr-5">
        <div class="d-flex ">
    <div class="sticky-top vh-100">
        <div class="side-panel">
            <a href="#" class="logo">Logo</a>
            <form class="search-form">
              <input type="text" placeholder="Search">
              <button type="submit">Search</button>
            </form>
            <nav class="menu">
              <a href="/home">Home</a>
              <a href="/posts">My Posts</a>
              <a href="#">Notifications</a>
              <a href="/logout">Logout</a>
            </nav>
          </div>

        </div>
    <x-flash />

    <form action="/post/{{$post->id}}" method="post" class="ml-5">
        @csrf
        @method('PUT')
        <div class="mb-2"> <img src="https://i.pravatar.cc/60?u={{auth()->id()}}" class="rounded-circle mt-2"  alt="" style="height: 40%;  width: 40px;">
             <label for="exampleFormControlTextarea1" class="text-white" style="font-size: 10px">{{ucwords(auth()->user()->name)}} <span style="color: #4e4e53">Edit Your post</span></label></div>
        <div class="mr-5">
            <textarea class="form-control mb-2 w-96" name="body" placeholder="Write Something..." id="exampleFormControlTextarea1" rows="3">{{ $post->body }}</textarea>
            @error('body')
                <p class="text-danger" style="font-size: 10px">{{ $message }}</p>
            @enderror
            <button type="submit" class="btn btn-primary">Post</button>
          </div>
        </form>
        </div>
    </div>
</x-layout>
