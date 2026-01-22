@extends('layout.user')

@section('content')
    {{-- hero section --}}
    <section class="min-h-screen w-full flex items-center justify-center">
        <!-- Amber Glow Background -->
        <div class="pointer-events-none absolute inset-0 z-0"
            style="background-image: radial-gradient(125% 125% at 50% 90%,#ffffff 40%, #106AD2 100%); background-size: 100% 100%;">
        </div>

        <!-- Page Content -->
        <div class="absolute z-10">
            <div class="mx-auto max-w-5xl py-40 text-[#09182C] flex flex-col justify-center items-center">
                <h1 class=" text-5xl font-bold max-md:text-4xl">Fordi Mapelar</h1>
                <p class="leading-relaxed text-center my-1 text-stone-700 font-semibold max-md:text-sm">
                    Forum Studi Mahasiswa Pengembang Penalaran
                </p>
                <h1 class="text-5xl font-bold max-md:text-4xl">
                    Universitas Brawijaya
                </h1>
                <div class="flex gap-3">
                    <button class="mt-10 px-6 py-2 bg-[#09182C] text-white rounded-full font-bold cursor-pointer">Tentang
                        Kami</button>
                    <button
                        class="mt-10 px-6 py-2 bg-white border-stone-700 rounded-full font-bold cursor-pointer text-stone-700 border-2">Layanan</button>
                </div>
            </div>
        </div>
    </section>

    {{-- Apa itu Fordi Mapelar --}}
    <section
        class="h-80 w-full flex justify-center items-center px-32 py-20 max-lg:px-12 max-lg:py-6 relative bg-[#106AD2] ">
        <div class="absolute left-20 -bottom-16 max-sm:left-10  animate-spin [animation-duration:30s]">
            <img src="{{ asset('images/orange.svg') }}" alt="orange"
                class="object-cover h-80 w-80 max-lg:h-36 max-lg:w-36 ">
        </div>
        <div class="absolute right-20 -top-10 max-sm:right-10  animate-spin  [animation-duration:40s]">
            <img src="{{ asset('images/yellow.svg') }}" alt="yellow"
                class="object-cover h-80 w-80 max-lg:h-36 max-lg:w-36 ">
        </div>


        <div class="absolute text-white max-w-120 max-sm:max-w-40">
            <h1 class="font-bold leading-none max-sm:text-sm mb-5">" Apa itu Fordi Mapelar?"</h1>
            <p class="font-semibold leading-none text-3xl max-sm:text-lg">
                Unit Kegiatan Mahasiswa yang dinaungi dalam Universitas Brawijaya yang bergerak utamanya di bidang
                penalaran.
            </p>
        </div>
    </section>

    {{-- quote section --}}
    <section class=" w-full flex justify-center items-center px-40 py-48 max-lg:px-12 max-lg:py-30">
        <div>
            <h1 class="md:text-5xl font-bold mb-4 text-xl">“ Nalar Hasta Terusing Budi “</h1>
            <p class=" text-stone-700 font-semibold max-md:text-xs text-end">Bernalar, berkarya, dan menganalisis pikiran
                merupakan kelanjutan dari budi yang arif. </p>
        </div>
    </section>

    {{-- socrates --}}
    <section class="h-80 w-full flex justify-end items-center px-32 py-20 max-lg:px-12 max-lg:py-6 relative bg-[#106AD2]">
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

    {{-- Arti Logo Fordi --}}
    <section></section>

    {{-- Tentang Fordi Mapelar --}}
    <section class="px-40 py-48 max-lg:px-12 max-lg:py-30  text-stone-700 gap-7">
        <div class="font-decorative text-end text-6xl lg:text-8xl mb-10">Tentang Fordi Mapelar</div>
        <div class=" text-base font-medium grid max-lg:grid-cols-1 grid-cols-3 text-justify gap-10 border-stone-700">
            <P>
                <i class="font-bold text-amber-600">Berawal dari keinginan para aktivis yang ada di Universitas Brawijaya
                    pada awal tahun 80-an,</i> untuk bisa memiliki suatu forum dimana mereka dapat berkumpul dan berdiskusi
                satu sama lain. Pada bulan <span class="font-extrabold text-amber-600">April 1981</span>, diadakan suatu
                forum untuk seluruh mahasiswa Universitas Brawijaya yang mana di dalamnya dikemukakan sebuah pemikiran dasar
                tentang keinginan membentuk suatu aktivitas diskusi.
            </P>
            <P>
                Dalam forum tersebut telah dicapai mufakat untuk <i class="font-bold text-amber-600">membentuk tim komisi
                    serta sebuah lembaga kemahasiswaan yang bergerak dalam bidang penalaran</i>. Forum Studi Mahasiswa
                Pengembang Penalaran Universitas Brawijaya. Maka, didirikanlah sebuah organisasi yang bernama Forum Studi
                Mahasiswa Pengembang Penalaran (Fordi Mapelar). <i class="font-bold text-amber-600">Fordi Mapelar sendiri
                    merupakan penalaran yang bergerak dibidang pengembangan nalar mahasiswa.</i>
            </P>
            <P>
                <i class="font-bold text-amber-600">Kegiatan Fordi Mapelar diutamakan pada penuangan wadah untuk
                    mengembangkan nalar dan dialetika melalui diskusi, bedah buku, screening film dan pengabdian
                    masyarakat.</i> Fordi Mapelar juga memfasilitasi kegiatan dalam hal peningkatan soft skill yang tentunya
                dapat diaplikasikan di dalam kehidupan sehari-hari, seperti public speaking, kepenulisan (buku, esai, opini
                dan artikel) dan pemahaman terhadap filsafat.
            </P>
        </div>
    </section>



    {{-- Nilai dasar organisasi --}}
    <section class=" px-20 py-24 max-lg:px-12 max-lg:py-30 bg-[#106AD2]">
        <h1 class="text-5xl font-bold max-md:text-3xl mb-20 text-white text-center">
            Nilai Dasar Organisasi
        </h1>

        <div class="flex max-md:flex-col items-center justify-center flex-wrap gap-10">
            <div class="w-46 h-46 perspective-[1000px] ">
                <div
                    class="relative w-full h-full transition-transform duration-700 transform-3d hover:transform-[rotateY(180deg)]  shadow-2xl  rounded-xl bg-white text-stone-700 font-semibold ">

                    {{-- front --}}
                    <div
                        class="absolute inset-0 flex items-center justify-center rounded-xl  
                backface-hidden  text-lg">
                        Collaboration
                    </div>

                    {{-- back --}}
                    <div
                        class="absolute inset-0 flex flex-col items-center justify-center rounded-xl  
                transform-[rotateY(180deg)] backface-hidden p-5   ">
                        <h1 class="font-extrabold text-xl mb-2 text-[#106AD2]">Collaboration</h1>
                        <p class=" leading-none text-sm text-justify">Mendorong adanya kerja sama dan kolaborasi baik antar anggota maupun Fordi Mapelar dengan organisasi lain</p>

                    </div>

                </div>
            </div>

            <div class="w-46 h-46 perspective-[1000px] ">
                <div
                    class="relative w-full h-full transition-transform duration-700 transform-3d hover:transform-[rotateY(180deg)]  shadow-2xl  rounded-xl bg-white text-stone-700 font-semibold ">

                    {{-- front --}}
                    <div
                        class="absolute inset-0 flex items-center justify-center rounded-xl  
                backface-hidden  text-lg">
                        Communication
                    </div>

                    {{-- back --}}
                    <div
                        class="absolute inset-0 flex flex-col items-center justify-center rounded-xl  
                transform-[rotateY(180deg)] backface-hidden p-5   ">
                        <h1 class="font-extrabold text-xl mb-2 text-[#106AD2]">Communication</h1>
                        <p class=" leading-none text-sm text-justify">Membangun dan mengembangkan pola komunikasi yang terbuka dan efektif dalam merangkul berbagai aspirasi dan dalam menjalankan roda organisasi.</p>

                    </div>

                </div>
            </div>

            <div class="w-46 h-46 perspective-[1000px] ">
                <div
                    class="relative w-full h-full transition-transform duration-700 transform-3d hover:transform-[rotateY(180deg)]  shadow-2xl  rounded-xl bg-white text-stone-700 font-semibold ">

                    {{-- front --}}
                    <div
                        class="absolute inset-0 flex items-center justify-center rounded-xl  
                backface-hidden  text-lg">
                        Creativity
                    </div>

                    {{-- back --}}
                    <div
                        class="absolute inset-0 flex flex-col items-center justify-center rounded-xl  
                transform-[rotateY(180deg)] backface-hidden p-5   ">
                        <h1 class="font-extrabold text-xl mb-2 text-[#106AD2]">Creativity</h1>
                        <p class=" leading-none text-sm text-justify">Mendorong inovasi dan kreativitas dalam progresifitas pengembangan anggota.</p>

                    </div>

                </div>
            </div>

            <div class="w-46 h-46 perspective-[1000px] ">
                <div
                    class="relative w-full h-full transition-transform duration-700 transform-3d hover:transform-[rotateY(180deg)]  shadow-2xl  rounded-xl bg-white text-stone-700 font-semibold ">

                    {{-- front --}}
                    <div
                        class="absolute inset-0 flex items-center justify-center rounded-xl  
                backface-hidden  text-lg">
                        Cultivation
                    </div>

                    {{-- back --}}
                    <div
                        class="absolute inset-0 flex flex-col items-center justify-center rounded-xl  
                transform-[rotateY(180deg)] backface-hidden p-5   ">
                        <h1 class="font-extrabold text-xl mb-2 text-[#106AD2]">Cultivation</h1>
                        <p class=" leading-none text-sm text-justify">Memberdayakan anggota melalui pembinaan dan pengembangan pribadi</p>

                    </div>

                </div>
            </div>

            <div class="w-46 h-46 perspective-[1000px] ">
                <div
                    class="relative w-full h-full transition-transform duration-700 transform-3d hover:transform-[rotateY(180deg)]  shadow-2xl  rounded-xl bg-white text-stone-700 font-semibold ">

                    {{-- front --}}
                    <div
                        class="absolute inset-0 flex items-center justify-center rounded-xl  
                backface-hidden  text-lg">
                        Caring
                    </div>

                    {{-- back --}}
                    <div
                        class="absolute inset-0 flex flex-col items-center justify-center rounded-xl  
                transform-[rotateY(180deg)] backface-hidden p-5   ">
                        <h1 class="font-extrabold text-xl mb-2 text-[#106AD2]">Caring</h1>
                        <p class=" leading-none text-sm text-justify">Membangun budaya perhatian dan dukungan di antara anggota.</p>

                    </div>

                </div>
            </div>
        </div>


    </section>


    {{-- manifesto penalaran --}}
    <section class="px-40 py-48  max-lg:px-16 max-lg:py-30 grid max-lg:grid-cols-1 grid-cols-2 text-stone-700 gap-7">
        <div class="font-decorative text-5xl lg:text-8xl">Manifesto Penalaran</div>
        <p class=" max-lg:text-sm font-medium border-l-2 pl-5  border-stone-700">
            Bahwa sesungguhnya Fordi Mapelar Universitas Brawijaya dalam segala gerak dan langkahnya selalu dijiwai oleh
            semangat penalaran yang mengarah pada pengejawantahan idealisme kemahasiswaan dalam memenuhi tanggung jawab
            sosialnya. Dan daripada itu, semangat penalaran adalah suatu jiwa yang terpancar dari kejernihan hati nurani
            yang paling dalam, dengan dasar pemikiran yang benar serta diwujudkan dalam keteguhan sikap dan keberanian
            menyuarakan kebenaran.
        </p>
    </section>
@endsection
