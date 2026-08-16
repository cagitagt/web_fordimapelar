@extends('layout.user')

@section('content')
    {{-- hero section --}}
    <section
        class="min-h-screen w-full flex items-center justify-center from-[#ECE80B] via-neutral-50/50  to-neutral-50 md:translate-y-0 -translate-y-20 bg-linear-to-t relative overflow-hidden">
        <div class="absolute bottom-0 w-full wafee">
            <div class="wafe" id="wafe1" style="--i:1;"></div>
            <div class="wafe" id="wafe2" style="--i:2;"></div>
            <div class="wafe" id="wafe3" style="--i:3;"></div>
            <div class="wafe" id="wafe4" style="--i:4;"></div>
        </div>

        <div class="absolute inset-0 bg-white/60 pointer-events-none z-9"></div>

        <div class="absolute bottom-0 overflow-hidden  w-full">
            <img src="/images/ub_bg.png" alt="" class="w-full h-120 object-cover">
        </div>
        <!-- Page Content -->
        <div class="absolute z-10">
            <div data-aos="fade-up" data-aos-duration="1500"
                class="mx-auto max-w-5xl  text-[#100C51] flex flex-col md:justify-center items-center">
                <span class="uppercase tracking-[0.3em] text-xs font-semibold text-[#100C51]/60 mb-4">Est. 1981</span>
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
    <section class="w-full flex justify-center items-center px-6 md:px-32 py-32 md:py-56 relative bg-white">
        <div class="max-w-2xl text-[#09182C] text-center md:text-left">
            <h1 class="font-semibold text-lg md:text-xl mb-4 text-[#100C51]/60 tracking-wide" data-aos="fade-up"
                data-aos-duration="2000">
                "Apa itu Fordi Mapelar?"
            </h1>
            <p class="font-semibold leading-snug text-2xl md:text-4xl" data-aos="fade-up" data-aos-duration="2000">
                Unit Kegiatan Mahasiswa yang dinaungi dalam Universitas Brawijaya yang bergerak utamanya di bidang
                penalaran.
            </p>
        </div>
 
        <div class="hidden md:block absolute right-10 bottom-10 opacity-70">
            <img src="{{ asset('images/svg/ketum_dec3.svg') }}" alt="Logo" class="object-cover h-auto w-32">
        </div>
    </section>
 
    {{-- quote section --}}
    <section class="w-full flex justify-center items-center px-6 md:px-40 py-28 md:py-48">
        <div data-aos="fade-up" data-aos-duration="2000" class="max-w-3xl text-center md:text-right">
            <h1 class="text-2xl md:text-5xl font-bold mb-4 text-[#100C51]">"Nalar Hasta Terusing Budi"</h1>
            <p class="text-stone-500 font-medium text-xs md:text-sm">
                Bernalar, berkarya, dan menganalisis pikiran merupakan kelanjutan dari budi yang arif.
            </p>
        </div>
    </section>

    {{-- socrates --}}
    <section
        class="w-full grid md:grid-cols-2 grid-cols-1 gap-10 px-6 md:px-32 py-20 md:py-27 bg-[#09182C] overflow-hidden items-center justify-center">

        <div class="bottom-0 bg-white/50  justify-center flex">
            <img src="{{ asset('images/socratesimg.png') }}" alt="Socrates"
                class="object-contain h-56 w-56 md:h-96 md:w-96">
        </div>
 
        <div class="text-white max-w-lg text-center md:text-right">
            <h1 class="font-semibold text-2xl md:text-4xl leading-snug mb-4">
                "True knowledge exists in knowing that you know nothing."
            </h1>
            <p class="font-medium text-white/60 text-sm tracking-wide">— Socrates</p>
        </div>
    </section>
 
    {{-- Tentang Fordi Mapelar --}}
    <section class="px-6 md:px-40 py-24 md:py-40 text-stone-600">
        <div class="font-decorative text-center md:text-right text-4xl md:text-7xl mb-14 text-[#100C51]">
            Tentang Fordi Mapelar
        </div>
        <div class="text-[15px] leading-relaxed font-normal grid grid-cols-1 md:grid-cols-3 text-justify gap-10">
            <p>
                <span class="font-semibold text-[#100C51]">Berawal dari keinginan para aktivis yang ada di Universitas
                    Brawijaya pada awal tahun 80-an,</span> untuk bisa memiliki suatu forum dimana mereka dapat berkumpul
                dan berdiskusi satu sama lain. Pada bulan <span class="font-semibold text-[#100C51]">April 1981</span>,
                diadakan suatu forum untuk seluruh mahasiswa Universitas Brawijaya yang mana di dalamnya dikemukakan
                sebuah pemikiran dasar tentang keinginan membentuk suatu aktivitas diskusi.
            </p>
            <p>
                Dalam forum tersebut telah dicapai mufakat untuk <span class="font-semibold text-[#100C51]">membentuk
                    tim komisi serta sebuah lembaga kemahasiswaan yang bergerak dalam bidang penalaran</span>. Forum
                Studi Mahasiswa Pengembang Penalaran Universitas Brawijaya. Maka, didirikanlah sebuah organisasi yang
                bernama Forum Studi Mahasiswa Pengembang Penalaran (Fordi Mapelar). <span
                    class="font-semibold text-[#100C51]">Fordi Mapelar sendiri merupakan penalaran yang bergerak
                    dibidang pengembangan nalar mahasiswa.</span>
            </p>
            <p>
                <span class="font-semibold text-[#100C51]">Kegiatan Fordi Mapelar diutamakan pada penuangan wadah untuk
                    mengembangkan nalar dan dialetika melalui diskusi, bedah buku, screening film dan pengabdian
                    masyarakat.</span> Fordi Mapelar juga memfasilitasi kegiatan dalam hal peningkatan soft skill yang
                tentunya dapat diaplikasikan di dalam kehidupan sehari-hari, seperti public speaking, kepenulisan (buku,
                esai, opini dan artikel) dan pemahaman terhadap filsafat.
            </p>
        </div>
    </section>
 
    {{-- Nilai dasar organisasi --}}
    <section class="px-6 md:px-20 py-24 md:py-40 bg-neutral-50">
        <h1 class="text-3xl md:text-6xl font-bold mb-16 text-[#100C51] text-center md:text-left">
            Nilai Dasar Organisasi
        </h1>
 
        <div class="flex flex-wrap items-stretch justify-center gap-8">
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
                <div 
                x-data="{ flipped: false }"
                @click="flipped = !flipped"
                class="w-44 h-44 perspective-distant">
                    <div
                        :class="flipped ? 'transform-[rotateY(180deg)]' : ''"
                        class=" relative w-full h-full transition-transform duration-700 transform-3d rounded-2xl bg-white md:hover:transform-[rotateY(180deg)] text-stone-700 font-medium border border-stone-100 shadow-sm hover:shadow-md">
 
                        {{-- front --}}
                        <div
                            class="absolute inset-0 flex items-center justify-center rounded-2xl backface-hidden text-[#100C51] text-base font-semibold tracking-wide">
                            {{ $card['title'] }}
                        </div>
 
                        {{-- back --}}
                        <div
                            class="absolute inset-0 flex flex-col items-center justify-center rounded-2xl transform-[rotateY(180deg)] backface-hidden p-6 bg-[#100C51]">
                            <h1 class="font-semibold text-lg mb-2 text-white">{{ $card['title'] }}</h1>
                            <p class="leading-snug text-xs text-white/80 text-center">{{ $card['description'] }}</p>
                        </div>
 
                    </div>
                </div>
            @endforeach
        </div>
    </section>
 
    {{-- Arti Logo Fordi --}}
    <section class="px-6 py-24 md:px-20 md:py-40 text-stone-600">
 
        <div class="relative w-full overflow-hidden grid grid-cols-1 lg:grid-cols-2 rounded-3xl border border-stone-100 shadow-sm">
            {{-- Kiri - Logo --}}
            <div class="flex items-center justify-center p-8 min-h-48 bg-neutral-50">
                <img src="/images/fordi.png" class="h-72 md:h-96 w-auto max-w-full object-contain" alt="Fordi Mapelar Logo" />
            </div>
 
            {{-- Kanan - Slider --}}
            <div class="relative overflow-hidden min-h-48 bg-white">
                <div id="slider" class="relative h-full">
                    <div class="slides-wrapper flex h-full transition-transform duration-500 ease-out">
 
                        {{-- Slide 1 --}}
                        <div
                            class="slide w-full shrink-0 flex flex-col justify-center text-center px-8 py-14 md:p-20 font-medium">
                            <h3 class="text-lg md:text-xl text-stone-500">
                                Lambang Fordi Mapelar adalah
                            </h3>
                            <i class="text-[#100c51] text-3xl md:text-5xl font-bold not-italic mt-2">Lingkar Insan
                                Penalaran</i>
                            <p class="mt-6 text-xs text-stone-400 tracking-wide">
                                Geser untuk melihat detail
                            </p>
                        </div>
 
                        {{-- Slide 2 --}}
                        <div
                            class="slide w-full shrink-0 flex flex-col items-start justify-center px-8 py-12 md:px-12 space-y-5">
                            <i class="font-semibold text-base not-italic mb-3 w-full text-center">
                                Filosofi <span class="text-[#100c51] text-xl font-bold">Warna</span>
                            </i>
 
                            <div class="flex items-start gap-4 w-full">
                                <span class="w-5 h-5 rounded-full border border-stone-300 shrink-0 mt-1"></span>
                                <p class="text-justify leading-relaxed text-sm">
                                    Melambangkan sikap <span class="font-semibold">FORDI MAPELAR</span> yang obyektif dan
                                    tidak berpihak
                                </p>
                            </div>
 
                            <div class="flex items-start gap-4 w-full">
                                <div class="w-5 h-5 rounded-full bg-[#ECE80B] shrink-0 mt-1"></div>
                                <p class="text-justify leading-relaxed text-sm">
                                    Melambangkan sikap ilmu pengetahuan sebagai dasar penalaran <span
                                        class="font-semibold">FORDI MAPELAR</span>
                                </p>
                            </div>
 
                            <div class="flex items-start gap-4 w-full">
                                <div class="w-5 h-5 rounded-full bg-[#0595DD] shrink-0 mt-1"></div>
                                <p class="text-justify leading-relaxed text-sm">
                                    Melambangkan sikap jujur serta selalu berpijak pada realita dan kebenaran
                                </p>
                            </div>
 
                            <div class="flex items-start gap-4 w-full">
                                <div class="w-5 h-5 rounded-full bg-[#100C51] shrink-0 mt-1"></div>
                                <p class="text-justify leading-relaxed text-sm">
                                    Melambangkan bahwa anggota <span class="font-semibold">FORDI MAPELAR</span> generasi
                                    muda yang mempunyai idealisme
                                </p>
                            </div>
                        </div>
 
                        {{-- Slide 3 --}}
                        <div class="slide w-full shrink-0 flex flex-col justify-center px-8 py-12">
                            <i class="font-semibold text-base not-italic mb-4 w-full text-center">
                                Filosofi <span class="text-[#100c51] text-xl font-bold">Bentuk</span>
                            </i>
                            <ul class="mt-2 text-sm text-justify gap-4 flex flex-col leading-relaxed">
                                <li><span class="font-semibold">Lingkaran terbuka dengan mata panah — </span>Melambangkan
                                    sikap <span class="font-semibold">FORDI MAPELAR</span> yang selalu terbuka dan
                                    tanggap terhadap setiap permasalahan yang kemudian disaring dan dianalisa sesuai
                                    dengan kapasitas pikir manusia
                                </li>
                                <li><span class="font-semibold">Lingkaran berlapis 3 dengan warna kuning diapit dengan
                                        warna biru tua — </span>Melambangkan <span class="font-semibold">FORDI
                                        MAPELAR</span> dalam menganalisa suatu masalah selalu berpijak pada realita dan
                                    ilmu pengetahuan serta dijiwai oleh idealisme, kebenaran, dan kejujuran</li>
                                <li><span class="font-semibold">Kepala manusia dengan otak terbuka — </span>Melambangkan
                                    pikiran sebagai ujung tombak penalaran dan selalu terbuka untuk menerima masukan baru
                                </li>
                                <li><span class="font-semibold">Kepala menghadap ke kanan dengan mulut terbuka —
                                    </span>Melambangkan <span class="font-semibold">FORDI MAPELAR</span> selalu
                                    berlandaskan pada kejujuran dan berani mengungkapkan kebenaran
                                </li>
                            </ul>
                        </div>
 
                        {{-- Slide 4 --}}
                        <div class="slide w-full shrink-0 flex flex-col justify-center text-center px-8 py-12">
                            <i class="font-semibold text-[#100c51] text-xl not-italic mb-4 w-full text-center">
                                "Nalar Hasta Terusing Budi"
                            </i>
                            <p class="mt-2 text-sm text-justify leading-relaxed">
                                Semboyan <span class="font-semibold">FORDI MAPELAR</span> adalah "Nalar Hasta Terusing
                                Budi" yang menggambarkan alam pikiran dan hakekat kegiatan <span class="font-semibold">FORDI
                                    MAPELAR</span> sebagai kelompok studi yang didukung oleh kreativitas individu, pada
                                hakekatnya mempunyai kegiatan intelektual yang menganalisa kebenaran tetapi juga
                                terpanggil untuk menunaikan kewajiban sosialnya. "Nalar Hasta Terusing Budi" juga
                                berarti bahwa bagi <span class="font-semibold">FORDI MAPELAR</span> Universitas
                                Brawijaya, bernalar, berkarya, menganalisa pikiran adalah kelanjutan dari budi yang arif
                                untuk memebentuk manusia seutuhnya sesuai dengan hakekat manusia. "Nalar Hasta Terusing
                                Budi" menurut rumusan candra sengkala adalah 'nalar' berwatak 1, 'hasta' berwatak 8,
                                'terusing' berwatak 9, dan 'budi' berwatak 1. Sebagaimana lazimnya sengkala dibaca
                                terbalik, 1981 tahun berdirinya <span class="font-semibold">FORDI MAPELAR</span>
                                Universitas Brawijaya.
                            </p>
                        </div>
 
                    </div>
                </div>
 
                {{-- Dot Pagination --}}
                <div class="absolute bottom-6 left-1/2 -translate-x-1/2 flex gap-2.5 z-10">
                    <button class="dot h-2 w-2 rounded-full bg-[#106AD2] transition-all duration-300"></button>
                    <button class="dot h-2 w-2 rounded-full bg-gray-300 transition-all duration-300"></button>
                    <button class="dot h-2 w-2 rounded-full bg-gray-300 transition-all duration-300"></button>
                    <button class="dot h-2 w-2 rounded-full bg-gray-300 transition-all duration-300"></button>
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
    <section
        class="px-6 md:px-40 py-24 md:py-40 grid grid-cols-1 md:grid-cols-2 text-stone-600 gap-10 items-start">
        <div class="text-3xl md:text-7xl font-bold text-[#100c51]">Manifesto Penalaran</div>
        <p class="text-sm md:text-base font-normal leading-relaxed border-l-2 pl-6 border-[#100C51]/20">
            Bahwa sesungguhnya Fordi Mapelar Universitas Brawijaya dalam segala gerak dan langkahnya selalu dijiwai
            oleh semangat penalaran yang mengarah pada pengejawantahan idealisme kemahasiswaan dalam memenuhi
            tanggung jawab sosialnya. Dan daripada itu, semangat penalaran adalah suatu jiwa yang terpancar dari
            kejernihan hati nurani yang paling dalam, dengan dasar pemikiran yang benar serta diwujudkan dalam
            keteguhan sikap dan keberanian menyuarakan kebenaran.
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
