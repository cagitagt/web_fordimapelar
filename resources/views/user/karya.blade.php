@extends('layout.user')

@section('content')
    <section class="min-h-110 w-full relative overflow-hidden">
        <!-- Dual Gradient Overlay (Top Background) -->
        <diV class="absolute inset-0 z-0  "
            style="
            background-image:
                linear-gradient(to right, rgba(229,231,235,0.8) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(229,231,235,0.8) 1px, transparent 1px),
                radial-gradient(circle 500px at 0% 20%, rgba(224, 246, 59, 0.3), transparent),
                radial-gradient(circle 500px at 100% 0%, rgba(224, 246, 59, 0.3), transparent);
            background-size:
                48px 48px,
                48px 48px,
                100% 100%,
                100% 100%;
            mask-image: linear-gradient(to bottom, black 60%, transparent 100%);
            -webkit-mask-image: linear-gradient(to bottom, black 60%, transparent 100%);
        ">
            <div class="relative flex justify-center items-center min-h-110 flex-col text-stone-700  px-6">
                <h1 class="text-5xl font-bold max-md:text-3xl  mb-2 ">Karya Kawan Fordi</h1>
                <p class="text-lg max-md:text-sm text-center">
                    Cerita, proses, dan karya yang tumbuh bersama Kawan Fordi.
                </p>
            </div>
        </diV>
    </section>

    {{-- CARD GRID --}}
    <section class="px-16 py-20 max-md:px-6 max-md:py-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-7">
        @foreach ($artworks as $artwork)
            <a href="{{ route('artwork.show', $artwork->slug) }}" class="bg-white rounded-2xl hover:shadow-2xl shadow-lg overflow-hidden group">
                <div class="h-48 w-full overflow-hidden">
                    <img src="{{ asset('storage/' . $artwork->thumbnail) }}" alt=""
                        class="h-full w-full object-cover transition-transform duration-500 ease-out group-hover:scale-110">
                </div>

                <div class="p-5 flex flex-col gap-4">
                    <h5 class="text-teal-700 font-semibold">{{ $artwork->artworkCategory->title }}</h5>
                    <h2 class="text-xl text-stone-700 font-extrabold leading-snug">
                        {{ $artwork->title }}
                    </h2>
                    <p class="text-gray-600 text-sm">{{ \Carbon\Carbon::parse($artwork->created_at)->format('d M Y') }}</p>
                </div>
            </a>
            
        @endforeach

    </section>

    {{-- decoration --}}
    <section class="h-96 w-full bg-white relative">

            {{-- paper top and bottom --}}
            <div class="absolute z-10 bottom-0 w-full h-auto">
                <img src="/images/paper.png" alt="" class="w-full h-full object-contain">
            </div>

            {{-- background color --}}
            <div class="absolute inset-0 z-0 bg-linear-to-t from-[#ECE80B] to-white">


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
    </section>

        
@endsection
