@extends('layout.user')
@section('content')
<div class="min-h-110 w-full bg-white relative overflow-hidden flex justify-center items-center">
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
            </div>

            <!-- Title -->
            <div
                class="relative z-10 mt-16 flex flex-col justify-center items-center h-full w-full
                       text-stone-700 px-20 py-20 max-md:px-12 max-md:py-16">
                <h1 class="text-5xl font-bold max-md:text-3xl mb-2">
                    Program Kerja
                </h1>
                <p class="text-lg max-md:text-sm text-center">
                     Temukan Program Kerja kami yang bisa membantu kawan fordi untuk berkembang
                </p>
            </div>
        </div>
    </div>
@endsection