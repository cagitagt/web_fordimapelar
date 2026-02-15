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
                <img src="{{ asset('storage/' . $news->thumbnail) }}" alt="" class="w-full h-full object-contain  rounded-2xl">
                <p class="text-stone-500 font-semibold mt-5">Gambar artikel : "{{ $news->title }}"</p>
            </div>

            <div class="text-stone-700 text-justify mt-20 text-lg">
            {!! $news->content !!}
        </div>
        </div>
        
    </section>
@endsection