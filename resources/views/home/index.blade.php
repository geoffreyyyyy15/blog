<x-layout>
    <x-nav />

        <div class="row">
          <div class="col">
            <div class="sticky-top">
                <div class="side-panel">
                    <a href="#" class="logo">Logo</a>
                    <form class="search-form">
                      <input type="text" placeholder="Search">
                      <button type="submit">Search</button>
                    </form>
                    <nav class="menu">
                      <a href="#">Home</a>
                      <a href="#">Explore</a>
                      <a href="#">Notifications</a>
                      <a href="#">Settings</a>
                    </nav>
                  </div>
                </div>
          </div>


          <div class="col-6">
            <x-flash />
            <form action="/post" method="post">
                @csrf
                <div class="d-flex gap-2 align-items-center mb-2"> <img src="https://i.pravatar.cc/60?u={{auth()->id()}}" class="rounded-circle mt-2"  alt="" style="height: 40%;  width: 40px;">
                     <label for="exampleFormControlTextarea1" class="text-white" style="font-size: 10px">{{ucwords(auth()->user()->name)}} <span style="color: #4e4e53">You can write something on the post</span></label></div>
                <div class="form-group">
                    <textarea class="form-control mb-2" name="body" placeholder="Write Something..."  id="exampleFormControlTextarea1" rows="3"></textarea>
                    @error('body')
                        <p class="text-danger" style="font-size: 10px">{{ $message }}</p>
                    @enderror
                    <button type="submit" class="btn btn-primary">Post</button>
                  </div>
                </form>



                <x-posts :users="$users"  />
          </div>
          <div class="col pl-2 border border-top-0 border-bottom-0 border-secondary">
            <div class="container">
            <form action="#" method="post">
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Example textarea</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
                </form>
            </div>
          </div>
        </div>
</x-layout>
