 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>  | Cari mesjid  </title>
  @vite('resources/css/app.css')
</head>
<body @yield('body')>
 
 
  @include('dashboard.component.navbar')
 
 
  <main class="min-h-screen">
    @yield('content')
  </main>
 
 
  @include('sweetalert::alert')
  @vite('resources/js/app.js')
 
  
</body>
</html>
 