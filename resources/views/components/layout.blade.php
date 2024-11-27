@props(['propName'])

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ env('APP_NAME') }}</title>
  <!-- Alpinejs -->
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-100 text-slate-900">
  <header class="bg-slate-800 shadow-lg">
    <nav>
      <a href="" class="nav-link">Home</a>

      @auth
          
      @endauth

      @auth
        <div class="relative grid place-items-center">
          {{-- Dropdown menu button --}}
          <button type="button" class="round-btn">
            <img src="https://picsum.photos/200" alt="">
          </button>
        </div>

        {{-- Dropdown menu --}}
        <div class="bg-white shadow-lg absolute top-10 right-0 rounded-lg overflow-hidden font-light">
          <p class="username">username</p>
          <a href="" class="block hover:bg-slate-100 pl-4 pr-8 py-8 mb-1">Dashboard</a>
        </div>
      @endauth

      @guest
        <div class="flex items-center gap-4">
          <a href="{{ route('login') }}" class="nav-link">Login</a>
          <a href="{{ route('register') }}" class="nav-link">Register</a>
        </div>
      @endguest

    </nav>
  </header>

  <main class="py-8 px-4 max-w-screen-lg mx-auto">
      {{ $slot }}
  </main>

</body>
</html>
