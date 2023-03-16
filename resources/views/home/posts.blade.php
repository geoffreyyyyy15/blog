<x-layout>
    <x-nav />
<<<<<<< HEAD
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
=======
    <x-side-panel />

    <x-posts :users="$users"  />
</div>


</x-layout>
>>>>>>> 57d7635a5fc2bede6b73602d4e5ea732ba123afc
