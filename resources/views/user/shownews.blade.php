@extends('layout.user')

@section('content')
    <section class="px-16 py-20 max-md:px-6 max-md:py-6 ">
        <div class="text-center flex flex-col mb-20 p-14 max-lg:p-8 my-20 shadow-2xl gap-10 rounded-2xl items-center">
            <p><a href="{{ route('berita') }}" class="text-stone-500 font-semibold">Kembali ke semua berita</a></p>
            <h1 class="max-lg:text-4xl text-6xl font-bold text-stone-800">{{ $news->title }}</h1>
            <div class="flex gap-5 text-stone-500 text-center font-semibold">
                <p>{{ \Carbon\Carbon::parse($news->created_at)->format('d M Y') }}</p>
                <p>Author : {{ $news->author_name }}</p>
            </div>
            <div class="w-full">
                <img src="{{ asset('storage/' . $news->thumbnail) }}" alt=""
                    class="w-full h-full object-contain  rounded-2xl">
                <p class="text-stone-500 font-semibold mt-5">Gambar artikel : "{{ $news->title }}"</p>
            </div>

            <div class="text-stone-700 text-justify mt-20 text-lg">
                {!! $news->content !!}
            </div>
        </div>

        <div class="grid max-lg:grid-cols-1 grid-cols-3 gap-10">
            @foreach ($newests as $newest)
                <a href="{{ route('news.show', $newest->slug) }}" class="bg-white rounded-2xl hover:shadow-2xl shadow-lg overflow-hidden group">
                    <div class="h-48 w-full overflow-hidden">
                        <img src="{{ asset('storage/' . $newest->thumbnail) }}" alt="{{ $newest->title }}"
                            class="h-full w-full object-cover transition-transform duration-500 ease-out group-hover:scale-110">
                    </div>

                    <div class="p-5 flex flex-col gap-2">
                        <h5 class="text-teal-700 font-semibold leading-none">{{ $newest->newsCategory->title }}</h5>
                        <h2 class="text-lg text-stone-700 font-extrabold">
                            {{ $newest->title }}
                        </h2>
                        <p class="text-gray-600 text-sm">{{ \Carbon\Carbon::parse($newest->created_at)->format('d M Y') }}
                        </p>
                    </div>
                </a>
                
            @endforeach
        </div>

    </section>
@endsection
