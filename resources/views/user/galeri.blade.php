@extends('layout.user')

@section('content')
    <div class="min-h-screen w-full bg-linear-to-b relative">
        <div class="absolute inset-0 z-0"
            style="
        background-image:
          linear-gradient(to right, #ece80bc1 1px, transparent 1px),
          linear-gradient(to bottom, #ece80bc1 1px, transparent 1px);
        background-size: 40px 40px;
      ">
        </div>

        <div class="pt-20">
            {{-- header --}}
            <section
                class="relative min-h-110 z-10 pt-10 flex flex-col justify-center items-center h-full w-full text-stone-700 px-20 py-20 max-md:px-12 max-md:py-16 ">
                <div class="relative">
                    <h1 class="text-8xl font-bold max-md:text-5xl mb-2">
                        Galeri
                    </h1>
                    <p class="text-lg max-md:text-sm ">
                        Cerita, proses, dan karya yang tumbuh bersama Kawan Fordi.
                    </p>
                    <i class="text-xs text-amber-100">psst, coba cari photobooth tersembunyi</i>
                </div>

                <a href="{{ route('photobooth') }}" class="cursor-pointer w-80 absolute right-0 max-lg:top-64 ">
                    <img src="/images/photobooth-in.png" alt="">
                </a>

                <img src="/images/photobooth-img.png" alt="" class="absolute left-9  bottom-16 -rotate-4 w-80  max-md:hidden">

            </section>

            <div class="relative px-12 py-12 max-lg:px-6 max-lg:py-12 bg-amber-200 "></div>
            <div class="relative px-12 py-12 max-lg:px-6 max-lg:py-12 bg-amber-800 "></div>
            {{-- image column --}}
            <section class="relative px-12 py-24 max-lg:px-6 max-lg:py-12">
                <div class="columns-3 max-lg:columns-2 max-md:columns-1 gap-10">

                    <div class="group relative rounded-2xl overflow-hidden mb-10">
                        <img src="/images/hapus/2.jpeg" alt=""
                            class="w-full h-full object-cover transition-transform duration-500 ease-out group-hover:scale-110">
                        <div
                            class="absolute bottom-0 left-0 w-full bg-black/60 text-white  px-4 py-3 translate-y-full transition-transform duration-500 group-hover:translate-y-0">
                            <p class="text-sm font-semibold">Rapat Kedirjenan</p>
                            <p class="text-xs opacity-80">Riset dan Keilmuan</p>
                        </div>
                    </div>

                    <div class="group relative rounded-2xl overflow-hidden mb-10">
                        <img src="/images/hapus/3.jpeg" alt=""
                            class="w-full h-full object-cover transition-transform duration-500 ease-out group-hover:scale-110">
                        <div
                            class="absolute bottom-0 left-0 w-full bg-black/60 text-white  px-4 py-3 translate-y-full transition-transform duration-500 group-hover:translate-y-0">
                            <p class="text-sm font-semibold">Rapat Kedirjenan</p>
                            <p class="text-xs opacity-80">Riset dan Keilmuan</p>
                        </div>
                    </div>

                    <div class="group relative rounded-2xl overflow-hidden mb-10">
                        <img src="/images/hapus/6.jpeg" alt=""
                            class="w-full h-full object-cover transition-transform duration-500 ease-out group-hover:scale-110">
                        <div
                            class="absolute bottom-0 left-0 w-full bg-black/60 text-white  px-4 py-3 translate-y-full transition-transform duration-500 group-hover:translate-y-0">
                            <p class="text-sm font-semibold">Rapat Kedirjenan</p>
                            <p class="text-xs opacity-80">Riset dan Keilmuan</p>
                        </div>
                    </div>

                    <div class="group relative rounded-2xl overflow-hidden mb-10">
                        <img src="/images/hapus/4.jpeg" alt=""
                            class="w-full h-full object-cover transition-transform duration-500 ease-out group-hover:scale-110">
                        <div
                            class="absolute bottom-0 left-0 w-full bg-black/60 text-white  px-4 py-3 translate-y-full transition-transform duration-500 group-hover:translate-y-0">
                            <p class="text-sm font-semibold">Rapat Kedirjenan</p>
                            <p class="text-xs opacity-80">Riset dan Keilmuan</p>
                        </div>
                    </div>

                    <div class="group relative rounded-2xl overflow-hidden mb-10">
                        <img src="/images/hapus/5.jpeg" alt=""
                            class="w-full h-full object-cover transition-transform duration-500 ease-out group-hover:scale-110">
                        <div
                            class="absolute bottom-0 left-0 w-full bg-black/60 text-white  px-4 py-3 translate-y-full transition-transform duration-500 group-hover:translate-y-0">
                            <p class="text-sm font-semibold">Rapat Kedirjenan</p>
                            <p class="text-xs opacity-80">Riset dan Keilmuan</p>
                        </div>
                    </div>

                    <div class="group relative rounded-2xl overflow-hidden mb-10">
                        <img src="/images/hapus/8.jpeg" alt=""
                            class="w-full h-full object-cover transition-transform duration-500 ease-out group-hover:scale-110">
                        <div
                            class="absolute bottom-0 left-0 w-full bg-black/60 text-white  px-4 py-3 translate-y-full transition-transform duration-500 group-hover:translate-y-0">
                            <p class="text-sm font-semibold">Rapat Kedirjenan</p>
                            <p class="text-xs opacity-80">Riset dan Keilmuan</p>
                        </div>
                    </div>

                    <div class="group relative rounded-2xl overflow-hidden mb-10">
                        <img src="/images/hapus/7.jpeg" alt=""
                            class="w-full h-full object-cover transition-transform duration-500 ease-out group-hover:scale-110">
                        <div
                            class="absolute bottom-0 left-0 w-full bg-black/60 text-white  px-4 py-3 translate-y-full transition-transform duration-500 group-hover:translate-y-0">
                            <p class="text-sm font-semibold">Rapat Kedirjenan</p>
                            <p class="text-xs opacity-80">Riset dan Keilmuan sdvfasvasvas afasvb sadvbqaebe asgab awsvcsv  vdb</p>
                        </div>
                    </div>
                </div>
            </section>


        </div>

    </div>
@endsection
