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

        <div class="relative flex justify-center px-16  max-md:px-6 flex-col items-center min-h-screen  text-stone-700  ">
            <h1 class="text-8xl font-bold max-md:text-3xl  mb-2 ">Berita & Informasi</h1>
            <p class=" max-lg:text-sm text-center max-w-3xl">
                Media publikasi berita resmi yang diluncurkan oleh UKM Fordi Mapelar Universitas Brawijaya. Laman berita ini
                hadir sebagai wadah komunikasi, dokumentasi, dan penyampaian informasi baik untuk internal maupun eksternal
                dengan menjunjung transparansi dan keterbukaan.
            </p>
        </div>
        </diV>
    </section>

    <section class="border-t-[#100C51] border-t-8 rounded-3xl">

        <div class="px-16 py-30 max-md:px-6 max-md:py-6">
            <form method="GET" class="flex gap-4 mb-10 max-md:flex-col">

                {{-- search --}}
                <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari berita di sini"
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

            @php $headline = $news->first(); @endphp

            @if ($headline)
                <a href="{{ route('news.show', $headline->slug) }}"
                    class="bg-white rounded-2xl hover:shadow-2xl shadow-lg overflow-hidden group grid grid-cols-2 max-lg:grid-cols-1 h-96 w-full mb-20 max-lg:min-h-min">
                    <div class=" overflow-hidden max-lg:h-48">
                        <img src="{{ asset('storage/' . $headline->thumbnail) }}" alt="{{ $headline->title }}"
                            class="h-full w-full object-cover  transition-transform duration-500 ease-out group-hover:scale-105 rounded-2xl">
                    </div>

                    <div class="p-5 flex flex-col gap-4 justify-center">
                        <h5 class="text-[#0595DD] font-semibold">{{ $headline->newsCategory->title }}</h5>
                        <h2 class="text-4xl text-stone-700 font-extrabold">
                            {{ $headline->title }}
                        </h2>
                        <p class="text-stone-500 text-sm">
                            {{ \Str::limit(strip_tags($headline->content), 150) }}
                        </p>

                        <p class="text-gray-600 text-sm">
                            {{ \Carbon\Carbon::parse($headline->created_at)->format('d M Y') }}
                        </p>
                    </div>
                </a>
            @endif

            <div class="  grid md:grid-cols-2 grid-cols-1 lg:grid-cols-3 gap-7 ">
                @foreach ($news->skip(1) as $item)
                    <a href="{{ route('news.show', $item->slug) }}"
                        class="bg-white rounded-2xl hover:shadow-2xl shadow-lg overflow-hidden group">
                        <div class="h-48 w-full overflow-hidden">
                            <img src="{{ asset('storage/' . $item->thumbnail) }}" alt="{{ $item->title }}"
                                class="h-full w-full object-cover transition-transform duration-500 ease-out group-hover:scale-110">
                        </div>

                        <div class="p-5 flex flex-col gap-2">
                            <h5 class="text-[#0595DD] font-semibold leading-none">{{ $item->newsCategory->title }}</h5>
                            <h2 class="text-lg text-stone-700 font-extrabold">
                                {{ $item->title }}
                            </h2>
                            <p class="text-gray-600 text-sm">
                                {{ \Carbon\Carbon::parse($item->created_at)->format('d M Y') }}
                            </p>
                        </div>
                    </a>
                @endforeach
            </div>
            <div class="ml-auto py-10 ">
                {{ $news->links() }}
            </div>
        </div>
    </section>
@endsection
