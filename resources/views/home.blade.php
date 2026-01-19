<!doctype html>
<html lang="en">
<head>
  <link rel="icon" href="{{ asset('favicon.png') }}">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>

<body class="bg-white overflow-x-hidden font-sans">

  <div class="relative min-h-screen w-full">

    <!-- Amber Glow Background -->
    <div
      class="pointer-events-none absolute inset-0 z-0"
      style="
        background-image: radial-gradient(
          125% 125% at 50% 90%,
          #ffffff 40%,
          #106AD2 100%
        );
        background-size: 100% 100%;
      ">
    </div>

    <!-- Navbar -->
    <nav class="fixed top-0 left-0 right-0 z-20 flex items-center justify-between px-20 py-8 text-white backdrop-blur-sm">
      <div class="text-xl font-bold w-14 h-14">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="object-cover">
      </div>
      <ul class="flex gap-6 font-semibold">
        <li><a href="/" class="rounded-full font-bold bg-white px-4 py-2 text-[#09182C]">Beranda</a></li>
        <li><a href="/welcome" class="">Tentang</a></li>
        <li><a href="/homepage" class="">Berita</a></li>
         <li><a href="/homepage" class="">Karya</a></li>
        <li><a href="/homepage" class="">Program Kerja</a></li>
        <li><a href="/homepage" class="">Layanan</a></li>

      </ul>
    </nav>

    <!-- Page Content -->
    <main class="relative z-10 pt-32">

      <section class="mx-auto max-w-5xl py-40 text-[#09182C] flex flex-col justify-center items-center">
        <h1 class=" text-5xl font-bold">
          Fordi Mapelar
        </h1>

        <p class="leading-relaxed text-center my-1 text-stone-600 font-semibold">
          Forum Studi Mahasiswa Pengembang Penalaran
        </p>

        <h1 class="text-5xl font-bold">
          Universitas Brawijaya
        </h1>

        <div class="flex gap-3">
          <button class="mt-10 px-6 py-2 bg-[#09182C] text-white rounded-full font-bold hover:bg-[#05101e] transition duration-300">Tentang Kami</button>
          <button class="mt-10 px-6 py-2 bg-white border-stone-600 rounded-full font-bold hover:bg-[#05101e] transition duration-300 text-stone-600 border-2">Layanan</button>
        </div>
      </section>
 
    </main>

  </div>

</body>
</html>
