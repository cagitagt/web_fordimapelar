@extends('layout.user')

@section('content')
    <section class="min-h-screen w-full relative overflow-hidden">
        <div class="absolute inset-0 z-0"
            style="
            background-image:
                linear-gradient(to right, #e7e5e4 2px, transparent 1px),
                linear-gradient(to bottom, #e7e5e4 2px, transparent 1px);
            background-size: 20px 20px;
            background-position: 0 0, 0 0;

            -webkit-mask-image:
                repeating-linear-gradient(
                    to right,
                    black 0px,
                    black 3px,
                    transparent 3px,
                    transparent 8px
                ),
                repeating-linear-gradient(
                    to bottom,
                    black 0px,
                    black 3px,
                    transparent 3px,
                    transparent 8px
                );
            mask-image:
                repeating-linear-gradient(
                    to right,
                    black 0px,
                    black 3px,
                    transparent 3px,
                    transparent 8px
                ),
                repeating-linear-gradient(
                    to bottom,
                    black 0px,
                    black 3px,
                    transparent 3px,
                    transparent 8px
                );

            -webkit-mask-composite: source-in;
            mask-composite: intersect;
        ">
        </div>

        <div class="relative flex justify-center px-16  max-md:px-6 flex-col items-center min-h-screen  text-stone-700  " data-aos="fade-up" data-aos-duration="2000">
            <h1 class="text-8xl font-bold max-md:text-3xl  mb-2 ">Karya Kawan Fordi</h1>
            <p class=" max-lg:text-sm text-center max-w-3xl">
                Cerita, proses, dan karya yang tumbuh bersama Kawan Fordi.
            </p>
        </div>
        </diV>
    </section>

    {{-- CARD GRID --}}
    <section class=" border-t-[#100C51] border-t-8 rounded-3xl ">

        <div class="px-16 pt-30 max-md:px-6 max-md:py-6">
            <form method="GET" class="flex gap-4 mb-10 max-md:flex-col">

            {{-- search --}}
            <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari karya di sini"
                class="border rounded-lg px-4 py-2 w-full">

            {{-- filter --}}
            <select name="category" class="border rounded-lg px-3 py-2 w-64 max-md:w-full">
                <option value="">Semua Kategori</option>

                @foreach ($categories as $cat)
                    <option value="{{ $cat->id }}" {{ request('category') == $cat->id ? 'selected' : '' }}>
                        {{ $cat->title }}
                    </option>
                @endforeach
            </select>

            <button class="bg-[#100C51] text-white px-6 py-2 rounded-lg">
                Filter
            </button>

        </form>
        </div>
        

        <div class="px-16 pb-30 max-md:px-6 max-md:py-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-7">
            @foreach ($artworks as $artwork)
                <a href="{{ route('artwork.show', $artwork->slug) }}"
                    class="bg-white rounded-2xl hover:shadow-2xl shadow-lg overflow-hidden group">
                    <div class="h-48 w-full overflow-hidden">
                        <img src="{{ asset('storage/' . $artwork->thumbnail) }}" alt=""
                            class="h-full w-full object-cover transition-transform duration-500 ease-out group-hover:scale-110">
                    </div>

                    <div class="p-5 flex flex-col gap-4">
                        <h5 class="text-teal-700 font-semibold">{{ $artwork->artworkCategory->title }}</h5>
                        <h2 class="text-xl text-stone-700 font-extrabold leading-snug">
                            {{ $artwork->title }}
                        </h2>
                        <p class="text-gray-600 text-sm">{{ \Carbon\Carbon::parse($artwork->created_at)->format('d M Y') }}
                        </p>
                    </div>
                </a>
            @endforeach

        </div>
        <div class="ml-auto py-10 px-16 max-md:px-6 ">
            {{ $artworks->links() }}
        </div>
    </section>
@endsection
