@extends('layout.user')

@section('content')
    <div class="w-full bg-white">

        {{-- Hero --}}
        <section class="relative min-h-[90vh] flex flex-col lg:flex-row items-center justify-center gap-16 px-6 lg:px-24 py-24 overflow-hidden">

            {{-- Teks --}}
            <div class="flex flex-col items-center lg:items-start text-center lg:text-left max-w-md z-10">
                <span class="text-xs uppercase tracking-[0.3em] text-stone-400 mb-5">
                    Fordi Mapelar &middot; Universitas Brawijaya
                </span>

                <h1 class="text-7xl md:text-9xl font-bold text-[#100C51] tracking-tight leading-none mb-6">
                    Galeri
                </h1>

                <p class="text-stone-500 text-sm md:text-base mb-8">
                    Cerita, proses, dan karya yang tumbuh bersama Kawan Fordi.
                </p>

                <a href="{{ route('photobooth') }}"
                   class="group inline-flex items-center gap-2 text-sm font-medium text-[#106AD2]">
                    Coba photobooth 
                    <span class="transition-transform duration-300 group-hover:translate-x-1">&rarr;</span>
                </a>
            </div>
    
            <a href="{{ route('photobooth') }}"
            class="group relative w-72 md:w-120 shrink-0 z-10 block">
                <img src="/images/photobooth-img.png" alt="Fordi Mapelar Brawijaya"
                    class="w-full drop-shadow-xl transition-transform duration-500 group-hover:scale-[1.03] group-hover:-rotate-2">
            </a>

            <div class="absolute inset-0 z-0 opacity-[0.15]"
                style="
                    background-image:
                        linear-gradient(to right, #ECE80B 1px, transparent 1px),
                        linear-gradient(to bottom, #ECE80B 1px, transparent 1px);
                    background-size: 48px 48px;
                ">
            </div>
        </section>

        {{-- Grid galeri --}}
        <section class="px-6 md:px-16 pb-28 max-w-7xl mx-auto">

            <div class="flex items-baseline justify-between border-b border-stone-200 pb-4 mb-10">
                <h2 class="text-xs uppercase tracking-widest text-stone-400">
                    {{ $galleries->total() }} Karya
                </h2>
            </div>

            <div class="columns-1 sm:columns-2 lg:columns-3 gap-6">
                @foreach ($galleries as $gallery)
                    <div class="mb-8 break-inside-avoid">
                        <div class="overflow-hidden rounded-lg bg-stone-100">
                            <img src="{{ asset('storage/' . $gallery->image) }}" alt="{{ $gallery->title }}"
                                 class="w-full h-full object-cover transition-transform duration-700 ease-out hover:scale-105">
                        </div>
                        <div class="pt-3">
                            <p class="text-sm font-semibold text-[#100C51]">{{ $gallery->title }}</p>
                            <p class="text-xs text-stone-400 mt-0.5">
                                {!! \Str::limit($gallery->description, 60) !!}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="flex justify-center pt-16">
                {{ $galleries->links() }}
            </div>
        </section>

    </div>
@endsection