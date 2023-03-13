@props(['users'])
@props(['posts'])


@foreach ($users as $user)
    


<div class="mt-5">

<div class="border border-top-0 border-right-0 border-secondary mt-2">
    <label for="exampleFormControlTextarea1" class="text-white" style="font-size: 10px">{{ $user->author->username }} <span style="color: white"> {{ $user->created_at->diffForHumans()}} {{ $user->body}}</span></label></div>
</div>
@endforeach
</div>

