<!DOCTYPE html>
<html lang="id">

<head>
    <link rel="icon" href="{{ asset('favicon.png') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Halaman Tidak Ditemukan | Fordi Mapelar</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased">

    <section class="min-h-screen w-full relative overflow-hidden bg-linear-to-b from-[#0595dd1a] via-neutral-50 to-neutral-50 flex items-center justify-center">

        {{-- dot grid backdrop --}}
        <div class="absolute inset-0 z-0 opacity-60"
            style="
                background-image: radial-gradient(#100c5114 1px, transparent 1px);
                background-size: 26px 26px;
            ">
        </div>

        {{-- soft accent glow --}}
        <div class="absolute -top-24 -left-24 w-96 h-96 bg-[#0595DD]/10 rounded-full blur-3xl z-0"></div>
        <div class="absolute -bottom-24 -right-24 w-96 h-96 bg-[#100C51]/10 rounded-full blur-3xl z-0"></div>

        {{-- content --}}
        <div class="relative z-10 flex flex-col items-center justify-center text-center px-6">

            <img src="/images/fordi.png" alt="Fordi Mapelar" class="h-16 md:h-20 w-auto object-contain mb-10 opacity-90">

            <h1 class="text-8xl md:text-[10rem] font-bold leading-none text-[#100C51] tracking-tight">
                404
            </h1>

            <h2 class="text-2xl md:text-4xl font-bold text-stone-800 mt-4 mb-4">
                Halaman Tidak Ditemukan
            </h2>

            <p class="text-sm md:text-base text-stone-500 max-w-md leading-relaxed mb-10">
                Halaman yang kamu cari mungkin sudah dipindahkan, dihapus,
                atau memang belum pernah ada.
            </p>

            <a href="{{ route('index') }}"
                class="px-7 py-2.5 bg-[#100C51] text-white rounded-full text-sm font-semibold tracking-wide transition-all duration-300 hover:bg-[#1a154f] hover:shadow-lg hover:-translate-y-0.5">
                Kembali ke Beranda
            </a>
        </div>
    </section>

</body>

</html>