<nav class="bg-cyan-900 border-gray-200">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="/" class="flex items-center">
      <img src="{{ asset('images/logo_2.svg') }}" class="h-8 mr-3" alt="Flowbite Logo" />
      <span class="self-center text-2xl font-semibold whitespace-nowrap text-white ">Cari Mesjid</span>
    </a>

    <div class="hidden w-full md:block md:w-auto ml-auto pr-20" id="navbar-items">
      <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg  md:flex-row md:space-x-8 md:mt-0 md:border-0 md:dark:bg-gray-900">

        @auth
        <li>
          <a href="/dashboard" class=" block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 md:dark:hover:bg-transparent mt-2">Dashboard</a>
        </li>
        @endauth
        <li>
          <a href="/listMasjid" class="block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 md:dark:hover:bg-transparent mt-2">Masjid</a>
        </li>
        <li>
          <button type="button" data-collapse-toggle="navbar-search" aria-controls="navbar-search" aria-expanded="false" class="md:hidden text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-200 rounded-lg text-sm p-2.5 mr-1" >
            <svg class="w- h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
            <span class="sr-only">Search</span>
          </button>
          <div class="relative hidden md:block">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
              <svg class="w-5 h-5 text-gray-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
              <span class="sr-only">Search icon</span>
            </div>
            <input type="text" id="search-navbar" class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500" placeholder="Search...">
          </div>
        </li>
      </ul>
    </div>

    <div class="relative">
      <img id="avatarButton" type="button" data-dropdown-toggle="userDropdown" data-dropdown-placement="bottom-start" class="w-10 h-10 rounded-full cursor-pointer" src="{{ asset('images/anonim.svg') }}" alt="User dropdown">

      <!-- Dropdown menu -->
      <div id="userDropdown" class="z-50 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 absolute right-0 mt-2">
        @auth
        <div class="px-4 py-3 text-sm text-gray-900">
          <div class="font-medium truncate">Selamat Datang</div>
          <div>{{ Auth::user()->name }}</div>
        </div>
        <ul class="py-2 text-sm text-gray-700" aria-labelledby="avatarButton">
          <li>
            <a href="/profile" class="block px-4 py-2 hover:bg-gray-100">Profil</a>
          </li>
          <li>
            <form action="{{ route('logout') }}" method="POST">
              @csrf

              <x-dropdown-link :href="route('logout')"
              onclick="event.preventDefault();
                           this.closest('form').submit();">
                {{ __('Log Out') }}
       </x-dropdown-link>          
      </form>

          </li>
        </ul>
        @else
        <div class="px-4 py-3 text-sm text-gray-900">
          <div>Guest</div>
          <div class="font-medium truncate">Silahkan Login</div>
        </div>
        <ul class="py-2 text-sm text-gray-700" aria-labelledby="avatarButton">
          <li>
            <a href="login" class="block px-4 py-2 hover:bg-gray-100">Login</a>
          </li>
        </ul>
        @endauth


      </div>
    </div>
  </div>
</nav>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const avatarButton = document.getElementById('avatarButton');
    const userDropdown = document.getElementById('userDropdown');

    avatarButton.addEventListener('click', function(event) {
      event.stopPropagation();
      userDropdown.classList.toggle('hidden');
    });

    // Close the dropdown when clicking outside
    document.addEventListener('click', function(event) {
      if (!userDropdown.contains(event.target) && !avatarButton.contains(event.target)) {
        userDropdown.classList.add('hidden');
      }
    });
  });
</script>
