@extends('layout.user')

@section('content')
    <div class="min-h-screen w-full bg-white relative">
        <div class="absolute inset-0 z-0"
            style="
        background-image:
          linear-gradient(to right, #e5e7eb 1px, transparent 1px),
          linear-gradient(to bottom, #e5e7eb 1px, transparent 1px);
        background-size: 40px 40px;
      ">
        </div>

        <section class="relative z-10 pt-10 flex flex-col justify-center items-center h-full w-full text-stone-700 px-20 py-20 max-md:px-12 max-md:py-16">
            <h1 class="text-5xl font-bold max-md:text-3xl mb-2">
                Galeri
            </h1>
            <p class="text-lg max-md:text-sm text-center">
                Cerita, proses, dan karya yang tumbuh bersama Kawan Fordi.
            </p>
        </section>
    </div>
@endsection
