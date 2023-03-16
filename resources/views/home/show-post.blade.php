<x-layout>
   <x-nav />
    <div class="mr-5">
        <div class="d-flex">
            <x-side-panel />
            <x-flash />
            <div class="">
            <div class="ml-5">
                <h2 class="text-white text-xl text-center">{{ $post->author->username }}'s Post</h2>
                <p class="text-sm text-gray-400">Posted {{ $post->created_at->diffForHumans() }}</p>
                <p class="text-white text-lg">{{ $post->body }}</p>
                <form action="/post/comment/{{ $post->id }}" method="post">
                    @csrf
                    <input type="text" name="post_id" value="{{ $post->id }}" hidden>
                <textarea class="rounded-xl w-96" placeholder="Comment!" name="body" id="" cols="30" rows="10"></textarea>
                <button type="submit" class="rounded-xl bg-blue-500 p-2 text-white">Comment</button>
            </form>
            <h4 class="ml-5 mb-2">Comments</h4>
            <input type="text" hidden value="{{ $post->id }}" name="post_id">
            @foreach ($post->comments as $comment)
            <div class="bg-gray-600 w-auto h-96 mb-5 p-2 mt-5 rounded-xl ml-5">

                    <div class="bg-white w-80 h-80 p-2  rounded-xl ml-5">

                        <p class="text-lg">{{ $comment->author->username }}</p>
                        <p class="text-lg">{{$comment->body }}</p>
                        @endforeach
                    </div>
            </div>
            </div>
            {{-- {{dd($post )}} --}}
        </div>
    </div>

</div>

</x-layout>
