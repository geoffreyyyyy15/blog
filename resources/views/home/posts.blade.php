<x-layout>
    <x-nav />
    <div class="mr-5">
        <div class="d-flex ">
          <x-side-panel />
            <x-flash />
            <div class="">
            <div class="ml-5">
                <h2 class="text-white text-xl text-center">My Posts</h2>
            </div>
            <x-post-message />
                @php
                $slug = 1;
            @endphp
                <x-posts :users="$users" :slug="$slug" />
                <div class="ml-5">
                {{ $users->links() }}
                </div>
        </div>
    </div>
</div>
</x-layout>
