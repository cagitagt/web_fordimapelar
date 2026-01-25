@extends('layout.user')
@section('content')
    {{-- hero --}}
    <section class="pt-20 ">
        <div
            class="flex flex-col justify-center items-center min-h-110 w-full  text-stone-700 px-20 py-20 max-md:px-12 max-md:py-16 relative ">

            {{-- emoji --}}
            <span class="absolute top-6 right-24 lg:text-6xl text-3xl">🌞</span>
            <span class="absolute top-28 right-48 lg:text-6xl text-3xl rotate-20">💻</span>
            <span class="absolute top-20 right-80 lg:text-6xl text-3xl"> 💬</span>


            <span class="absolute top-12 left-24 lg:text-6xl text-3xl">📞</span>
            <span class="absolute top-40 left-44 lg:text-6xl text-3xl -rotate-20">📱</span>
            <span class="absolute top-20 left-80 lg:text-6xl text-3xl rotate-10">⁉️</span>


            <span class="absolute bottom-40 left-20 lg:text-6xl text-3xl">🤔</span>
            <span class="absolute bottom-24 left-60 lg:text-6xl text-3xl">🗨️</span>

            <span class="absolute bottom-38 right-28 lg:text-6xl text-3xl -rotate-12">📢</span>
            <span class="absolute bottom-26 right-80 lg:text-6xl text-3xl">📧</span>





            <div class="relative max-lg:backdrop-blur-md max-lg:bg-white/30  rounded-4xl p-5">
                <h1 class="text-5xl font-bold max-md:text-3xl mb-2 text-center">
                    Layanan & Komunikasi
                </h1>
                <p class="text-lg max-md:text-sm text-center max-w-180">
                    Jelajahi berbagai layanan yang kami sediakan untuk mendukung komunikasi dari internal maupun eksternal
                    UKM
                    Fordi
                    Mapelar
                </p>
            </div>

        </div>
    </section>

    {{-- layanan --}}
    <section class="px-40 py-20 max-lg:px-6 max-md:py-10 flex flex-col gap-20 my-5  text-stone-700">

        <!-- ADVOCACY -->
        <div class="flex flex-col gap-10">
            <i class="text-4xl max-md:text-xl font-bold text-[#0595DD]">
                Advokasi
            </i>

            <!-- wrapper -->
            <div class="grid grid-cols-3 max-md:grid-cols-1 gap-10 min-h-40">

                <!-- Visitasi, Kolaborasi, dan Undangan -->
                <div
                    class="rounded-xl shadow-2xl shadow-[#0595dd9e] flex flex-col justify-center items-center p-5 text-center gap-1">
                    <img src="/images/svg/internal.svg" alt="" >
                    <h1 class="font-bold text-lg leading-none">Visitasi, Kolaborasi, dan Undangan</h1>
                    <p class="text-xs">
                        Pengajuan Kerjasama untuk <span class="font-bold">Internal maupun Eksternal Universitas Brawijaya</span>
                    </p>
                </div>

                <!-- narahubung -->
                <div
                    class="md:col-span-2 max-md:col-span-1 rounded-xl shadow-2xl shadow-[#0595dd9e] flex flex-col justify-center items-center p-5 text-center gap-1">
                    <img src="/images/svg/internal.svg" alt="" >
                    <h1 class="font-bold text-lg">Narahubung</h1>
                    <p class="text-xs">
                        Pengajuan Kerjasama untuk <span class="font-bold">Internal Universitas Brawijaya</span>
                    </p>
                </div>

            </div>

        </div>

        <!-- PARTNERSHIP -->
        <div class="flex flex-col gap-10">
            <i class="text-4xl max-md:text-xl font-bold text-[#0595DD]">
                Kerjasama & Kemitraan Publikasi
            </i>

            <!-- wrapper -->
            <div class="grid max-lg:grid-cols-1 grid-cols-3 gap-10 text-center min-h-40">

                <div
                    class=" rounded-xl shadow-2xl shadow-[#0595dd9e]
                  flex flex-col justify-center items-center p-7 self-stretch gap-1">
                    <img src="/images/svg/internal.svg" alt="" >
                    <h1 class="font-bold text-lg">Mitra Internal</h1>
                    <p class="text-xs">
                        Pengajuan Kerjasama untuk <span class="font-bold">Internal Universitas Brawijaya</span>
                    </p>

                </div>

                <div
                    class=" rounded-xl shadow-2xl shadow-[#0595dd9e]
                  flex flex-col justify-center items-center p-7 self-stretch gap-1">
                    <img src="/images/svg/eksternal.svg" alt="">
                    <h1 class="font-bold text-lg">Mitra Eksternal</h1>
                    <p class="text-xs">
                        Pengajuan Kerjasama untuk <span class="font-bold">Eksternal Universitas Brawijaya</span>
                    </p>
                </div>

                <div
                    class=" rounded-xl shadow-2xl shadow-[#0595dd9e]
                  flex flex-col justify-center items-center p-7 self-stretch gap-1">
                    <img src="/images/svg/eksternal.svg" alt="">
                    <h1 class="font-bold text-lg">Form Pengajuan Publikasi</h1>
                    <p class="text-xs">
                        Pengajuan Kerjasama publikasi <br>*harap dibaca ketentuan terlebih dahulu </span>
                    </p>
                </div>

            </div>
        </div>

    </section>


    </section>


    {{-- faq --}}
    <section>
        <div class="min-h-screen w-full bg-white relative">

            {{-- paper top and bottom --}}
            <div class="absolute z-10 bottom-0 w-full h-auto">
                <img src="/images/paper.png" alt="" class="w-full h-full object-contain">
            </div>

            {{-- background color --}}
            <div class="absolute inset-0 z-0 bg-linear-to-t from-[#0595DD] to-white">


                {{-- content inside paper --}}
                <div
                    class="relative flex justify-center items-center min-h-screen flex-col text-white px-6 py-48 lg:px-20 lg:py-24">
                    <section class="text-center">
                        <h1 class="text-7xl  max-md:text-3xl  mb-2 font-decorative">FAQ</h1>
                        <i>frequently asked questions</i>
                        <div class=""></div>
                    </section>


                </div>
                {{-- content end inside paper --}}

            </div>
        </div>
    </section>
@endsection
