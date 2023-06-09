<nav class="bg-cyan-900 border-gray-200">
  <div class="max-w-screen-xl flex items-center justify-between mx-auto p-4">
    <a href="/" class="flex items-center xs:mt-2">
      <img src="{{ asset('images/logo_2.svg') }}" class="md:h-8 xs:h-7 mr-3 xs:mr-1" alt="Flowbite Logo" />
      <span class="self-center md:text-2xl xs:text-base font-semibold whitespace-nowrap text-white ">Cari Mesjid</span>
    </a>

    <div class=" w-full xs:w-auto ml-auto md:pr-20 xs:pr-5" id="navbar-items">
      <ul class="font-medium flex flex-col p-4 xs:p-0 mt-4 border border-gray-100 rounded-lg  xs:flex-row xs:space-x-8 xs:mt-0 xs:border-0 md:dark:bg-gray-900">

        @auth
        <li>
          <a href="/dashboard" class=" block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-100 xs:hover:bg-transparent xs:border-0 xs:hover:text-blue-700 xs:p-0 md:dark:hover:text-blue-500 md:dark:hover:bg-transparent mt-2">Dashboard</a>
        </li>
        @endauth
        <li>
          <a href="/listMasjid" class="block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-100 xs:hover:bg-transparent xs:border-0 xs:hover:text-blue-700 xs:p-0 md:dark:hover:text-blue-500 md:dark:hover:bg-transparent mt-2">Masjid</a>
        </li>
        <li>
          <a href="/listMasjid" class="block py-2  text-white rounded hover:bg-gray-100 xs:hover:bg-transparent xs:border-0 xs:hover:text-blue-700 xs:p-0 md:dark:hover:text-blue-500 md:dark:hover:bg-transparent mt-2">
            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
            </svg>
          </a>
                  
          
        </li>
      </ul>
    </div>

    <div class="relative">
      <img id="avatarButton" type="button" data-dropdown-toggle="userDropdown" data-dropdown-placement="bottom-start" class="md:w-10 md:h-10 xs:w-8 xs:f-8 rounded-full cursor-pointer" src="{{ asset('images/anonim.svg') }}" alt="User dropdown">

      <!-- Dropdown menu -->
      <div id="userDropdown" class="z-50 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 absolute right-0 mt-2">
        @auth
        <div class="px-4 py-3 text-sm text-gray-900">
          <div class="font-medium truncate">Selamat Datang</div>
          <div>{{ Auth::user()->name }}</div>
          <div class="font-semibold truncate">
            @can('jemaah')
                Jemaah
            @endcan
            @can('pengurus')
                Pengurus Masjid
            @endcan
            
          </div>

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
            <a href="/login" class="block px-4 py-2 hover:bg-gray-100">Login</a>
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
