@extends('layout.user')

@section('content')
    <section class="min-h-[65vh] md:h-screen w-full relative overflow-hidden bg-linear-to-b from-[#ECE80B]/20 via-neutral-50 to-neutral-50">

        {{-- decoration (reuse flower assets from Program Kerja) --}}
        <img src="/images/svg/blueeflower.png" alt=""
            class="absolute bottom-14 left-8 md:left-14 z-0 w-14 md:w-96 h-auto opacity-80 md:opacity-10 animate-spin [animation-duration:45s] drop-shadow-sm">
        <img src="/images/svg/blueflower.png" alt=""
            class="absolute top-20 right-16 md:right-28 z-0 w-16 md:w-98 h-auto opacity-80 md:opacity-10 animate-spin [animation-duration:45s] drop-shadow-sm">
        <img src="/images/svg/yellowflower.png" alt=""
            class="absolute bottom-3 right-10 md:right-20 z-0 w-20 md:w-60 h-auto opacity-70 md:opacity-20 animate-spin [animation-duration:28s] drop-shadow-sm">

        {{-- soft accent glow --}}
        <div class="absolute -top-24 -left-24 w-96 h-96 bg-[#0595DD]/10 rounded-full blur-3xl z-0"></div>
        <div class="absolute -bottom-24 -right-24 w-96 h-96 bg-[#100C51]/10 rounded-full blur-3xl z-0"></div>

        {{-- smooth fade into the section below --}}
        <div class="absolute inset-x-0 bottom-0 h-32 bg-linear-to-b from-transparent to-white z-0 pointer-events-none"></div>

        <div class="relative flex justify-center px-6 md:px-16 pt-32 md:pt-40 pb-20 flex-col items-center min-h-[65vh] md:h-screen text-stone-700 text-center"
            data-aos="fade-up" data-aos-duration="2000">

            <span class="inline-flex items-center gap-2 uppercase tracking-[0.25em] text-xs font-semibold text-[#100C51]/60 mb-5">
                <span class="w-6 h-px bg-[#100C51]/40"></span>
                Fordi Mapelar
                <span class="w-6 h-px bg-[#100C51]/40"></span>
            </span>

            <h1 class="text-5xl md:text-7xl font-bold mb-5 text-stone-800 tracking-tight leading-[1.05]">
                Karya <span class="text-[#100C51]">Kawan Fordi</span>
            </h1>

            <p class="text-sm md:text-lg text-stone-500 max-w-xl leading-relaxed">
                Cerita, proses, dan karya yang tumbuh bersama Kawan Fordi.
            </p>
        </div>
    </section>

    {{-- CARD GRID --}}
    <section class="bg-white">

        <div class="px-6 md:px-16 pt-16 md:pt-20 max-w-6xl mx-auto">
            <form method="GET" class="flex gap-3 mb-14 max-md:flex-col">

                {{-- search --}}
                <div class="relative w-full text-stone-400 ">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="absolute left-4 top-1/2 -translate-y-1/2 w-4 h-4 text-[#100C51] pointer-events-none">
                        <circle cx="11" cy="11" r="8"></circle>
                        <path d="m21 21-4.3-4.3"></path>
                    </svg>
                    <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari karya di sini"
                        class="border border-stone-400 rounded-full pl-11 pr-5 py-2.5 w-full text-sm text-[#100C51] focus:outline-none focus:border-[#100C51] transition-colors">
                </div>

                {{-- filter --}}
                <select name="category" class="border border-stone-400 rounded-full px-4 py-2.5 w-64 max-md:w-full text-sm focus:outline-none focus:border-[#100C51] transition-colors text-[#100C51]">
                    <option value="">Semua Kategori</option>

                    @foreach ($categories as $cat)
                        <option value="{{ $cat->id }}" {{ request('category') == $cat->id ? 'selected' : '' }}>
                            {{ $cat->title }}
                        </option>
                    @endforeach
                </select>

                <button
                    class="bg-[#100C51] text-white px-7 py-2.5 rounded-full text-sm font-semibold tracking-wide transition-all duration-300 hover:bg-[#1a154f] hover:shadow-lg shrink-0">
                    Filter
                </button>

            </form>
        </div>

        <div class="px-6 md:px-16 pb-20 md:pb-28 max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($artworks as $artwork)
                <a href="{{ route('artwork.show', $artwork->slug) }}"
                    class="bg-white rounded-2xl border border-stone-100 hover:shadow-xl shadow-sm overflow-hidden group transition-all duration-300 hover:-translate-y-1">
                    <div class="relative h-52 w-full overflow-hidden">
                        <img src="{{ asset('storage/' . $artwork->thumbnail) }}" alt=""
                            class="h-full w-full object-cover transition-transform duration-500 ease-out group-hover:scale-105">
                        <div
                            class="absolute inset-0 bg-linear-to-t from-black/40 via-black/0 to-black/0 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        </div>
                        <span
                            class="absolute top-3 left-3 bg-white/90 backdrop-blur-sm text-[#100C51] text-[10px] font-semibold tracking-wide uppercase px-3 py-1 rounded-full">
                            {{ $artwork->artworkCategory->title }}
                        </span>
                    </div>

                    <div class="p-6 flex flex-col gap-2">
                        <h2 class="text-lg text-stone-800 font-bold leading-snug group-hover:text-[#100C51] transition-colors">
                            {{ $artwork->title }}
                        </h2>
                        <p class="text-stone-400 text-xs">
                            {{ \Carbon\Carbon::parse($artwork->created_at)->format('d M Y') }}
                        </p>
                    </div>
                </a>
            @endforeach

        </div>

        <div class="flex justify-center py-16 border-t border-stone-200 max-w-6xl mx-auto px-6 md:px-16">
            {{ $artworks->links() }}
        </div>
    </section>
@endsection