@extends('layout.user')

@section('content')
    <section class="bg-white">

        {{-- full-bleed hero image --}}
        <div class="relative w-full h-[55vh] md:h-[75vh] overflow-hidden bg-stone-100">
            <img src="{{ asset('storage/' . $artwork->thumbnail) }}" alt="{{ $artwork->title }}"
                class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-linear-to-t from-black/60 via-black/10 to-transparent"></div>

            {{-- back link floating on image --}}
            <a href="{{ route('karya') }}"
                class="absolute top-6 left-6 md:top-10 md:left-16 inline-flex items-center gap-2 text-white/90 font-semibold text-sm hover:text-white transition-colors group bg-black/20 backdrop-blur-sm px-4 py-2 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="w-4 h-4 transition-transform group-hover:-translate-x-1">
                    <path d="m12 19-7-7 7-7"></path>
                    <path d="M19 12H5"></path>
                </svg>
                Kembali
            </a>

            {{-- title overlay --}}
            <div class="absolute bottom-0 left-0 right-0 px-6 md:px-16 pb-10 md:pb-14">
                <span class="inline-block uppercase tracking-[0.25em] text-xs font-semibold text-white/70 mb-3">
                    Karya
                </span>
                <h1 class="text-3xl md:text-6xl font-bold text-white leading-tight max-w-3xl">
                    {{ $artwork->title }}
                </h1>
            </div>
        </div>

        {{-- meta + content, asymmetric layout --}}
        <div class="px-6 md:px-16 py-16 md:py-24 max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-[240px_1fr] gap-12 lg:gap-20">

            {{-- sticky sidebar info --}}
            <aside class="lg:sticky lg:top-24 lg:self-start flex lg:flex-col gap-8 lg:gap-6 flex-wrap pb-8 lg:pb-0 border-b lg:border-b-0 border-stone-200">
                <div>
                    <p class="text-xs uppercase tracking-wider text-stone-400 font-semibold mb-1.5">Dibuat oleh</p>
                    <p class="text-stone-800 font-bold">{{ $artwork->author_name }}</p>
                </div>
                <div>
                    <p class="text-xs uppercase tracking-wider text-stone-400 font-semibold mb-1.5">Tanggal</p>
                    <p class="text-stone-800 font-bold">{{ \Carbon\Carbon::parse($artwork->created_at)->format('d M Y') }}</p>
                </div>
            </aside>

            {{-- content --}}
            <article class="prose prose-stone max-w-none text-stone-600 text-justify leading-relaxed text-base md:text-lg">
                {!! $artwork->content !!}
            </article>

        </div>

    </section>
@endsection