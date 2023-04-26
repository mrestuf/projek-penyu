<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>
  
  {{-- ICONS --}}
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  {{-- FONTS --}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600;700;800&display=swap" rel="stylesheet">

  {{-- STYLES --}}
  @livewireStyles
  @stack('styles')
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
  @include('layouts.header')
  
  
  <main class="flex lg:flex-row flex-col container mx-auto my-5 px-5 lg:px-0">
    @include('dashboard.user.layouts.sidebar')
    <div class="ml-0 lg:ml-10 w-full">
      @yield('content')
    </div>
  </main>

  @include('layouts.footer')

  @livewireScripts
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <x-livewire-alert::scripts />
  @stack('scripts')
  </div>
</body>
</html>