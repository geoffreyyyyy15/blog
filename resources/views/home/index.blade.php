<x-layout>
    <nav class="bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div class="flex items-center justify-between h-16">
            <div class="flex-shrink-0">
              <a href="#">
                <img class="h-8 w-auto" src="https://www.sony.com/image/logo.png" alt="Sony logo">
              </a>
            </div>
            <div class="hidden md:block">
              <div class="ml-10 flex items-baseline space-x-4">
                <a href="/home" class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Home</a>
                <a href="#" class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Products</a>
                <a href="#" class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Support</a>
                <div class="relative">
                  <a href="#" class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">More</a>
                  <div class="absolute top-10 -right-8 bg-gray-900 rounded-md shadow-lg z-10 hidden group-hover:block">
                    <a href="#" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-800">About Us</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-800">Contact Us</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="hidden md:block">
              <div class="ml-4 flex items-center md:ml-6">
                <form action="/home" method="GET">
                  <div class="flex items-center border-b border-gray-400 py-2">
                    <input type="text" value="{{ request('search') }}" name="search" id="search" placeholder="Search" class="bg-gray-900 text-white border-0 focus:ring-0 focus:border-white rounded-md">
                    {{-- <button type="submit" class="ml-4 bg-blue-600 hover:bg-blue-700 px-3 py-2 rounded-md text-white font-medium">Go</button> --}}
                  </div>
                </form>
                {{-- <a href="#" class="ml-3 bg-blue-600 hover:bg-blue-700 px-3 py-2 rounded-md text-white font-medium">Login/Signup</a> --}}
              </div>
            </div>
            <div class="-mr-2 flex md:hidden">
              <button type="button" class="bg-gray-900 inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <!-- Icon when menu is closed. -->
                <!--
                  Heroicon name: menu

                  Menu open: "hidden", Menu closed: "block"
                -->
                <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke>
                  </path>
                </svg>
                </nav>

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
