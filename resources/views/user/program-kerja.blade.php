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
                <h1 class="text-5xl font-bold max-md:text-3xl  mb-2 ">Program Kerja</h1>
                <p class="text-lg max-md:text-sm text-center">
                    Temukan Program Kerja kami yang bisa membantu kawan fordi untuk berkembang
                </p>
            </div>
        </diV>
    </section>
@endsection