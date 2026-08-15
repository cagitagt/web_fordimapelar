@extends('layout.user')

@section('content')

    {{-- HERO --}}
    <section class="relative overflow-hidden bg-stone-50 md:h-screen h-96 ">

        {{-- oversized logo watermark --}}
        <img src="{{ asset('images/logo.png') }}" alt=""
            class="pointer-events-none select-none absolute -right-24 -top-5 max-md:hidden w-136 h-145 object-contain opacity-[0.05] "
            aria-hidden="true">

        <div class="absolute px-16 max-md:px-6 pt-28 pb-24 max-md:pt-16 max-md:pb-14 max-w-4xl bottom-0"
             data-aos="fade-up" data-aos-duration="700">

            <p class="text-xs font-semibold tracking-widest uppercase mb-5 text-[#0595DD]">
                UKM Fordi Mapelar &middot; Universitas Brawijaya
            </p>

            <h1 class="font-extrabold max-md:text-4xl text-6xl leading-[1.05] mb-6 text-stone-700">
                Berita &amp; Informasi
            </h1>

            <p class="text-base max-md:text-sm leading-relaxed max-w-xl text-stone-500">
                Media publikasi resmi UKM Fordi Mapelar — wadah komunikasi, dokumentasi, dan
                penyampaian informasi bagi internal maupun eksternal, dengan menjunjung
                transparansi dan keterbukaan.
            </p>
        </div>

        <div class="h-px w-full bg-stone-200"></div>
    </section>

    {{-- CONTENT --}}
    <section class="bg-stone-50">
        <div class="px-16 py-16 max-md:px-6 max-md:py-10">

            {{-- SEARCH / FILTER — minimal underline toolbar, no boxed inputs --}}
            <form method="GET" class="flex items-end gap-8 max-md:flex-col max-md:items-stretch max-md:gap-5 mb-16 pb-6 border-b border-stone-200">

                <label class="flex-1 min-w-0">
                    <span class="block text-xs uppercase tracking-widest mb-2 text-stone-500">Cari</span>
                    <input type="text" name="search" value="{{ request('search') }}" placeholder="Judul, topik, atau kata kunci"
                        class="w-full bg-transparent border-0 border-b border-stone-200 py-1.5 text-sm text-stone-700 focus:outline-none focus:border-b-2 focus:border-[#100C51] transition-colors">
                </label>

                <label class="w-64 max-md:w-full">
                    <span class="block text-xs uppercase tracking-widest mb-2 text-stone-500">Kategori</span>
                    <select name="category"
                        class="w-full bg-transparent border-0 border-b border-stone-200 py-1.5 text-sm text-stone-700 focus:outline-none focus:border-b-2 focus:border-[#100C51] transition-colors">
                        <option value="">Semua Kategori</option>
                        @foreach ($categories as $cat)
                            <option value="{{ $cat->id }}" {{ request('category') == $cat->id ? 'selected' : '' }}>
                                {{ $cat->title }}
                            </option>
                        @endforeach
                    </select>
                </label>

                <button type="submit"
                    class="text-sm font-semibold px-6 py-2.5 rounded-full bg-[#100C51] text-white transition-opacity hover:opacity-90 max-md:w-full">
                    Terapkan
                </button>
            </form>

            {{-- HEADLINE STORY --}}
            @php $headline = $news->first(); @endphp

            @if ($headline)
                <a href="{{ route('news.show', $headline->slug) }}"
                   class="group grid grid-cols-2 max-lg:grid-cols-1 gap-10 max-lg:gap-5 mb-20 pb-16 border-b border-stone-200">

                    <div class="overflow-hidden rounded-2xl aspect-[4/3] max-lg:aspect-[16/9]">
                        <img src="{{ asset('storage/' . $headline->thumbnail) }}" alt="{{ $headline->title }}"
                            class="h-full w-full object-cover transition-transform duration-700 ease-out group-hover:scale-[1.03]">
                    </div>

                    <div class="flex flex-col justify-center gap-4">
                        <span class="text-xs font-semibold uppercase tracking-widest text-[#0595DD]">
                            {{ $headline->newsCategory->title }}
                        </span>

                        <h2 class="font-extrabold text-4xl max-lg:text-2xl leading-tight text-stone-700">
                            {{ $headline->title }}
                        </h2>

                        <p class="text-sm leading-relaxed text-stone-500">
                            {{ \Str::limit(strip_tags($headline->content), 160) }}
                        </p>

                        <p class="text-xs uppercase tracking-widest mt-2 text-stone-500">
                            {{ \Carbon\Carbon::parse($headline->created_at)->format('d M Y') }}
                        </p>
                    </div>
                </a>
            @endif

            {{-- LISTING — 3-column grid, modern card treatment --}}
            <div class="grid md:grid-cols-2 grid-cols-1 lg:grid-cols-3 gap-x-8 gap-y-14">
                @forelse ($news->skip(1) as $item)
                    <a href="{{ route('news.show', $item->slug) }}"
                       class="group flex flex-col gap-4 transition-transform duration-300 ease-out hover:-translate-y-1">

                        <div class="relative overflow-hidden rounded-2xl aspect-[4/3] shadow-sm group-hover:shadow-xl transition-shadow duration-300">
                            <img src="{{ asset('storage/' . $item->thumbnail) }}" alt="{{ $item->title }}"
                                class="h-full w-full object-cover transition-transform duration-500 ease-out group-hover:scale-110">

                            <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>

                            <span class="absolute top-3 left-3 text-[10px] font-semibold uppercase tracking-widest text-[#100C51] bg-white/90 backdrop-blur px-3 py-1.5 rounded-full">
                                {{ $item->newsCategory->title }}
                            </span>
                        </div>

                        <div class="flex flex-col gap-2 px-0.5">
                            <h3 class="font-bold text-lg leading-snug text-stone-700 transition-colors duration-200 group-hover:text-[#0595DD]">
                                {{ $item->title }}
                            </h3>

                            <div class="flex items-center gap-2 text-xs text-stone-400">
                                <span class="h-1 w-1 rounded-full bg-[#0595DD]"></span>
                                <span class="uppercase tracking-widest">
                                    {{ \Carbon\Carbon::parse($item->created_at)->format('d M Y') }}
                                </span>
                            </div>
                        </div>
                    </a>
                @empty
                    <p class="col-span-full py-16 text-center text-sm text-stone-500">
                        Belum ada berita yang cocok dengan pencarian atau filter ini.
                    </p>
                @endforelse
            </div>

            <div class="pt-12">
                {{ $news->links() }}
            </div>
        </div>
    </section>
@endsection