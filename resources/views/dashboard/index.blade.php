


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title> {{ $title }} | Cari mesjid  </title>
  @vite('resources/css/app.css')
  <link rel="icon" type="image/svg+xml" href="images/logo_2.svg">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <Link href="{{ asset('/css/style.css') }} " rel="stylesheet">
</head>
<body class="bg-cyan-950">
 
 
  @include('landing.component.navbar')
 {{-- @include('layouts.navigation') --}}
 
  <main class="min-h-screen">

    @if (session('Information'))
    <div id="toast-success" class="flex justify-center mx-auto mt-4 items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
        <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
            <span class="sr-only">Check icon</span>
        </div>
        <div class="ml-3 text-sm font-normal">{{ session('Information') }}
        </div>
        <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-success" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
    </div>
    
    @endif
    <div class="flex justify-center pt-10 pb-10" style="">
        @include('landing.component.card')
    </div>
    
        <div class="slide-container swiper bg-cyan-950 mt-5 mb-10">
        <div class="slide-content">
            <div class="card-wrapper swiper-wrapper ">

                @foreach ($masjid as $d)
                <div class="card swiper-slide" >
                    <div class="image-content">
                        <span class="overlay"></span>
    
                            <div class="card-image">
                                <img src="{{ asset( $d->Mosque_image_url ) }}" alt="" class="card-img">
                            </div>
                    </div>
                    <div class="card-content">
                        <h2 class="card-name">{{ $d->name }}</h2>
                        <a href="/profilMasjid/sejarah/{{ $d->id }}">
                        <button class="card-button">View More</button>
                        </a>
                    </div>
                </div>
                @endforeach
                {{-- <div class="card swiper-slide" >
                    <div class="image-content">
                        <span class="overlay"></span>
    
                            <div class="card-image">
                                <img src="{{ asset('images/Rectangle_87.png') }}" alt="" class="card-img">
                            </div>
                    </div>
                    <div class="card-content">
                        <h2 class="card-name">Masjid</h2>
                        <button class="card-button">View More</button>
                    </div>
                </div>
                <div class="card swiper-slide" >
                    <div class="image-content">
                        <span class="overlay"></span>
    
                            <div class="card-image">
                                <img src="{{ asset('images/Rectangle_87.png') }}" alt="" class="card-img">
                            </div>
                    </div>
                    <div class="card-content">
                        <h2 class="card-name">Masjid</h2>
                        <button class="card-button">View More</button>
                    </div>
                </div><div class="card swiper-slide" >
                    <div class="image-content">
                        <span class="overlay"></span>
    
                            <div class="card-image">
                                <img src="{{ asset('images/Rectangle_87.png') }}" alt="" class="card-img">
                            </div>
                    </div>
                    <div class="card-content">
                        <h2 class="card-name">Masjid</h2>
                        <p class="card-description">Dolores ducimus aliquid natus alias? Excepturi, reprehenderit corporis? Mollitia vel veniam quia culpa accusantium harum aperiam ipsam repellat, facere a at enim possimus.</p>
                        <button class="card-button">View More</button>
                    </div>
                </div>
                <div class="card swiper-slide" >
                    <div class="image-content">
                        <span class="overlay"></span>
    
                            <div class="card-image">
                                <img src="{{ asset('images/Rectangle_87.png') }}" alt="" class="card-img">
                            </div>
                    </div>
                    <div class="card-content">
                        <h2 class="card-name">Masjid</h2>
                        <p class="card-description"> delectus repellendus natus blanditiis! Dolores ducimus aliquid natus alias? Excepturi, reprehenderit corporis? Mollitia vel veniam quia culpa accusantium harum aperiam ipsam repellat, facere a at enim possimus.</p>
                        <button class="card-button">View More</button>
                    </div>
                </div>
                <div class="card swiper-slide" >
                    <div class="image-content">
                        <span class="overlay"></span>
    
                            <div class="card-image">
                                <img src="{{ asset('images/Rectangle_87.png') }}" alt="" class="card-img">
                            </div>
                    </div>
                    <div class="card-content">
                        <h2 class="card-name">Masjid</h2>
                        <p class="card-description"> blanditiis! Dolores ducimus aliquid natus alias? Excepturi, reprehenderit corporis? Mollitia vel veniam quia culpa accusantium harum aperiam ipsam repellat, facere a at enim possimus.</p>
                        <button class="card-button">View More</button>
                    </div>
                </div> --}}
                
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    
        </div>
    
      <!-- Swiper JS -->
      <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    
      <!-- Initialize Swiper -->
      <script>
        var swiper = new Swiper(".slide-content", {
            
          slidesPerView: 2,
          spaceBetween: 30,
          slidesPerGroup: 2,
          loop: true,
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
          },
          navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
          },
          breakpoints: {
      // When window width is >= 768px (md)
      768: {
        slidesPerView: 3,
        slidesPerGroup: 3,
      },
    },
        });
      </script>
</main>
 
 
  @include('sweetalert::alert')
  @vite('resources/js/app.js')
 
  
</body>

@yield('scripts')
</html>
 