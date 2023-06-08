


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title> {{ $title }} | Cari mesjid  </title>
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <Link href="{{ asset('/css/style.css') }} " rel="stylesheet">
</head>
<body class="bg-cyan-950">
 
 
  @include('landing.component.navbar')
 {{-- @include('layouts.navigation') --}}
 
  <main class="min-h-screen">
    <div class="" style="display: flex; justify-content: center; align-items: center; height: 700px;">
        @include('landing.component.card')
    </div>
    
        <div class="slide-container swiper">
        <div class="slide-content">
            <div class="card-wrapper swiper-wrapper">
                <div class="card swiper-slide" >
                    <div class="image-content">
                        <span class="overlay"></span>
    
                            <div class="card-image">
                                <img src="{{ asset('images/Rectangle_87.png') }}" alt="" class="card-img">
                            </div>
                    </div>
                    <div class="card-content">
                        <h2 class="card-name">Masjid</h2>
                        <p class="card-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, numquam itaque ratione ipsa eos rerum accusantium sapiente, ab et pariatur dolores soluta nisi, delectus repellendus natus blanditiis! Dolores ducimus aliquid natus alias? Excepturi, reprehenderit corporis? Mollitia vel veniam quia culpa accusantium harum aperiam ipsam repellat, facere a at enim possimus.</p>
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
                        <p class="card-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, numquam itaque ratione ipsa eos rerum accusantium sapiente, ab et pariatur dolores soluta nisi, delectus repellendus natus blanditiis! Dolores ducimus aliquid natus alias? Excepturi, reprehenderit corporis? Mollitia vel veniam quia culpa accusantium harum aperiam ipsam repellat, facere a at enim possimus.</p>
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
                        <p class="card-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, numquam itaque ratione ipsa eos rerum accusantium sapiente, ab et pariatur dolores soluta nisi, delectus repellendus natus blanditiis! Dolores ducimus aliquid natus alias? Excepturi, reprehenderit corporis? Mollitia vel veniam quia culpa accusantium harum aperiam ipsam repellat, facere a at enim possimus.</p>
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
                        <p class="card-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, numquam itaque ratione ipsa eos rerum accusantium sapiente, ab et pariatur dolores soluta nisi, delectus repellendus natus blanditiis! Dolores ducimus aliquid natus alias? Excepturi, reprehenderit corporis? Mollitia vel veniam quia culpa accusantium harum aperiam ipsam repellat, facere a at enim possimus.</p>
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
                        <p class="card-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, numquam itaque ratione ipsa eos rerum accusantium sapiente, ab et pariatur dolores soluta nisi, delectus repellendus natus blanditiis! Dolores ducimus aliquid natus alias? Excepturi, reprehenderit corporis? Mollitia vel veniam quia culpa accusantium harum aperiam ipsam repellat, facere a at enim possimus.</p>
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
                        <p class="card-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, numquam itaque ratione ipsa eos rerum accusantium sapiente, ab et pariatur dolores soluta nisi, delectus repellendus natus blanditiis! Dolores ducimus aliquid natus alias? Excepturi, reprehenderit corporis? Mollitia vel veniam quia culpa accusantium harum aperiam ipsam repellat, facere a at enim possimus.</p>
                        <button class="card-button">View More</button>
                    </div>
                </div>
                
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
          slidesPerView: 3,
          spaceBetween: 30,
          slidesPerGroup: 3,
          loop: true,
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
          },
          navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
          },
        });
      </script>
</main>
 
 
  @include('sweetalert::alert')
  @vite('resources/js/app.js')
 
  
</body>

@yield('scripts')
</html>
 