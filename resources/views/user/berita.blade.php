@extends('layout.user')

@section('content')
    <section class="min-h-110 w-full relative overflow-hidden">
        <!-- Dual Gradient Overlay (Top Background) -->
        <diV class="absolute inset-0 z-0  "
            style="
            background-image:
                linear-gradient(to right, rgba(229,231,235,0.8) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(229,231,235,0.8) 1px, transparent 1px),
                radial-gradient(circle 500px at 0% 20%, rgba(139,92,246,0.3), transparent),
                radial-gradient(circle 500px at 100% 0%, rgba(224, 246, 59, 0.3), transparent);
            background-size:
                48px 48px,
                48px 48px,
                100% 100%,
                100% 100%;
            mask-image: linear-gradient(to bottom, black 60%, transparent 100%);
            -webkit-mask-image: linear-gradient(to bottom, black 60%, transparent 100%);
        ">
            <div class="relative flex justify-center items-center min-h-110 flex-col text-stone-700  ">
                <h1 class="text-5xl font-bold max-md:text-3xl  mb-2 ">Berita & Informasi</h1>
                <p class="text-lg max-md:text-sm text-center">
                    Informasi dan kabar terkini seputar kegiatan, agenda, dan
                    dinamika Fordi Mapelar.
                </p>
            </div>
        </diV>
    </section>

    <section class="px-16 pb-20 max-md:px-6 max-md:py-6">

        <a href="{{ route('news.show', $news[0]->slug) }}"
            class="bg-white rounded-2xl hover:shadow-2xl shadow-lg overflow-hidden group grid grid-cols-2 max-lg:grid-cols-1 h-96 w-full mb-20">
            <div class=" overflow-hidden ">
                <img src="{{ asset('storage/' . $news[0]->thumbnail) }}" alt="{{ $news[0]->title }}"
                    class="h-full w-full object-cover transition-transform duration-500 ease-out group-hover:scale-105 rounded-2xl">
            </div>

            <div class="p-5 flex flex-col gap-4 justify-center">
                <h5 class="text-teal-700 font-semibold">{{ $news[0]->newsCategory->title }}</h5>
                <h2 class="text-4xl text-stone-700 font-extrabold">
                    {{ $news[0]->title }}
                </h2>
                <p class="text-stone-500 text-sm">
                    {{ \Str::limit(strip_tags($news[0]->content), 150) }}
                </p>

                <p class="text-gray-600 text-sm">{{ \Carbon\Carbon::parse($news[0]->created_at)->format('d M Y') }}</p>
            </div>
        </a>

        <div class="  grid md:grid-cols-2 grid-cols-1 lg:grid-cols-3 gap-7 ">
            @foreach ($news->skip(1) as $item)
                <a href="{{ route('news.show', $item->slug) }}" class="bg-white rounded-2xl hover:shadow-2xl shadow-lg overflow-hidden group">
                    <div class="h-48 w-full overflow-hidden">
                        <img src="{{ asset('storage/' . $item->thumbnail) }}" alt="{{ $item->title }}"
                            class="h-full w-full object-cover transition-transform duration-500 ease-out group-hover:scale-110">
                    </div>

                    <div class="p-5 flex flex-col gap-2">
                        <h5 class="text-teal-700 font-semibold leading-none">{{ $item->newsCategory->title }}</h5>
                        <h2 class="text-lg text-stone-700 font-extrabold">
                            {{ $item->title }}
                        </h2>
                        <p class="text-gray-600 text-sm">{{ \Carbon\Carbon::parse($item->created_at)->format('d M Y') }}
                        </p>
                    </div>
                </a>
            @endforeach

        </div>
    </section>
@endsection
