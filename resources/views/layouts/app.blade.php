<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title> {{ $title }} | Cari mesjid  </title>
  @yield('head')
  @vite('resources/css/app.css')

</head>
<body @yield('body')>
  @include('sweetalert::alert')

 
  @include('landing.component.navbar')
 
 
  <main class="min-h-screen">
    @yield('content')
  </main>
 
 
  @vite('resources/js/app.js')
 
  
</body>

@yield('scripts')
</html>
 