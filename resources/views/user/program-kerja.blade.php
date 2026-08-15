@extends('layout.user')
@section('content')
    <section class="min-h-screen w-full relative overflow-hidden">
        {{-- Dashed Grid --}}
        <div class="absolute inset-0 z-0 opacity-70"
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

        {{-- decoration (bunga tetap ada, dibuat lebih kecil & tenang) --}}
        <img src="/images/svg/blueeflower.png" alt=""
            class="absolute bottom-16 left-10 z-30 w-16 md:w-20 h-auto opacity-80 animate-spin [animation-duration:40s]">
        <img src="/images/svg/blueflower.png" alt=""
            class="absolute top-32 right-24 z-30 w-20 md:w-24 h-auto opacity-80 animate-spin [animation-duration:40s]">
        <img src="/images/svg/blueflower.png" alt=""
            class="absolute bottom-24 max-md:hidden left-48 w-20 z-30 h-auto opacity-70 animate-spin [animation-duration:40s]">
        <img src="/images/svg/yellowflower.png" alt=""
            class="absolute bottom-20 right-14 z-30 w-24 h-auto opacity-80 animate-spin [animation-duration:25s]">

        {{-- Your Content / Components --}}
        <div class="relative flex justify-center h-screen px-6 md:px-20 lg:px-40 py-20 max-md:py-6 flex-col text-stone-700"
            data-aos="fade-up" data-aos-duration="2000">
            <span class="uppercase tracking-[0.25em] text-xs font-semibold text-[#100C51]/60 mb-4">
                Fordi Mapelar
            </span>
            <h1 class="text-6xl md:text-8xl font-bold leading-none mb-6 text-stone-800 tracking-tight">Program Kerja</h1>
            <p class="text-lg md:text-2xl text-stone-500 max-w-2xl">
                Temukan Program Kerja kami yang bisa membantu kawan fordi untuk
                <span class="font-semibold text-[#100C51]">berkembang</span>
            </p>
        </div>
    </section>


    {{-- card proker --}}
    <section class="px-6 md:px-20 py-24 md:py-32">

        {{-- card departemen --}}
        @foreach ($departments as $department)
            <div class="mb-24">
                <div class="relative bg-white border border-stone-200 rounded-3xl mb-10 p-8 md:p-12 shadow-sm overflow-hidden">
                    <div class="relative grid-cols-3 grid max-lg:grid-cols-1 gap-10 items-center">
                        <div class="flex items-center justify-center md:justify-start">
                            <h1 class="font-bold text-5xl md:text-6xl text-[#100C51] tracking-tight">
                                {{ $department->name_dept }}
                            </h1>
                        </div>
                        <div class="text-justify text-stone-600 leading-relaxed">
                            <p>{!! $department->description !!}</p>
                        </div>
                        <div class="flex justify-center items-center">
                            {{-- img logo departemen/foto team/foto proker unggulan --}}
                            <div class="w-48 h-48 bg-neutral-50 rounded-2xl overflow-hidden shadow-sm">
                                <img src="{{ asset('storage/' . $department->image) }}"
                                    class="preview-image w-full h-full object-contain rounded-2xl"
                                    data-image="{{ asset('storage/' . $department->image) }}">
                            </div>
                        </div>
                    </div>

                    <img src="/images/svg/blueeflower.png" alt=""
                        class="absolute -right-6 -bottom-6 w-20 h-auto opacity-60">
                    <img src="/images/svg/blueeflower.png" alt=""
                        class="absolute right-16 -bottom-6 w-14 h-auto opacity-40">
                </div>

                {{-- card proker --}}
                <div class="grid grid-cols-3 max-lg:grid-cols-1 gap-8 justify-center flex-wrap min-h-96">

                    @foreach ($department->departmentProgram as $program)
                        <div
                            class="p-6 bg-white border border-stone-200 rounded-2xl flex flex-col min-h-96 justify-between gap-8 shadow-sm transition-all duration-300 hover:shadow-lg hover:-translate-y-1">

                            <!-- header -->
                            <div class="flex flex-col gap-3">
                                <h1 class="text-3xl md:text-4xl font-bold leading-tight text-stone-800">
                                    {{ $program->name_program }}
                                </h1>

                                <span class="bg-[#100C51] text-xs text-white rounded-full px-3 py-1 w-fit font-medium tracking-wide">
                                    Perkiraan: {{ $program->time_label }}
                                </span>

                                <p class="mt-3 text-sm leading-relaxed text-stone-500 text-justify">
                                    {!! $program->description !!}
                                </p>
                            </div>

                            <!-- image -->
                            <div class="w-full h-32 overflow-hidden rounded-xl">
                                <img src="{{ asset('storage/' . $program->image) }}"
                                    class="w-full h-full object-cover preview-image"
                                    data-image="{{ asset('storage/' . $program->image) }}">
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach

    </section>
    <!--  Image Modal -->
    <div id="globalImageModal" class="fixed inset-0 bg-black/80 hidden items-center justify-center z-90">
        <img id="globalModalImage" class="max-w-[90%] max-h-[90%] rounded-xl shadow-2xl">
    </div>
@endsection