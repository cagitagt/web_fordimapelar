<!doctype html>
<html lang="en">
<head>
  <link rel="icon" href="{{ asset('favicon.png') }}">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fordi Mapelar | UB</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class=" bg-neutral-50  w-full min-h-screen font-sans">
    @include('partials.navbar')

    <main class="w-full min-h-screen ">
        @yield('content')
    </main>

    @include('partials.footer')
</body>
</html>
