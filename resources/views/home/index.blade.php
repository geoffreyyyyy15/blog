<x-layout>
    <x-nav />
    <div class="mr-5">
        <div class="d-flex ">
          <x-side-panel />
            <x-flash />
            <div class="">
                <x-post-message />
                @php
                $slug = 0;
                @endphp
                <x-posts :users="$users" :slug="$slug"  />
                <div class="ml-5">
                {{ $users->links() }}
                </div>
        </div>
    </div>
</div>
</x-layout>
