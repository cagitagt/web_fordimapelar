@extends('layout.user')

@section('content')
    {{-- hero section --}}
    <section>
        <div class="lg:h-screen h-250 w-full  relative ">

            {{-- paper top and bottom --}}
            <div class="absolute z-10 bottom-0 w-full h-auto">
                <img src="/images/paper.png" alt="" class="w-full h-full object-contain">
            </div>
            <div class="absolute z-10 top-0 rotate-180 w-full h-auto">
                <img src="/images/paper.png" alt="" class="w-full h-full object-contain">
            </div>

            {{-- background color --}}
            <div class="absolute inset-0 z-0"
                style="
                        background-color:  #d1d7e4;
                        background-image:
                        linear-gradient(to right, #0f0c511b 1px, transparent 1px),
                        linear-gradient(to bottom, #0f0c511b 1px, transparent 1px);
                        background-size: 40px 40px;
                    ">


                {{-- content inside paper --}}
                <div
                    class="relative flex justify-center items-center h-full  flex-col text-stone-700  px-6 lg:px-20  text-center " data-aos="fade-up" data-aos-duration="2000">
                    <span  class="uppercase tracking-widest text-sm font-bold text-[#100C51]">
                        FORDI MAPELAR {{ $aboutcabinet->cabinet_year }}
                    </span>

                    <h1 class="font-extrabold text-5xl leading-tight max-md:text-4xl">
                        Kabinet <span class="text-[#100C51]">{{ $aboutcabinet->cabinet_name }}</span>
                    </h1>

                    <p class="max-w-2xl font-medium text-lg ">
                        Mengenal lebih dekat visi, misi, dan semangat pergerakan UKM Fordi Mapelar.
                    </p>

                    <div class="flex gap-3 mt-5  items-center justify-center flex-wrap">
                        <a href="{{ $aboutcabinet->cabinet_ebook }}" target="_blank" rel="noopener noreferrer"
                            class=" px-6 py-2 bg-[#100C51] text-white rounded-full font-bold cursor-pointer">
                            E-Booklet
                        </a>
                        <button
                            class=" px-6 py-2 bg-white border-stone-700 rounded-full font-bold cursor-pointer  border"><a
                                href="{{ route('program-kerja') }}">Program Kerja</a>
                        </button>
                    </div>
                </div>


            </div>
            {{-- content end inside paper --}}

        </div>
        </div>
    </section>

    {{-- company profile/image --}}
    <section class=" px-40 py-20 max-lg:px-6 max-md:py-6 bg-linear-to-b from-white to-neutral-50 ">
        <div
            class="relative min-h-120 w-full rounded-3xl overflow-hidden shadow-xl border-[#100C51] border-4 bg-[#100C51] flex items-center justify-center">


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
            <div class=" bg-white p-6 rounded-3xl ">

                <h1 class="font-bold text-4xl  mb-5 text-stone-700"><span class="text-[#100C51]">Narasi Besar</span> Kabinet
                </h1>

                <p class="text-gray-700   text-justify ">
                    {!! $aboutcabinet->cabinet_narrative !!}
                </p>
            </div>
        </div>
    </section>

    {{-- sambutan ketua umum --}}
    <section class="px-40 py-20 max-lg:px-6 max-md:py-6 relative">
        <h1 class=" relative font-bold text-4xl mb-10 text-stone-700">Sambutan <span class="text-[#100C51]">Ketua
                Umum</span></h1>
        <div class="grid max-md:grid-cols-1 grid-cols-2 gap-5  text-center relative">
            <div class=" flex items-center justify-center flex-col gap-5 text-white p-10 relative">
                <div class="bg-white rounded-3xl  h-60  w-56  relative">
                    <img src="{{ asset('storage/' . $aboutcabinet->chairman_photo) }}" alt="ketua umum"
                        class="w-full h-full absolute object-cover rounded-3xl border-8 border-white z-10">

                    {{-- decor --}}
                    <img src="/images/svg/ketum_dec1.svg" alt=""
                        class="absolute -rotate-30    -left-32 -bottom-5  z-0 w-96 h-auto">
                    <img src="/images/svg/ketum_dec2.svg" alt="" class="absolute -right-5 -top-5 z-20  w-20 h-auto">
                    <img src="/images/svg/ketum_dec3.svg" alt=""
                        class="absolute -bottom-5 -right-12 h-auto w-24   z-20">

                </div>
                <h5 class="py-1 bg-white px-5 rounded-full font-bold  text-[#100C51] relative">
                    {{ $aboutcabinet->chairman_name }}
                </h5>
            </div>
            <div class="flex items-center justify-center flex-col gap-5 text-[#100C51] p-10 text-justify">
                <p class="leading-relaxed">
                    {!! $aboutcabinet->chairman_narrative !!}
                </p>
            </div>
        </div>

    </section>

    {{-- visi misi --}}
    <section class="px-40 py-20 max-lg:px-6 max-md:py-6">
        <h1 class="font-bold text-4xl mb-10 text-stone-700"> <span class="text-[#100C51]">Visi dan Misi</span> Kabinet</h1>
        <div class="grid max-md:grid-cols-1 grid-cols-2 gap-5 text-center">
            <div class="bg-[#100C51] p-16 text-white flex items-center justify-center flex-col gap-5 border rounded-4xl">
                <h1 class="font-bold text-2xl">Visi</h1>
                <i>
                    {!! $aboutcabinet->cabinet_vision !!}
                </i>
            </div>
            <div class="text-[#100C51] p-10 flex flex-col gap-5 text-justify">
                <h1 class="font-bold text-2xl">Misi</h1>
                <p>
                    {!! $aboutcabinet->cabinet_mission !!}
            </div>
        </div>
    </section>

    {{-- departemen dan pengertian --}}
    <section class="px-40 py-20 max-lg:px-6 max-md:py-6">
        <h1 class="font-bold text-4xl mb-10 text-stone-700"> <span class="text-[#100C51]"> Struktur </span>Kabinet</h1>

        <div class="relative w-full h-150 max-md:h-96">
            <div class="my-20 relative bg-[#100C51] border-[#100C51] border-4 rounded-2xl w-full h-150  max-md:h-96">
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
                            'Sebagai "kapten" dari Fordi Mapelar UB 2025 yang sedang mengudara, tentunya ketua umum bertugas untuk menavigasi dan mengarahkan haluan organisasi, mengawasi pengurus secara struktural, dan mengawasi pelaksanaan proker. Ketua umum juga bertanggung jawab untuk menjadi representasi atau "wajah" dari Fordi Mapelar UB sehingga harus mampu memberi teladan bagi pengurus dan juga anggota. 
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
            <div class="grid grid-cols-4 max-sm:grid-cols-2 max-lg:grid-cols-3  gap-2 min-h-52 ">
                @foreach ($cards as $card)
                    <div
                        class="p-4 rounded-2xl border-[#100C51] border flex flex-col justify-between h-full  hover:-translate-y-3 transition hover:text-white hover:bg-[#100C51]">
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
            <div class="grid grid-cols-4 max-md:grid-cols-2 gap-2 min-h-52">
                @foreach ($departments as $department)
                    <div
                        class="p-4 rounded-2xl border-[#100C51] border flex flex-col justify-between h-full  hover:-translate-y-3 transition hover:text-white hover:bg-[#100C51]">
                        <h1 class="font-bold text-2xl leading-none max-md:text-lg mb-5">{{ $department->name_dept }}</h1>
                        <p class="text-sm text-justify max-md:text-xs">{{ $department->description }}</p>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection
