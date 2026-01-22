@extends('layout.user')

@section('content')
    <div class="h-full w-full relative">
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
                    Karya Kawan Fordi
                </h1>
                <p class="text-lg max-md:text-sm text-center">
                     Cerita, proses, dan karya yang tumbuh bersama Kawan Fordi.
                </p>
            </div>
        </div>
    </div>

    {{-- CARD GRID --}}
    <div class="px-16 py-20 max-md:px-6 max-md:py-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-7">

        <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl overflow-hidden group transition">
            <div class="h-48 w-full overflow-hidden">
                <img src="/images/sample.jpg" alt="Event"
                    class="h-full w-full object-cover transition-transform duration-500 ease-out group-hover:scale-110">
            </div>

            <div class="p-5 flex flex-col gap-4">
                <h5 class="text-teal-700 font-semibold">Event</h5>
                <h2 class="text-xl text-stone-700 font-extrabold leading-snug">
                    Public Speaking Jadi Topik Perdana Airlangga Mentoring Room 2025,
                    Kepuasan Peserta Capai Kategori Sangat Puas
                </h2>
                <p class="text-gray-600 text-sm">Selasa, 16 September 2025</p>
            </div>
        </div>

        <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl overflow-hidden group transition">
            <div class="h-48 w-full overflow-hidden">
                <img src="/images/sample.jpg" alt="Event"
                    class="h-full w-full object-cover transition-transform duration-500 ease-out group-hover:scale-110">
            </div>

            <div class="p-5 flex flex-col gap-4">
                <h5 class="text-teal-700 font-semibold">Event</h5>
                <h2 class="text-xl text-stone-700 font-extrabold leading-snug">
                    Public Speaking Jadi Topik Perdana Airlangga Mentoring Room 2025,
                    Kepuasan Peserta Capai Kategori Sangat Puas
                </h2>
                <p class="text-gray-600 text-sm">Selasa, 16 September 2025</p>
            </div>
        </div>

        <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl overflow-hidden group transition">
            <div class="h-48 w-full overflow-hidden">
                <img src="/images/sample.jpg" alt="Event"
                    class="h-full w-full object-cover transition-transform duration-500 ease-out group-hover:scale-110">
            </div>

            <div class="p-5 flex flex-col gap-4">
                <h5 class="text-teal-700 font-semibold">Event</h5>
                <h2 class="text-xl text-stone-700 font-extrabold leading-snug">
                    Public Speaking Jadi Topik Perdana Airlangga Mentoring Room 2025,
                    Kepuasan Peserta Capai Kategori Sangat Puas
                </h2>
                <p class="text-gray-600 text-sm">Selasa, 16 September 2025</p>
            </div>
        </div>

        <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl overflow-hidden group transition">
            <div class="h-48 w-full overflow-hidden">
                <img src="/images/sample.jpg" alt="Event"
                    class="h-full w-full object-cover transition-transform duration-500 ease-out group-hover:scale-110">
            </div>

            <div class="p-5 flex flex-col gap-4">
                <h5 class="text-teal-700 font-semibold">Event</h5>
                <h2 class="text-xl text-stone-700 font-extrabold leading-snug">
                    Public Speaking Jadi Topik Perdana Airlangga Mentoring Room 2025,
                    Kepuasan Peserta Capai Kategori Sangat Puas
                </h2>
                <p class="text-gray-600 text-sm">Selasa, 16 September 2025</p>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
