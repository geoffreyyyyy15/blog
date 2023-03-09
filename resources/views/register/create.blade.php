<x-layout>
    <div class="d-flex flex-column gap-4 justify-content-center align-items-center mx-auto vh-100">
        <i class="fa-brands fa-github text-white" style="font-size: 70px; "></i>
        <p style="color:rgba(255, 255, 255, 0.596); font-size: 2rem">Register</p>
    <form action="/register" method="post" class="d-flex flex-column gap-2 w-25  rounded p-4 " style="border: 1px solid  #30363D; background-color:#161B22; ">
        @csrf
        <label for="name" class="text-white">
           Name
         </label>
         <input value="{{ old('name') }}" type="text" name="name" class="form-control bg-transparent text-white  w-100" style="height: 28px; font-size: 12px">
         @error('name')
             <p class="text-danger" style="font-size: 10px;">{{ $message }}</p>
         @enderror
        <label for="email" class="text-white">
            Email
        </label>
        <input type="email" value="{{ old('email') }}" name="email" class="form-control w-100 bg-transparent text-white" style="height: 28px; font-size: 12px ">
        @error('email')
             <p class="text-danger" style="font-size: 10px;">{{ $message }}</p>
         @enderror
        <label for="username" class="text-white">
            Username
        </label>
        <input type="text" name="username" value="{{ old('username') }}" class="form-control w-100 bg-transparent text-white" style="height: 28px; font-size: 12px ">
        @error('username')
             <p class="text-danger" style="font-size: 10px;">{{ $message }}</p>
         @enderror
        <label for="email" class="text-white">
            Password
         </label>
         <input type="password" name="password" class="form-control bg-transparent text-white  w-100" style="height: 28px; font-size: 12px">
         @error('password')
             <p class="text-danger" style="font-size: 10px;">{{ $message }}</p>
         @enderror
        <button type="submit" class="btn btn-success">Login</button>
    </form>
</div>
</x-layout>
