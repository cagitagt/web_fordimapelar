@extends('layout.user')

@section('content')
    {{-- hero section --}}
    <section>
        <div class="lg:h-screen h-[65vh] w-full relative">
 
            {{-- paper top and bottom --}}
            <div class="absolute z-10 bottom-0 w-full h-auto">
                <img src="/images/paper.png" alt="" class="w-full h-full object-contain">
            </div>
            <div class="absolute z-10 top-0 rotate-180 w-full h-auto">
                <img src="/images/paper.png" alt="" class="w-full h-full object-contain">
            </div>
 
            {{-- background color --}}
            <div class="absolute inset-0 z-0 overflow-hidden"
                style="
                        background-color: #e7eaf1;
                        background-image:
                        radial-gradient(#100c5112 1px, transparent 1px);
                        background-size: 26px 26px;
                    ">
 
                {{-- soft gradient glow --}}
                <div class="absolute -top-24 -right-24 w-96 h-96 bg-[#0595DD]/10 rounded-full blur-3xl"></div>
                <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-[#100C51]/10 rounded-full blur-3xl"></div>
 
                {{-- content inside paper --}}
                <div
                    class="relative flex justify-center items-center h-full flex-col text-stone-700 px-6 lg:px-20 text-center"
                    data-aos="fade-up" data-aos-duration="2000">
 
                    <span class="uppercase tracking-[0.25em] text-xs font-semibold text-[#100C51]/70 mb-4">
                        Fordi Mapelar {{ $aboutcabinet->cabinet_year }}
                    </span>
 
                    <h1 class="font-bold text-4xl md:text-6xl leading-tight text-stone-800 tracking-tight">
                        Kabinet <span class="text-[#100C51]">{{ $aboutcabinet->cabinet_name }}</span>
                    </h1>
 
                    <p class="max-w-xl font-normal text-base md:text-lg text-stone-500 mt-5">
                        Mengenal lebih dekat visi, misi, dan semangat pergerakan UKM Fordi Mapelar.
                    </p>
 
                    <div class="flex gap-4 mt-9 items-center justify-center flex-wrap">
                        <a href="{{ $aboutcabinet->cabinet_ebook }}" target="_blank" rel="noopener noreferrer"
                            class="px-7 py-2.5 bg-[#100C51] text-white rounded-full text-sm font-semibold tracking-wide transition-all duration-300 hover:bg-[#1a154f] hover:shadow-lg hover:-translate-y-0.5">
                            E-Booklet
                        </a>
                        <a href="{{ route('program-kerja') }}"
                            class="px-7 py-2.5 bg-white border border-stone-200 rounded-full text-sm font-semibold tracking-wide text-stone-700 transition-all duration-300 hover:border-[#100C51] hover:text-[#100C51]">
                            Program Kerja
                        </a>
                    </div>
                </div>
 
            </div>
            {{-- content end inside paper --}}
 
        </div>
    </section>

    {{-- company profile/image --}}
    <section class=" px-40 py-20 max-lg:px-6 max-md:py-6 bg-linear-to-b from-white to-neutral-50 ">
        <div
            class="relative min-h-130 w-full rounded-3xl overflow-hidden shadow-xl border-[#100C51] border-4 bg-[#100C51] flex items-center justify-center">


            @if (!empty($aboutcabinet?->company_profile_link))
                <iframe src="{{ $aboutcabinet->company_profile_link }}" class="absolute inset-0 w-full h-full"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                </iframe>
            @elseif (!empty($aboutcabinet?->cabinet_visual))
                <img src="{{ asset('storage/' . $aboutcabinet->cabinet_visual) }}"
                    class="absolute inset-0 w-full h-full object-cover">
            @else
                <span class="text-white/70 font-semibold text-lg">
                    Visual Kabinet
                </span>
            @endif

            {{-- optional overlay --}}
            <div class="absolute inset-0 bg-black/10 pointer-events-none"></div>
        </div>
    </section>

    {{-- narasi kabinet --}}
    <section class=" px-40 py-20 max-lg:px-6 max-md:py-6">
        <div class="max-w-4xl mx-auto">
            <div class="bg-white p-8 rounded-3xl shadow-sm border border-stone-100">

                <h1 class="font-bold text-4xl mb-5 text-stone-700"><span class="text-[#100C51]">Narasi Besar</span> Kabinet
                </h1>

                <p class="text-gray-600 leading-relaxed text-justify">
                    {!! $aboutcabinet->cabinet_narrative !!}
                </p>
            </div>
        </div>
    </section>

    {{-- sambutan ketua umum --}}
    <section class="px-6 md:px-20 lg:px-40 py-20 md:py-32 relative overflow-hidden">
        <h1 class="relative font-bold text-3xl md:text-4xl mb-16 text-stone-700 text-center md:text-left">
            Sambutan <span class="text-[#100C51]">Ketua Umum</span>
        </h1>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-16 md:gap-10 items-center relative">

            {{-- foto ketua umum --}}
            <div class="relative flex items-center justify-center">
                {{-- decorative diamond pattern --}}
                <div class="absolute -left-4 md:-left-10 top-1/2 -translate-y-1/2 -z-10 opacity-90 hidden sm:grid grid-cols-3 gap-1.5 rotate-12">
                    @for ($i = 0; $i < 9; $i++)
                        <span
                            class="w-8 h-8 md:w-10 md:h-10 rounded-md {{ $i % 2 === 0 ? 'bg-[#100C51]' : 'bg-[#0595DD]' }} {{ $i % 3 === 1 ? 'opacity-40' : '' }}"></span>
                    @endfor
                </div>

                <div class="relative">
                    <div class="bg-white rounded-3xl h-72 w-64 md:h-80 md:w-72 relative shadow-xl">
                        <img src="{{ asset('storage/' . $aboutcabinet->chairman_photo) }}" alt="ketua umum"
                            class="w-full h-full absolute object-cover rounded-3xl border-8 border-white z-10">

                        {{-- decor --}}
                        <img src="/images/svg/ketum_dec2.svg" alt=""
                            class="absolute -right-4 -top-4 z-20 w-14 h-auto opacity-90">
                        <img src="/images/svg/ketum_dec3.svg" alt=""
                            class="absolute -bottom-4 -right-6 h-auto w-16 z-20 opacity-90">
                    </div>

                    <h5 class="mt-6 py-2 bg-white shadow-md px-6 rounded-full font-bold text-[#100C51] text-center w-fit mx-auto">
                        {{ $aboutcabinet->chairman_name }}
                    </h5>
                </div>
            </div>

            {{-- narasi ketua umum --}}
            <div class="flex flex-col gap-4 text-[#100C51] text-center md:text-left">
                <span class="font-bold text-2xl">Halo</span>
                <p class="leading-relaxed text-stone-600 italic text-justify">
                    {!! $aboutcabinet->chairman_narrative !!}
                </p>
            </div>
        </div>

    </section>

    {{-- visi misi --}}
    <section class="px-40 py-20 max-lg:px-6 max-md:py-6">
        <h1 class="font-bold text-4xl mb-10 text-stone-700"> <span class="text-[#100C51]">Visi dan Misi</span> Kabinet</h1>
        <div class="grid max-md:grid-cols-1 grid-cols-2 gap-6 text-center">
            <div class="bg-[#100C51] p-16 text-white flex items-center justify-center flex-col gap-5 rounded-3xl shadow-md">
                <h1 class="font-bold text-2xl">Visi</h1>
                <i class="leading-relaxed">
                    {!! $aboutcabinet->cabinet_vision !!}
                </i>
            </div>
            <div class="text-[#100C51] p-10 flex flex-col gap-5 text-justify">
                <h1 class="font-bold text-2xl">Misi</h1>
                <p class="leading-relaxed">
                    {!! $aboutcabinet->cabinet_mission !!}
                </p>
            </div>
        </div>
    </section>

    {{-- departemen dan pengertian --}}
    <section class="px-40 py-20 max-lg:px-6 max-md:py-6">
        <h1 class="font-bold text-4xl mb-10 text-stone-700"> <span class="text-[#100C51]"> Struktur </span>Kabinet</h1>

        <div class="relative w-full h-150 max-md:h-96">
            <div class="my-20 relative bg-[#100C51] rounded-2xl w-full h-150 max-md:h-96 shadow-md overflow-hidden">
                <img src="{{ asset('storage/' . $aboutcabinet->cabinet_visual) }}"
                    class=" preview-image absolute inset-0 w-full h-full object-cover rounded-2xl"
                    data-image="{{ asset('storage/' . $aboutcabinet->cabinet_visual) }}">
            </div>
        </div>

        <!--  Image Modal -->
        <div id="globalImageModal" class="fixed inset-0 bg-black/80 hidden items-center justify-center z-90">
            <img id="globalModalImage" class="max-w-[90%] max-h-[90%] rounded-xl shadow-2xl">
        </div>

        <div class=" my-20">
            {{-- BPI --}}
            <div class=" my-10 flex justify-between font-bold text-2xl max-md:text-base">
                <h3>BPI</h3>
                <h3>- Badan Pengurus Inti</h3>
            </div>
            @php
                $cards = [
                    [
                        'BPI' => 'Dewan Pertimbangan',
                        'description' =>
                            'Dewan pertimbangan diputuskan dalam Musyawarah Anggota Fordi Mapelar untuk membantu dan memberikan saran bagi kepengurusan yang tengah berjalan. Dipilih dari BPH Fordi Mapelar UB sebelumnya, tentunya dewan pertimbangan telah berpengalaman dan kompeten untuk membimbing jalannya organisasi. ',
                    ],
                    [
                        'BPI' => 'Ketua Umum',
                        'description' =>
                            'Sebagai "kapten" dari Fordi Mapelar Universitas Brawijaya yang sedang mengudara, tentunya ketua umum bertugas untuk menavigasi dan mengarahkan haluan organisasi, mengawasi pengurus secara struktural, dan mengawasi pelaksanaan proker. Ketua umum juga bertanggung jawab untuk menjadi representasi atau "wajah" dari Fordi Mapelar UB sehingga harus mampu memberi teladan bagi pengurus dan juga anggota. 
 ',
                    ],
                    [
                        'BPI' => 'Sekretaris Umum',
                        'description' =>
                            'Sekretaris bertanggungjawab untuk keperluan administratif organisasi seperti penyusunan proposal dan laporan pertanggungjawaban. Selain itu, sekretaris juga memiliki wewenang untuk mengatur dan mengarsipkan dokumen serta mengatur surat masuk dan surat keluar. Dengan kata lain, sekretaris memegang peran esensial untuk kearsipan Fordi Mapelar UB.
 ',
                    ],
                    [
                        'BPI' => 'Bendahara Umum',
                        'description' =>
                            'Bendahara bertanggungjawab untuk mengatur cashflow dari Fordi Mapelar UB. Suatu organisasi tentunya membutuhkan dana untuk menjalankan program kerja unggulannya. Oleh karena itu, bendahara memegang peranan esensial dalam keuangan organisasi sebagai pengolah sumber daya keuangan. ',
                    ],
                ];
            @endphp
            <div class="grid grid-cols-4 max-sm:grid-cols-2 max-lg:grid-cols-3  gap-3 min-h-52 ">
                @foreach ($cards as $card)
                    <div
                        class="p-5 rounded-2xl border-[#100C51]/30 border flex flex-col justify-between h-full transition-all duration-300 hover:-translate-y-1.5 hover:text-white hover:bg-[#100C51] hover:shadow-lg">
                        <h1 class="font-bold text-2xl leading-none max-md:text-lg mb-5">{{ $card['BPI'] }}</h1>
                        <p class="text-sm text-justify max-md:text-xs">{{ $card['description'] }}</p>
                    </div>
                @endforeach
            </div>

            {{-- BPH --}}
            <div class=" my-10 flex justify-between font-bold text-2xl max-md:text-base">
                <h3>BPH</h3>
                <h3>- Badan Pengurus Harian</h3>
            </div>
            <div class="grid grid-cols-4 max-md:grid-cols-2 gap-3 min-h-52">
                @foreach ($departments as $department)
                    <div
                        class="p-5 rounded-2xl border-[#100C51]/30 border flex flex-col justify-between h-full transition-all duration-300 hover:-translate-y-1.5 hover:text-white hover:bg-[#100C51] hover:shadow-lg">
                        <h1 class="font-bold text-2xl leading-none max-md:text-lg mb-5">{{ $department->name_dept }}</h1>
                        <p class="text-sm text-justify max-md:text-xs">{{ $department->description }}</p>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection