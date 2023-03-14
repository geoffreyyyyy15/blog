<form action="/post" method="post" class="ml-5">
    @csrf
    <div class="mb-2"> <img src="https://i.pravatar.cc/60?u={{auth()->id()}}" class="rounded-circle mt-2"  alt="" style="height: 40%;  width: 40px;">
         <label for="exampleFormControlTextarea1" class="text-white" style="font-size: 10px">{{ucwords(auth()->user()->name)}} <span style="color: #4e4e53">You can write something on the post</span></label></div>
    <div class="mr-5">
        <textarea class="form-control mb-2" name="body" placeholder="Write Something..."  id="exampleFormControlTextarea1" rows="3"></textarea>
        @error('body')
            <p class="text-danger" style="font-size: 10px">{{ $message }}</p>
        @enderror
        <button type="submit" class="btn btn-primary">Post</button>
      </div>
    </form>
