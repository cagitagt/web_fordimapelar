@extends('layout.user')

@section('content')
    <section class="px-16 py-20 max-md:px-6 max-md:py-10 bg-neutral-50">

        <article class="max-w-4xl mx-auto">

            {{-- back link --}}
            <a href="{{ route('berita') }}"
                class="inline-flex items-center gap-2 text-stone-500 font-semibold text-sm mb-10 hover:text-[#100C51] transition-colors group">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="w-4 h-4 transition-transform group-hover:-translate-x-1">
                    <path d="m12 19-7-7 7-7"></path>
                    <path d="M19 12H5"></path>
                </svg>
                Kembali ke semua berita
            </a>

            {{-- header --}}
            <div class="text-center flex flex-col items-center mb-12">
                <span class="uppercase tracking-[0.25em] text-xs font-semibold text-[#100C51]/50 mb-4">
                    Berita
                </span>

                <h1 class="max-lg:text-3xl text-5xl font-bold text-stone-800 leading-tight mb-6 max-w-3xl">
                    {{ $news->title }}
                </h1>

                <div class="flex flex-wrap justify-center items-center gap-x-4 gap-y-2 text-stone-400 text-sm font-medium">
                    <span class="flex items-center gap-1.5">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4">
                            <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                            <path d="M3 10h18M8 2v4M16 2v4"></path>
                        </svg>
                        {{ \Carbon\Carbon::parse($news->created_at)->format('d M Y') }}
                    </span>
                    <span class="w-1 h-1 rounded-full bg-stone-300"></span>
                    <span class="flex items-center gap-1.5">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4">
                            <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                        {{ $news->author_name }}
                    </span>
                </div>
            </div>

            {{-- image --}}
            <figure class="w-full mb-16">
                <div class="rounded-2xl overflow-hidden shadow-xl">
                    <img src="{{ asset('storage/' . $news->thumbnail) }}" alt="{{ $news->title }}"
                        class="w-full h-auto object-cover">
                </div>
                <figcaption class="text-stone-400 text-xs font-medium mt-3 text-center">
                    Gambar artikel : "{{ $news->title }}"
                </figcaption>
            </figure>

            {{-- content --}}
            <div class="prose prose-stone max-w-none text-stone-600 text-justify leading-relaxed text-base md:text-lg">
                {!! $news->content !!}
            </div>

        </article>

        {{-- related news --}}
        <div class="max-w-6xl mx-auto mt-24 pt-16 border-t border-stone-200">
            <h3 class="text-2xl font-bold text-stone-800 mb-10 text-center">Berita Lainnya</h3>

            <div class="grid max-lg:grid-cols-1 grid-cols-3 gap-8">
                @foreach ($newests as $newest)
                    <a href="{{ route('news.show', $newest->slug) }}"
                        class="bg-white rounded-2xl border border-stone-100 hover:shadow-xl shadow-sm overflow-hidden group transition-all duration-300 hover:-translate-y-1">
                        <div class="h-48 w-full overflow-hidden">
                            <img src="{{ asset('storage/' . $newest->thumbnail) }}" alt="{{ $newest->title }}"
                                class="h-full w-full object-cover transition-transform duration-500 ease-out group-hover:scale-105">
                        </div>

                        <div class="p-5 flex flex-col gap-2">
                            <h5 class="text-[#0595DD] font-semibold text-xs uppercase tracking-wide leading-none">
                                {{ $newest->newsCategory->title }}
                            </h5>
                            <h2 class="text-lg text-stone-800 font-bold leading-snug group-hover:text-[#100C51] transition-colors">
                                {{ $newest->title }}
                            </h2>
                            <p class="text-stone-400 text-xs">
                                {{ \Carbon\Carbon::parse($newest->created_at)->format('d M Y') }}
                            </p>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>

    </section>
@endsection