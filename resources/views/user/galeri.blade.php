@extends('layout.user')

@section('content')
    <div class="min-h-min w-full bg-linear-to-b relative">
        <div class="absolute inset-0 z-0"
            style="
        background-image:
          linear-gradient(to right, #ece80bc1 1px, transparent 1px),
          linear-gradient(to bottom, #ece80bc1 1px, transparent 1px);
        background-size: 40px 40px;
      ">
        </div>

        <div class="">
            {{-- header --}}
            <section
                class="relative min-h-screen z-10  flex flex-col justify-center items-center h-full w-full text-stone-700  px-6">
                <div class="relative ">
                    <h1 class="text-9xl font-bold max-md:text-7xl mb-2">
                        Galeri
                    </h1>
                    <p class="text-lg max-md:text-sm ">
                        Cerita, proses, dan karya yang tumbuh bersama Kawan Fordi.
                    </p>
                    <i class="text-xs text-amber-50">psst, coba cari photobooth tersembunyi</i>
                </div>

                <a href="{{ route('photobooth') }}" class="cursor-pointer w-80 absolute right-0 max-lg:bottom-20 ">
                    <img src="/images/photobooth-in.png" alt="">
                </a>

                <img src="/images/photobooth-img.png" alt=""
                    class="absolute left-9  bottom-16 -rotate-4 w-80  max-md:hidden">

            </section>

            {{-- image column --}}
            <section class="relative px-12 py-24 max-lg:px-6 max-lg:py-12">

                <div class="columns-3 max-lg:columns-2 max-md:columns-1 gap-10">
                    @foreach ($galleries as $gallery)
                        <div class="group relative rounded-2xl overflow-hidden mb-10">
                            <img src="{{ $gallery->image }}" alt=""
                                class="w-full h-full object-cover transition-transform duration-500 ease-out group-hover:scale-110">
                            <div
                                class="absolute bottom-0 left-0 w-full bg-black/60 text-white  px-4 py-3 translate-y-full transition-transform duration-500 group-hover:translate-y-0">
                                <p class="text-sm font-semibold">{{ $gallery->title }}</p>
                                <p class="text-xs opacity-80">{!! \Str::limit($gallery->description, 50) !!}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="ml-auto py-10">
                    {{ $galleries->links() }}
                </div>
            </section>
        </div>
    </div>
@endsection
