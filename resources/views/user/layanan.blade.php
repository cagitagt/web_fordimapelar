@extends('layout.user')
@section('content')
    {{-- hero --}}
    <section class="pt-20  bg-linear-to-b from-[#0595dd9e] via-neutral-50 to-neutral-50">
        <div
            class="flex flex-col justify-center items-center min-h-110 w-full my-10 text-stone-700 px-20 py-20 max-md:px-12 max-md:py-16 relative ">

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
    <section class="px-40 py-20 max-lg:px-6 max-md:py-10 flex flex-col gap-20 mt-5 mb-10  text-stone-700">

        <!-- ADVOCACY -->
        <div class="flex flex-col gap-20">
            <i class="text-3xl text-center max-md:text-xl font-semibold text-white bg-[#0595dd9e] rounded-t-2xl">
                Advokasi
            </i>

            <!-- wrapper -->
            <div class="grid grid-cols-3 max-md:grid-cols-1 gap-10 min-h-40">

                <!-- Visitasi, Kolaborasi, dan Undangan -->
                <div class="rounded-xl hover:border border-white hover:border-[#0595dd9e] flex flex-col justify-center items-center p-8">
                    <div class="">
                        <img src="/images/svg/invitation.svg" alt="" class="mb-5">
                        <h1 class="font-bold mb-2  leading-none">Visitasi, Kolaborasi, dan Undangan</h1>
                        <p class="text-xs">
                            Pengajuan Kerjasama untuk <span class="font-bold">Internal maupun Eksternal Universitas
                                Brawijaya</span>
                        </p>
                    </div>

                    <div class="text-sm mt-14 py-2 px-5 rounded-full text-white font-bold bg-[#0595dd9e]">
                        Klik di sini
                    </div>
                </div>

                <!-- narahubung -->
                <div
                    class="md:col-span-2 max-md:col-span-1 rounded-xl hover:border border-white hover:border-[#0595dd9e] p-8 flex flex-col justify-between items-center">
                    <div class="">
                        <img src="/images/svg/narahubung.svg" alt="" class="mb-5">
                        <h1 class="font-bold text-lg mb-2">Narahubung</h1>
                        <p class="text-xs"> Hubungi Kami di Nomor Ini untuk
                            Pengajuan dan Konfirmasi Kerjasama baik dari <span class="font-bold">Internal maupun Eksternal Universitas
                                Brawijaya</span>
                        </p>
                    </div>

                    <div class=" flex gap-2.5">
                        <a class="text-sm mt-14 py-2 px-5 rounded-full text-white font-bold bg-[#0595dd9e]">
                            081231201809
                        </a>
                        <a class="text-sm mt-14 py-2 px-5 rounded-full text-white font-bold bg-[#0595dd9e]">
                            081231201809
                        </a>
                    </div>

                </div>

            </div>

        </div>

        <!-- PARTNERSHIP -->
        <div class="flex flex-col gap-20">
            <i class="text-3xl text-center max-md:text-xl font-semibold text-white bg-[#0595dd9e] rounded-t-2xl">
                Kerjasama & Kemitraan Publikasi
            </i>

            <!-- wrapper -->
            <div class="grid max-lg:grid-cols-1 grid-cols-3 gap-10  min-h-40">

                <div
                    class=" rounded-xl hover:border border-white hover:border-[#0595dd9e]
                  flex flex-col justify-between items-center p-8">
                    <div class="">
                        <img src="/images/svg/internal.svg" alt="" class="mb-5 ">
                        <h1 class="font-bold text-lg mb-2">Mitra Internal</h1>
                        <p class="text-xs">
                            Syarat Pengajuan Kerjasama untuk <span class="font-bold">Internal Universitas Brawijaya</span>
                        </p>
                    </div>
                    <div class="text-sm mt-14 py-2 px-5 rounded-full text-white font-bold bg-[#0595dd9e]">
                        Klik di sini
                    </div>

                </div>

                <div
                    class=" rounded-xl hover:border border-white hover:border-[#0595dd9e]
                  flex flex-col justify-between items-center p-7 ">
                    <div class="">
                        <img src="/images/svg/eksternal.svg" alt="" class="mb-5 ">
                        <h1 class="font-bold text-lg mb-2">Mitra Eksternal</h1>
                        <p class="text-xs">
                            Syarat Pengajuan Kerjasama untuk <span class="font-bold">Eksternal Universitas Brawijaya</span>
                        </p>
                    </div>

                    <div class="text-sm mt-14 py-2 px-5 rounded-full text-white font-bold bg-[#0595dd9e]">
                        Klik di sini
                    </div>
                </div>

                <div
                    class=" rounded-xl hover:border border-white hover:border-[#0595dd9e]
                  flex flex-col justify-between items-center p-8">
                    <div class="">
                        <img src="/images/svg/form.svg" alt="" class="mb-5 ">
                        <h1 class="font-bold text-lg mb-2">Form Pengajuan Publikasi</h1>
                        <p class="text-xs">
                            Pengajuan Kerjasama publikasi <br> <i class="font-semibold">*harap dibaca ketentuan terlebih dahulu</i> </span>
                        </p>
                    </div>
                    <div class="text-sm mt-14 py-2 px-5 rounded-full text-white font-bold bg-[#0595dd9e]">
                        Klik di sini
                    </div>

                </div>
            </div>
        </div>
    </section>

    {{-- faq --}}
    <section class="px-40 py-20 max-lg:px-6 max-md:py-10">
         <h1 class="text-5xl font-bold max-md:text-3xl mb-20 text-center text-[#0595dd9e]">
            - frequently asked questions -
        </h1>
    </section>
@endsection
