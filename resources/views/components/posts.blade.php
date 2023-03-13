@props(['users'])
@props(['posts'])
@foreach ($users as $user)

<div class="mt-5">

<div class="border border-top-0 border-right-0 border-secondary mt-2">
    <label for="exampleFormControlTextarea1" class="text-white" style="font-size: 10px">{{ucwords(auth()->user()->name)}} <span style="color: #4e4e53">{{ $user->author->username }}</span></label></div>

</div>
</div>
@endforeach
