@props(['users'])
@props(['posts'])
@props(['slug'])
@foreach ($users as $user)
<div class="ml-5 mb-3">
<div class="border border-top-0 border-right-0 border-secondary mt-2">
    <p class="text-white mb-5">{{ ($user->username )}}</p>
    <label for="exampleFormControlTextarea1" class="text-white" style="font-size: 10px">{{$user->author->name }}<span style="color:gray: font-weight:bold;" class="flex mt-2"> <br>{{ strtoupper($user->body) }}</span>  <span class="text-green-500">-{{ $user->author->username }}</span></label></div>
    <form action="/posts/{{$user->id}}">
        @if ($slug === 1)
    <button type="submit" class="border-2 border-rose-500 rounded-lg mt-2 text-sm text-white p-2">Remove</button>
</form>
<form action="post/{{ $user->id }}/edit" class="">
    <button type="submit" class="border-2 border-blue-500 rounded-lg mt-2 text-sm text-white p-2">Edit</button>
</form>
    @endif

</div>
@endforeach
