@extends('layout.user')

@section('content')
    <section class="px-16 py-20 max-md:px-6 max-md:py-6  ">

        <div class="text-center p-14 max-lg:p-8 shadow-2xl gap-10 rounded-2xl items-center">
            <a href="{{ route('karya') }}" class=" text-stone-500 font-semibold">Kembali ke semua Karya</a>
            <div
                class="text-center grid grid-cols-2 max-lg:grid-cols-1 my-16 gap-20">

                <div class="w-full">
                    <img src="{{ asset('storage/' . $artwork->thumbnail) }}" alt="" class="w-full h-full object-contain  rounded-2xl">
                    <p class="text-stone-500 font-semibold text-xs mt-1">Gambar : "{{ $artwork->title }}"</p>
                </div>

                <div class=" flex flex-col justify-center items-center gap-5">
                    <h1 class="max-lg:text-xl text-3xl font-bold text-stone-800">{{ $artwork->title }}</h1>
                    <div class="flex gap-5 text-stone-500 text-center font-semibold text-sm">
                        <p>{{ \Carbon\Carbon::parse($artwork->created_at)->format('d M Y') }}</p>
                        <p>Karya : {{ $artwork->author_name }}</p>
                    </div>
                </div>
            </div>

            <div class="text-stone-700 text-justify mt-20 text-lg">
                {!! $artwork->content !!}
            </div>

        </div>

    </section>
@endsection
