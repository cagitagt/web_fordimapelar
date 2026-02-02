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
                    class="relative flex justify-center items-center h-full  flex-col text-stone-700  px-6 lg:px-20  text-center ">
                    <span class="uppercase tracking-widest text-sm font-bold text-[#100C51]">
                        FORDI MAPELAR 2026
                    </span>

                    <h1 class="font-extrabold text-5xl leading-tight max-md:text-4xl">
                        Kabinet <span class="text-[#100C51]">Dharma Utthita</span>
                    </h1>

                    <p class="max-w-2xl font-medium text-lg ">
                        Mengenal lebih dekat visi, misi, dan semangat pergerakan UKM Fordi Mapelar.
                    </p>

                    <div class="flex gap-3 mt-5  items-center justify-center flex-wrap">
                        <button class=" px-6 py-2 bg-[#100C51] text-white rounded-full font-bold cursor-pointer">
                            E-Booklet
                        </button>
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

            {{-- logika img/video yt --}}
            <span class="text-white/70 font-semibold text-lg">
                Visual Kabinet
            </span>

            {{-- optional overlay --}}
            <div class="absolute inset-0 bg-black/10"></div>
        </div>
    </section>

    {{-- narasi kabinet --}}
    <section class=" px-40 py-20 max-lg:px-6 max-md:py-6">
        <div class="max-w-4xl mx-auto">
            <div class=" bg-white p-6 rounded-3xl ">

                <h1 class="font-bold text-4xl  mb-5 text-stone-700"><span class="text-[#100C51]">Narasi Besar</span> Kabinet
                </h1>

                <p class="text-gray-700 leading-relaxed  text-justify ">
                    Kabinet Forum Studi Pengembang Penalaran Universitas Brawijaya 2025 bernama "Dharma Utthita" yang
                    diambil dari bahasa Sansekerta yang berarti "Kebangkitan Kebenaran". Sesuai nama kabinet kami, kami
                    berharap bahwa kami dapat membangkitkan Fordi Mapelar UB untuk terus memperjuangkan kebenaran. Prinsip
                    ini selaras pula dengan semboyan kami "Nalar Hasta Terusing Budi" yang berarti bernalar, berkarya,
                    menganalisa pikiran adalah kelanjutan dari budi yang arif untuk membentuk manusia seutuhnya sesuai
                    dengan hakikat manusia.
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
                    <img src="/images/sample.jpg" alt="ketua umum"
                        class="w-full h-full absolute object-cover rounded-3xl border-8 border-white z-10">

                    {{-- decor --}}
                    <img src="/images/svg/ketum_dec1.svg" alt=""
                        class="absolute -rotate-30    -left-32 -bottom-5  z-0 w-96 h-auto">
                    <img src="/images/svg/ketum_dec2.svg" alt="" class="absolute -right-5 -top-5 z-20  w-20 h-auto">
                    <img src="/images/svg/ketum_dec3.svg" alt=""
                        class="absolute -bottom-5 -right-12 h-auto w-24   z-20">

                </div>
                <h5 class="py-1 bg-white px-5 rounded-full font-bold  text-[#100C51] relative">
                    Muhammad Ghazy Humaidi
                </h5>
            </div>
            <div class="flex items-center justify-center flex-col gap-5 text-[#100C51] p-10 text-justify">
                <i>Lorem ipsum, dolor sit amet consectetur adipisicing elit. At dolorem voluptatem recusandae voluptates
                    voluptatibus est accusantium quis veniam obcaecati ratione, nihil maiores aut iste magni tenetur
                    praesentium consequuntur doloremque vel neque saepe! Aspernatur, veniam dolor. Ex impedit ad placeat
                    r</i>
            </div>
        </div>

        <div class=""></div>
    </section>

    {{-- visi misi --}}
    <section class="px-40 py-20 max-lg:px-6 max-md:py-6">
        <h1 class="font-bold text-4xl mb-10 text-stone-700"> <span class="text-[#100C51]">Visi dan Misi</span> Kabinet</h1>
        <div class="grid max-md:grid-cols-1 grid-cols-2 gap-5 text-center">
            <div class="bg-[#100C51] p-16 text-white flex items-center justify-center flex-col gap-5 border rounded-4xl">
                <h1 class="font-bold text-2xl">Visi</h1>
                <i>
                    Membangun UKM Fordi Mapelar sebagai ruang kolaborasi yang inklusif, kritis, dan inovatif untuk
                    menghasilkan ide-ide solutif dan aplikatif serta meningkatkan daya saing intelektual mahasiswa.
                </i>
            </div>
            <div class="text-[#100C51] p-10 flex flex-col gap-5 text-justify">
                <h1 class="font-bold text-2xl">Misi</h1>
                <p>
                    Mengoptimalkan pengelolaan manajemen organisasi guna mengakomodasi kebutuhan beserta sumber daya yang
                    sistematis
                </p>
                <p>
                    Menggencarkan budaya literasi serta berpikir kritis, analitis, dan kreatif dalam setiap kegiatan
                    organisasi melalui pengadaan forum diskusi tematik, pengkajian, serta pelatihan pengembangan
                    pemberdayaan anggota Mendorong kolaborasi dan jaringan kemitraan dengan pihak-pihak terkait guna
                    terciptanya transfer keilmuan dan koordinasi yang konstruktif

                </p>
                <p>
                    Mengintensifkan publikasi ilmiah, kampanye sosial, dan hasil diskusi kajian secara masif dan konsisten
                    guna mengapresiasi kontribusi anggota dengan baik
                </p>
            </div>
        </div>
    </section>

    {{-- departemen dan pengertian --}}
    <section class="px-40 py-20 max-lg:px-6 max-md:py-6">
        <h1 class="font-bold text-4xl mb-10 text-stone-700"> <span class="text-[#100C51]"> Struktur </span>Kabinet</h1>

        <div class="relative w-full h-150 max-md:h-96">
            <div class="my-20 relative bg-[#100C51] border-[#100C51] border-4 rounded-2xl w-full h-150  max-md:h-96">
                <img src="" alt="">
            </div>
        </div>


        <div class=" my-20">
            {{-- BPI --}}
            <div class=" my-10 flex justify-between font-bold text-2xl max-md:text-base">
                <h3>BPI</h3>
                <h3>- Badan Pengurus Inti</h3>
            </div>
            <div class="grid grid-cols-4 max-sm:grid-cols-2 max-lg:grid-cols-3  gap-2 min-h-52 ">
                <div
                    class="p-4 rounded-2xl border-[#100C51] border flex flex-col justify-between h-full  hover:-translate-y-3 transition hover:text-white hover:bg-[#100C51]">
                    <h1 class="font-bold text-2xl leading-none max-md:text-lg ">Dewan Pertimbangan</h1>
                    <p class="text-sm text-justify max-md:text-xs">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Iusto temporibus
                        delectus dolor facilis, ab molestiae accusamus recusandae expedita animi, dolorum, </p>
                </div>

                <div
                    class="p-4 rounded-2xl border-[#100C51] border flex flex-col justify-between h-full hover:-translate-y-3 transition hover:text-white hover:bg-[#100C51] ">
                    <h1 class="font-bold text-2xl mb-5 leading-none max-md:text-lg ">Ketua <br> Umum</h1>
                    <p class="text-sm text-justify max-md:text-xs">Lorem ipsum dolor sit amet consectetur adipisi Lorem
                        ipsum dolor sit amet
                        consectetur adipisicing elit. Quos, reprehenderit. Magni id corporis repudiandae, delectus velit,
                        possimus repellat necessitatibus expedita voluptatem sunt omnis? </p>
                </div>

                <div
                    class="p-4 rounded-2xl border-[#100C51] border flex flex-col justify-between h-full  hover:-translate-y-3 transition hover:text-white hover:bg-[#100C51]">
                    <h1 class="font-bold text-2xl mb-5 leading-none max-md:text-lg">Sekretaris Umum</h1>
                    <p class="text-sm text-justify max-md:text-xs">Lorem ipsum dolor sit amet consectetur adipisi Lorem
                        ipsum dolor sit amet
                        consectetur adipisicing elit. Quos, reprehenderit. Magni id corporis repudiandae, delectus velit,
                        possimus repellat </p>
                </div>

                <div
                    class="p-4 rounded-2xl border-[#100C51] border flex flex-col justify-between h-full  hover:-translate-y-3 transition hover:text-white hover:bg-[#100C51]">
                    <h1 class="font-bold text-2xl mb-5 leading-none max-md:text-lg">Bendahara <br> Umum</h1>
                    <p class="text-sm text-justify max-md:text-xs">Lorem ipsum dolor sit amet consectetur adipisi Lorem
                        ipsum dolor sit amet
                        consectetur adipisicing elit. Quos, reprehenderit. Magni id corporis repudiandae, delectus velit,
                        possimus repellat </p>
                </div>

            </div>

            {{-- BPH --}}
            <div class=" my-10 flex justify-between font-bold text-2xl max-md:text-base">
                <h3>BPH</h3>
                <h3>- Badan Pengurus Harian</h3>
            </div>
            <div class="grid grid-cols-4 max-md:grid-cols-2 gap-2 min-h-52">
                <div
                    class="p-4 rounded-2xl border-[#100C51] border flex flex-col justify-between h-full  hover:-translate-y-3 transition hover:text-white hover:bg-[#100C51]">
                    <h1 class="font-bold text-2xl leading-none max-md:text-lg">Media dan Informasi</h1>
                    <p class="text-sm text-justify max-md:text-xs">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Iusto temporibus
                        delectus dolor facilis, ab molestiae accusamus recusandae expedita animi, dolorum, </p>
                </div>



            </div>
        </div>
    </section>
@endsection
