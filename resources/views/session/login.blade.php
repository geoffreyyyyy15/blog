
<x-layout>
        <div class="d-flex flex-column gap-4 justify-content-center align-items-center mx-auto vh-100">
            <i class="fa-brands fa-github text-white" style="font-size: 70px; "></i>
            <p style="color:rgba(255, 255, 255, 0.596); font-size: 2rem">Sign in to GitHub</p>
        <form action="/home" method="post" class="d-flex flex-column gap-2 w-25  rounded p-4 " style="border: 1px solid  #30363D; background-color:#161B22; ">
            @csrf
            <label for="email" class="text-white">
                Username or email address
            </label>
            <input type="email" name="email" class="form-control w-100 bg-transparent text-white" style="height: 28px; ">
            @error('email')
            <x-error-message>{{ $message }}</x-error-message>
            @enderror
            <label for="email" class="text-white">
                Password
             </label>
             <input type="password" name="password" class="form-control bg-transparent text-white  w-100" style="height: 28px">
             @error('password')
             <x-error-message>{{ $message }}</x-error-message>
             @enderror
            <button type="submit" class="btn btn-success">Login</button>
        </form>
    </div>
</x-layout>
