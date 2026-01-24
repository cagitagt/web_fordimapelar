@extends('layout.user')

@section('content')
    {{-- hero section --}}
    <section class="relative w-full h-screen flex justify-center items-center px-40 py-20 max-md:px-12 max-md:py-6 overflow-hidden text-stone-700">
        {{-- subtle background glow --}}
        <div class="absolute inset-0 -z-10 "></div>

        <div class="flex flex-col items-center text-center gap-2">
            <span class="uppercase tracking-widest text-sm font-semibold text-amber-600">
                FORDI MAPELAR 2026
            </span>

            <h1 class="font-extrabold text-5xl leading-tight max-md:text-4xl">
                Kabinet <span class="text-amber-600">Dharma Utthita</span>
            </h1>

            <p class="max-w-2xl font-medium text-lg ">
                Mengenal lebih dekat visi, misi, dan semangat pergerakan UKM Fordi Mapelar.
            </p>

            <div class="flex gap-3 mt-5  items-center justify-center flex-wrap">
                    <button class=" px-6 py-2 bg-amber-600 text-white rounded-full font-bold cursor-pointer">
                        E-Booklet
                    </button>
                    <button
                        class=" px-6 py-2 bg-white border-stone-700 rounded-full font-bold cursor-pointer  border-2"><a href="{{ route('program-kerja') }}">Program Kerja</a></button>
                </div>
        </div>
    </section>

    {{-- company profile/image --}}
    <section class=" px-40 py-20 max-md:px-12 max-md:py-6">
        <div
            class="relative min-h-120 w-full rounded-3xl overflow-hidden shadow-xl bg-amber-500 flex items-center justify-center">

            {{-- logika img/video yt --}}
            <span class="text-white/70 font-semibold text-lg">
                Visual Kabinet
            </span>

            {{-- optional overlay --}}
            <div class="absolute inset-0 bg-black/10"></div>
        </div>
    </section>

    {{-- narasi kabinet --}}
    <section class=" px-40 py-20 max-md:px-12 max-md:py-6">
        <div class="max-w-4xl mx-auto">
            <div class=" bg-white p-14 rounded-3xl ">

                <h1 class="font-bold text-4xl mb-5 text-stone-700"><span class="text-amber-500">Narasi Besar</span> Kabinet
                </h1>

                <p class="text-gray-700 leading-relaxed text-lg text-justify">
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
    <section class="px-40 py-20 max-md:px-12 max-md:py-6">
        <h1 class="font-bold text-4xl mb-10 text-stone-700">Sambutan <span class="text-amber-500">Ketua Umum</span></h1>
        <div class="grid max-md:grid-cols-1 grid-cols-2 gap-5  text-center">
            <div class=" flex items-center justify-center flex-col gap-5 text-white p-10">
                <div class="bg-stone-100 rounded-3xl  h-60  w-60 ">
                    <img src="/images/sample.jpg" alt="ketua umum" class="w-full h-full object-cover rounded-3xl ">
                </div>
                <h5 class="py-2 px-5 rounded-2xl font-bold bg-amber-500">
                    Annisa Aulia 
                </h5>
            </div>
            <div class="flex items-center justify-center flex-col gap-5 text-amber-500 p-10 text-justify">
                <i >Lorem ipsum, dolor sit amet consectetur adipisicing elit. At dolorem voluptatem recusandae voluptates voluptatibus est accusantium quis veniam obcaecati ratione, nihil maiores aut iste magni tenetur praesentium consequuntur doloremque vel neque saepe! Aspernatur, veniam dolor. Ex impedit ad placeat r</i>
            </div>
        </div>
    </section>

    {{-- visi misi --}}
    <section class="px-40 py-20 max-md:px-12 max-md:py-6">
        <h1 class="font-bold text-4xl mb-10 text-stone-700"> <span class="text-amber-500">Visi dan Misi</span> Kabinet</h1>
        <div class="grid max-md:grid-cols-1 grid-cols-2 gap-5 text-center">
            <div class="bg-amber-500 p-16 text-white flex items-center justify-center flex-col gap-5">
                <h1 class="font-bold text-2xl">Visi</h1>
                <i>
                    Membangun UKM Fordi Mapelar sebagai ruang kolaborasi yang inklusif, kritis, dan inovatif untuk
                    menghasilkan ide-ide solutif dan aplikatif serta meningkatkan daya saing intelektual mahasiswa.
                </i>
            </div>
            <div class="text-amber-500 p-10 flex flex-col gap-5 text-justify">
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
    <section class="px-40 py-20 max-md:px-12 max-md:py-6">
        <h1 class="font-bold text-4xl mb-10 text-stone-700"> <span class="text-amber-500"> Struktur </span>Kabinet</h1>
    </section>
@endsection
