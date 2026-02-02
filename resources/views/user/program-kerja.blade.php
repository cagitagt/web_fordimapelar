@extends('layout.user')
@section('content')
    <section class="h-screen w-full relative">
        {{-- Dashed Grid --}}
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

        {{-- decoration --}}
        <img src="/images/svg/blueeflower.png" alt=""
            class="absolute bottom-20 left-20 w-25 h-auto animate-spin [animation-duration:30s]">
        <img src="/images/svg/blueflower.png" alt=""
            class="absolute top-40  right-36   w-28   h-auto animate-spin [animation-duration:30s]">
        <img src="/images/svg/blueflower.png" alt=""
            class="absolute bottom-30 max-md:hidden left-56 w-28   h-auto animate-spin [animation-duration:30s]">
        <img src="/images/svg/yellowflower.png" alt=""
            class="absolute bottom-28 right-20 w-30 h-auto animate-spin [animation-duration:15s]">

        {{-- Your Content / Components --}}
        <div class="relative flex justify-center  h-screen px-40 py-20 max-lg:px-6 max-md:py-6 flex-col text-stone-700  ">
            <h1 class="text-9xl font-bold max-md:text-7xl leading-none mb-5 ">Program Kerja</h1>
            <i class="text-2xl max-md:text-sm bg-[#ECE80B]">
                Temukan Program Kerja kami yang bisa membantu kawan fordi untuk <span class="font-bold ">berkembang</span>
            </i>
        </div>
    </section>


    {{-- card proker --}}
    <section class="px-20 py-40  max-lg:px-12 max-lg:py-30 border-t-[#100C51] border-t-8 rounded-3xl">

        {{-- card departemen --}}
        <div class="mb-20">
            <div class="relative border-4 border-[#100C51] rounded-2xl mb-10 p-10 ">
                <div class=" relative grid-cols-3 grid max-lg:grid-cols-1 gap-10">
                    <div class=" flex items-center justify-center">
                        <h1 class="font-bold max-md:text-5xl text-8xl text-[#100C51]">Sastra Literasi</h1>

                    </div>
                    <div class="text-justify">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nam quos nostrum, unde autem
                            perferendis rerum? Tempore, excepturi est sit illo voluptate tenetur fuga delectus qui earum
                            sunt fugiat repellat odit vero aut beatae sed inventore modi, error laboriosam maiores quia
                            provident id! Architecto sapiente incidunt laudantium minima quidem eius sint.</p>
                    </div>
                    <div class="flex justify-center items-center">
                        {{-- img logo departemen/foto team/foto proker unggulan --}}
                        <div class="w-52  h-52 bg-blue-50 rounded-2xl ">
                            <img src="" alt="" class="w-full h-full object-contain rounded-2xl">
                        </div>
                    </div>
                </div>

                <img src="/images/svg/blueeflower.png" alt="" class="absolute -right-9 -bottom-9 w-28  h-auto">
                <img src="/images/svg/blueflower.png" alt="" class="absolute right-8 -bottom-9 w-20  h-auto">

            </div>

            {{-- card proker --}}
            <div class="grid grid-cols-3 max-lg:grid-cols-1 gap-10  justify-center flex-wrap min-h-96 ">

                <div class="p-5 border-4 border-[#100C51] rounded-2xl  flex flex-col min-h-96 justify-between gap-10">

                    <!-- header -->
                    <div class="flex flex-col gap-4">
                        <h1 class="text-5xl font-bold leading-none">
                            Workshop Design
                        </h1>

                        <span class="bg-[#100C51] text-sm text-white rounded-3xl px-3 py-1 w-fit">
                            Perkiraan : 25 September 2026
                        </span>

                        <p class="mt-5 text-sm leading-relaxed text-justify">
                            Workshop Design adalah kegiatan pembelajaran intensif yang membahas
                            dasar desain visual, proses kreatif, serta praktik langsung melalui
                            studi kasus nyata.
                        </p>
                    </div>

                    <!-- image selalu nempel bawah -->
                    <div class=" w-full h-32  overflow-hidden rounded-xl">
                        <img src="/images/sample.jpg" alt="" class="w-full h-full object-cover">
                    </div>

                </div>

            </div>
        </div>
    </section>
@endsection
