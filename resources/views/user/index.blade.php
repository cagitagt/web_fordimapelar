@extends('layout.user')

@section('content')
    {{-- hero section --}}
    <section
        class="min-h-screen w-full flex items-center justify-center from-[#ECE80B] via-neutral-50/50  to-neutral-50  bg-linear-to-t relative overflow-hidden">
        <div class="absolute bottom-0 w-full wafee">
            <div class="wafe" id="wafe1" style="--i:1;"></div>
            <div class="wafe" id="wafe2" style="--i:2;"></div>
            <div class="wafe" id="wafe3" style="--i:3;"></div>
            <div class="wafe" id="wafe4" style="--i:4;"></div>
        </div>

        <div class="absolute inset-0 bg-white/50 pointer-events-none z-9"></div>

        <div class="absolute bottom-0 overflow-hidden  w-full">
            <img src="/images/ub_bg.png" alt="" class="w-full h-120 object-cover">
        </div>
        <!-- Page Content -->
        <div class="absolute z-10">
            <div data-aos="fade-up" data-aos-duration="1500"
                class="mx-auto max-w-5xl  text-[#100C51] flex flex-col justify-center items-center">
                <h1 class=" text-5xl font-bold max-md:text-4xl">Fordi Mapelar</h1>
                <p class="leading-relaxed text-center my-1  font-semibold max-md:text-sm">
                    Forum Studi Mahasiswa Pengembang Penalaran
                </p>
                <h1 class="text-5xl font-bold max-md:text-4xl">
                    Universitas Brawijaya
                </h1>
                <div class="flex gap-3">
                    <button class="mt-10 px-6 py-2 bg-[#100C51] text-white rounded-full font-bold cursor-pointer">
                        <a href="{{ route('tentang') }}">Tentang Kami
                        </a>
                    </button>
                    <button
                        class="mt-10 px-6 py-2 bg-white border-[#100C51] rounded-full font-bold cursor-pointer text-[#100C51] border-2">
                        <a href="{{ route('layanan') }}">Layanan
                        </a>
                    </button>

                </div>
            </div>
        </div>
    </section>


    {{-- Apa itu Fordi Mapelar --}}
    <section
        class="w-full flex justify-center items-center px-32 py-80 max-lg:px-12 max-lg:py-6 relative  bg-linear-to-b from-white to-neutral-50 ">
        <div class="absolute text-[#09182C] max-w-120 max-sm:max-w-40 ">
            <h1 class="font-bold leading-none max-sm:text-sm mb-5" data-aos="fade-up" data-aos-duration="2000">" Apa itu
                Fordi Mapelar?"</h1>
            <p class="font-semibold leading-none text-3xl max-sm:text-lg" data-aos="fade-up" data-aos-duration="2000">
                Unit Kegiatan Mahasiswa yang dinaungi dalam Universitas Brawijaya yang bergerak utamanya di bidang
                penalaran.
            </p>
        </div>

        <div class="absolute right-0 bottom-0">
            <img src="{{ asset('images/svg/ketum_dec3.svg') }}" alt="Logo"
                class="object-cover h-auto w-48  max-lg:w-16">
    </section>

    {{-- quote section --}}
    <section class=" w-full flex justify-center items-center px-40 py-80 max-lg:px-12 max-lg:py-30 ">
        <div data-aos="fade-up" data-aos-duration="2000">
            <h1 class="md:text-5xl font-bold mb-4 text-xl">“ Nalar Hasta Terusing Budi “</h1>
            <p class=" text-stone-700 font-semibold max-md:text-xs text-end">Bernalar, berkarya, dan menganalisis pikiran
                merupakan kelanjutan dari budi yang arif. </p>
        </div>
    </section>

    {{-- socrates --}}
    <section class="h-80 w-full flex justify-end items-center px-32 py-48 max-lg:px-12 max-lg:py-6 relative bg-[#09182C]">
        <div class="absolute left-0 bottom-0">
            <img src="{{ asset('images/socrates.png') }}" alt="Logo"
                class="object-cover h-115 w-115 max-lg:h-72 max-lg:w-72">
        </div>

        <div class="absolute text-white">
            <h1 class="font-bold text-5xl max-w-135 max-sm:max-w-40 leading-none max-sm:text-lg mb-5 text-center">" True
                knowledge exists in knowing that you know nothing. "</h1>
            <p class="text-end font-semibold">Socrates</p>
        </div>

    </section>

    {{-- Tentang Fordi Mapelar --}}
    <section class="px-40 py-48 max-lg:px-12 max-lg:py-30  text-stone-700 gap-7">
        <div class="font-decorative text-end text-6xl lg:text-8xl mb-10">Tentang Fordi Mapelar</div>
        <div class=" text-base font-medium grid max-lg:grid-cols-1 grid-cols-3 text-justify gap-10 border-stone-700">
            <P>
                <i class="font-bold text-[#100C51]">Berawal dari keinginan para aktivis yang ada di Universitas Brawijaya
                    pada awal tahun 80-an,</i> untuk bisa memiliki suatu forum dimana mereka dapat berkumpul dan berdiskusi
                satu sama lain. Pada bulan <span class="font-extrabold text-[#100C51]">April 1981</span>, diadakan suatu
                forum untuk seluruh mahasiswa Universitas Brawijaya yang mana di dalamnya dikemukakan sebuah pemikiran dasar
                tentang keinginan membentuk suatu aktivitas diskusi.
            </P>
            <P>
                Dalam forum tersebut telah dicapai mufakat untuk <i class="font-bold text-[#100C51]">membentuk tim komisi
                    serta sebuah lembaga kemahasiswaan yang bergerak dalam bidang penalaran</i>. Forum Studi Mahasiswa
                Pengembang Penalaran Universitas Brawijaya. Maka, didirikanlah sebuah organisasi yang bernama Forum Studi
                Mahasiswa Pengembang Penalaran (Fordi Mapelar). <i class="font-bold text-[#100C51]">Fordi Mapelar sendiri
                    merupakan penalaran yang bergerak dibidang pengembangan nalar mahasiswa.</i>
            </P>
            <P>
                <i class="font-bold text-[#100C51]">Kegiatan Fordi Mapelar diutamakan pada penuangan wadah untuk
                    mengembangkan nalar dan dialetika melalui diskusi, bedah buku, screening film dan pengabdian
                    masyarakat.</i> Fordi Mapelar juga memfasilitasi kegiatan dalam hal peningkatan soft skill yang tentunya
                dapat diaplikasikan di dalam kehidupan sehari-hari, seperti public speaking, kepenulisan (buku, esai, opini
                dan artikel) dan pemahaman terhadap filsafat.
            </P>
        </div>
    </section>

    {{-- Nilai dasar organisasi --}}
    <section class=" px-20 py-48 max-lg:px-12 max-lg:py-3">
        <h1 class="text-8xl font-extrabold max-md:text-3xl mb-20 text-[#100C51]  ">
            Nilai Dasar Organisasi
        </h1>

        <div class="flex max-md:flex-col items-center justify-center flex-wrap gap-10">
            @php
                $cards = [
                    [
                        'title' => 'Collaboration',
                        'description' =>
                            'Mendorong adanya kerja sama dan kolaborasi baik antar anggota maupun Fordi Mapelar dengan organisasi lain',
                    ],
                    [
                        'title' => 'Communication',
                        'description' =>
                            'Membangun dan mengembangkan pola komunikasi yang terbuka dan efektif dalam merangkul berbagai aspirasi dan dalam menjalankan roda organisasi.',
                    ],
                    [
                        'title' => 'Creativity',
                        'description' => 'Mendorong inovasi dan kreativitas dalam progresifitas pengembangan anggota.',
                    ],
                    [
                        'title' => 'Cultivation',
                        'description' => 'Memberdayakan anggota melalui pembinaan dan pengembangan pribadi',
                    ],
                    [
                        'title' => 'Caring',
                        'description' => 'Membangun budaya perhatian dan dukungan di antara anggota.',
                    ],
                ];
            @endphp

            @foreach ($cards as $card)
                <div class="w-46 h-46 perspective-[1000px] ">
                    <div
                        class="relative w-full h-full transition-transform duration-700 transform-3d hover:transform-[rotateY(180deg)]  shadow-2xl  rounded-xl bg-white text-stone-700 font-semibold ">

                        {{-- front --}}
                        <div
                            class="absolute inset-0 flex items-center justify-center rounded-xl  
                backface-hidden text-[#100C51] text-lg">
                            {{ $card['title'] }}
                        </div>

                        {{-- back --}}
                        <div
                            class="absolute inset-0 flex flex-col items-center justify-center rounded-xl  
                transform-[rotateY(180deg)] backface-hidden p-5   ">
                            <h1 class="font-extrabold text-xl mb-2 text-[#100C51] ">{{ $card['title'] }}</h1>
                            <p class=" leading-none text-sm text-justify">{{ $card['description'] }}</p>

                        </div>

                    </div>
                </div>
            @endforeach
        </div>
    </section>

    {{-- Arti Logo Fordi --}}
    <section class=" px-6 py-48 lg:px-20 lg:py-48 text-stone-700">

        <div class="relative w-full overflow-hidden grid grid-cols-1 lg:grid-cols-2">
            {{-- Kiri - Logo --}}
            <div class="flex items-center justify-center p-5 min-h-48 ">
                <img src="/images/fordi.png" class="h-96 w-auto max-w-full object-contain" alt="Fordi Mapelar Logo" />
            </div>

            {{-- Kanan - Slider --}}
            <div class="relative overflow-hidden  min-h-48 ">
                <div id="slider" class="relative h-full">
                    <div class="slides-wrapper flex h-full transition-transform duration-500 ease-out">

                        {{-- Slide 1 --}}
                        <div
                            class="slide w-full shrink-0 flex flex-col justify-center text-center px-10 py-12 md:p-20 font-medium">
                            <h3 class="text-2xl md:text-lg">
                                Lambang Fordi Mapelar adalah

                            </h3>
                            <i class="text-[#100c51] text-5xl font-bold">Lingkar Insan Penalaran</i>
                            <p class="mt-6 text-sm text-gray-300">
                                Geser untuk melihat detail
                            </p>
                        </div>

                        {{-- Slide 2 --}}
                        <div
                            class="slide w-full shrink-0 flex flex-col items-start justify-center px-8 py-12 md:px-12 space-y-4">
                            <i class="font-extrabold text-lg  mb-5 w-full text-center">
                                Filosofi <span class="text-[#100c51] text-2xl">Warna</span>
                            </i>

                            <div class="flex items-start gap-4 w-full">
                                <span class="w-6 h-6 rounded-full border border-stone-700 shrink-0 mt-1"></span>
                                <p class="text-justify  leading-relaxed">
                                    Melambangkan sikap <span class="font-bold">FORDI MAPELAR</span> yang obyektif dan tidak
                                    berpihak
                                </p>
                            </div>

                            <div class="flex items-start gap-4 w-full">
                                <div class="w-6 h-6 rounded-full bg-[#ECE80B] shrink-0 mt-1"></div>
                                <p class="text-justify  leading-relaxed">
                                    Melambangkan sikap ilmu pengetahuan sebagai dasar penalaran <span
                                        class="font-bold">FORDI MAPELAR</span>
                                </p>
                            </div>

                            <div class="flex items-start gap-4 w-full">
                                <div class="w-6 h-6 rounded-full bg-[#0595DD] shrink-0 mt-1"></div>
                                <p class="text-justify  leading-relaxed">
                                    Melambangkan sikap jujur serta selalu berpijak pada realita dan kebenaran
                                </p>
                            </div>

                            <div class="flex items-start gap-4 w-full">
                                <div class="w-6 h-6 rounded-full bg-[#100C51] shrink-0 mt-1"></div>
                                <p class="text-justify  leading-relaxed">
                                    Melambangkan bahwa anggota <span class="font-bold">FORDI MAPELAR</span> generasi muda
                                    yang mempunyai idealisme
                                </p>
                            </div>
                        </div>

                        {{-- Slide 3 --}}
                        <div class="slide w-full shrink-0 flex flex-col justify-center px-10 py-12 ">
                            <i class="font-extrabold text-lg  mb-5 w-full text-center">
                                Filosofi <span class="text-[#100c51] text-2xl">Bentuk</span>
                            </i>
                            <ul class="mt-3 text-sm text-justify gap-3 flex flex-col ">
                                <li><span class="font-bold">Lingkaran terbuka dengan mata panah - </span>Melambangkan sikap
                                    <span class="font-bold">FORDI MAPELAR</span> yang selalu terbuka dan tanggap terhadap
                                    setiap permasalahan yang kemudian
                                    disaring dan dianalisa sesuai dengan kapasitas pikir manusia
                                </li>
                                <li><span class="font-bold">Lingkaran berlapis 3 dengan warna kuning diapit dengan warna
                                        biru tua - </span>Melambangkan <span class="font-bold">FORDI MAPELAR</span> dalam
                                    menganalisa suatu masalah selalu berpijak pada
                                    realita dan ilmu pengetahuan serta dijiwai oleh idealisme, kebenaran, dan kejujuran</li>
                                <li><span class="font-bold">Kepala manusia dengan otak terbuka - </span>Melambangkan
                                    pikiran
                                    sebagai ujung tombak penalaran dan selalu terbuka untuk menerima masukan baru</li>
                                <li><span class="font-bold">Kepala menghadap ke kanan dengan mulut terbuka -
                                    </span>Melambangkan
                                    <span class="font-bold">FORDI MAPELAR</span> selalu berlandaskan pada kejujuran dan
                                    berani mengungkapkan kebenaran
                                </li>
                            </ul>
                        </div>

                        {{-- Slide 4 --}}
                        <div class="slide w-full shrink-0 flex flex-col justify-center text-center px-10 py-12">
                            <i class="font-extrabold text-[#100c51] text-2xl mb-5 w-full text-center">
                                “ Nalar Hasta Terusing Budi ”
                            </i>
                            <p class="mt-3 text-sm text-justify">
                                Semboyan <span class="font-bold">FORDI MAPELAR</span> adalah “Nalar Hasta Terusing
                                Budi” yang menggambarkan alam pikiran dan hakekat kegiatan <span class="font-bold">FORDI
                                    MAPELAR</span> sebagai kelompok studi yang didukung oleh kreativitas individu, pada
                                hakekatnya mempunyai kegiatan intelektual yang menganalisa kebenaran tetapi juga terpanggil
                                untuk menunaikan kewajiban sosialnya. “Nalar Hasta Terusing Budi” juga berarti bahwa bagi
                                <span class="font-bold">FORDI MAPELAR</span> Universitas Brawijaya, bernalar, berkarya,
                                menganalisa pikiran adalah kelanjutan dari budi yang arif untuk memebentuk manusia seutuhnya
                                sesuai dengan hakekat manusia. “Nalar Hasta Terusing Budi” menurut rumusan candra sengkala
                                adalah ‘nalar’ berwatak 1, ‘hasta’ berwatak 8, ‘terusing’ berwatak 9, dan ‘budi’ berwatak 1.
                                Sebagaimana lazimnya sengkala dibaca terbalik, 1981 tahun berdirinya <span
                                    class="font-bold">FORDI MAPELAR</span> Universitas Brawijaya.
                            </p>
                        </div>

                    </div>
                </div>

                {{-- Dot Pagination mt-2 --}}
                <div class="absolute bottom-6 left-1/2 -translate-x-1/2 flex gap-3 z-10">
                    <button class="dot h-2.5 w-2.5 rounded-full bg-[#106AD2]"></button>
                    <button class="dot h-2.5 w-2.5 rounded-full bg-gray-300"></button>
                    <button class="dot h-2.5 w-2.5 rounded-full bg-gray-300"></button>
                    <button class="dot h-2.5 w-2.5 rounded-full bg-gray-300"></button>
                </div>
            </div>
        </div>

    </section>

    {{-- Galery --}}
    <section
        class="px-20 flex justify-center items-center flex-col  h-screen py-48 my-20 max-lg:px-6 max-lg:py-30  text-stone-700 relative lg:mx-10 overflow-hidden">
        <div class="absolute w-96 h-auto left-0 top-0">
            <img src="/images/lt.png" alt="left top" class="object-cover">
        </div>
        <div class="absolute w-96 h-auto left-0 bottom-0">
            <img src="/images/lb.png" alt="left bottom" class="object-cover">
        </div>
        <div class="absolute w-96 h-auto right-0 top-0">
            <img src="/images/rt.png" alt="right top" class="object-cover">
        </div>
        <div class="absolute w-96 h-auto right-0 bottom-0">
            <img src="/images/rb.png" alt="right bottom" class="object-cover">
        </div>

        <div class="relative flex flex-col items-center">
            <h1 class="font-bold text-[#100c51] text-7xl ">Our <br>Memories</h1>
            <i class="font-medium">Tumbuh Bersama Fordi Mapelar</i>
            <button
                class="mt-5 px-4 py-2 max-lg:bg-[#09182C] lg:hover:bg-[#09182C] text-white rounded-full text-xs font-bold cursor-pointer"><a
                    href="{{ route('galeri') }}">Ketemu! Yuk Cek Galeri Kita</a></button>
        </div>
    </section>

    {{-- manifesto penalaran --}}
    <section class="px-40 py-80 max-lg:px-16 max-lg:py-30 grid max-lg:grid-cols-1 grid-cols-2 text-stone-700 gap-7">
        <div class="text-5xl text-[#100c51] lg:text-8xl">Manifesto Penalaran</div>
        <p class=" max-lg:text-sm font-medium border-l-2 pl-5  border-stone-700">
            Bahwa sesungguhnya Fordi Mapelar Universitas Brawijaya dalam segala gerak dan langkahnya selalu dijiwai oleh
            semangat penalaran yang mengarah pada pengejawantahan idealisme kemahasiswaan dalam memenuhi tanggung jawab
            sosialnya. Dan daripada itu, semangat penalaran adalah suatu jiwa yang terpancar dari kejernihan hati nurani
            yang paling dalam, dengan dasar pemikiran yang benar serta diwujudkan dalam keteguhan sikap dan keberanian
            menyuarakan kebenaran.
        </p>
    </section>

    {{-- news banner --}}
    <div class="px-16 py-20 max-md:px-6 max-md:py-6">
        <h1 class="text-8xl font-extrabold max-md:text-3xl text-[#100C51]  ">
            Berita Pilihan Kami
        </h1>
        <div class=" grid max-lg:grid-cols-1 grid-cols-3 gap-10 my-20">
            @foreach ($banners as $banner)
                <a href="{{ route('news.show', $banner->news->slug) }}"
                    class="bg-white rounded-2xl hover:shadow-2xl shadow-lg overflow-hidden group">
                    <div class="h-48 w-full overflow-hidden">
                        <img src="{{ asset('storage/' . $banner->news->thumbnail) }}" alt="{{ $banner->news->title }}"
                            class="h-full w-full object-cover transition-transform duration-500 ease-out group-hover:scale-110">
                    </div>

                    <div class="p-5 flex flex-col gap-2">
                        <h5 class="text-teal-700 font-semibold leading-none">{{ $banner->news->newsCategory->title }}</h5>
                        <h2 class="text-lg text-stone-700 font-extrabold">
                            {{ $banner->news->title }}
                        </h2>
                        <p class="text-gray-600 text-sm">
                            {{ \Carbon\Carbon::parse($banner->news->created_at)->format('d M Y') }}
                        </p>
                    </div>
                </a>
            @endforeach
        </div>

        <div class="py-3 border-y border-stone-300 text-center text-stone-500  my-10">
            <a href="{{ route('berita') }}" class="font-semibold ">Semua berita</a>
        </div>
    </div>
@endsection
