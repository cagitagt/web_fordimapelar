<!doctype html>
<html lang="en">
<head>
  <link rel="icon" href="{{ asset('favicon.png') }}">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fordi Mapelar</title>
  @vite('resources/css/app.css')
</head>

<body class="bg-white w-full min-h-screen font-sans">
    @include('partials.navbar')

    <main class="w-full min-h-screen pt-12 max-md:pt-8">
        @yield('content')
    </main>

    @include('partials.footer')
</body>
</html>
