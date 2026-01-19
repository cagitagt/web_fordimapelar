@extends('layout.user')

@section('content')
    {{-- HERO --}}
    <section class="relative w-full  px-40 py-20 max-md:px-12 max-md:py-6 overflow-hidden">
        {{-- subtle background glow --}}
        <div class="absolute inset-0 -z-10 "></div>

        <div class="flex flex-col items-center text-center gap-2">
            <span class="uppercase tracking-widest text-sm font-semibold text-amber-600">
                Kabinet 2024
            </span>

            <h1 class="font-extrabold text-5xl leading-tight max-md:text-4xl">
                Kabinet Dharma Utthita
            </h1>

            <p class="max-w-2xl font-medium text-lg text-gray-600">
                Mengenal lebih dekat visi, misi, dan semangat pergerakan UKM Fordi Mapelar.
            </p>
        </div>
    </section>

    {{-- IMAGE / VISUAL SECTION --}}
    <section class=" px-40 py-20 max-md:px-12 max-md:py-6">
        <div
            class="relative min-h-88 w-full rounded-3xl overflow-hidden shadow-xl bg-amber-600 flex items-center justify-center">

            {{-- placeholder text --}}
            <span class="text-white/70 font-semibold text-lg">
                Visual Kabinet
            </span>

            {{-- optional overlay --}}
            <div class="absolute inset-0 bg-black/10"></div>
        </div>
    </section>

    {{-- CONTENT --}}
    <section class=" px-40 py-20 max-md:px-12 max-md:py-6">
        <div class="max-w-4xl mx-auto">
            <div class="relative bg-white p-10 rounded-3xl shadow-xl">
                {{-- accent line --}}
                <div class="absolute top-0 left-0 h-1 w-24 bg-amber-600 rounded-full"></div>

                <h2 class="text-3xl font-bold mb-4">
                    Narasi Besar Kabinet
                </h2>

                <p class="text-gray-700 leading-relaxed text-lg">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius sint facilis velit assumenda distinctio.
                    Excepturi eligendi ad repellat fuga optio, hic qui, iusto quibusdam non delectus dolore.
                    Doloremque quam exercitationem laborum tenetur accusamus deserunt sed fugiat, excepturi,
                    assumenda ipsam reiciendis explicabo id voluptatum ab illo obcaecati, beatae at consequuntur.
                </p>
            </div>
        </div>
    </section>
@endsection
