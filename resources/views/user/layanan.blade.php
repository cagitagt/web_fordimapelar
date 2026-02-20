@extends('layout.user')
@section('content')
    {{-- hero --}}
    <section class="pt-20  bg-linear-to-b from-[#0595dd9e] via-neutral-50 to-neutral-50">
        <div
            class="flex flex-col justify-center items-center min-h-110 w-full my-10 text-stone-700 px-20 py-20 max-md:px-12 max-md:py-16 relative ">

            <div class="relative  rounded-4xl p-5" data-aos="fade-up" data-aos-duration="2000">
                <h1 class="text-6xl font-bold max-md:text-3xl mb-2 text-center">
                    Layanan & Komunikasi
                </h1>
                <p class="text-lg max-md:text-sm text-center max-w-180">
                    Jelajahi berbagai layanan yang kami sediakan untuk mendukung komunikasi dari internal maupun eksternal  UKM Fordi Mapelar
                </p>
            </div>

        </div>
    </section>

    {{-- layanan --}}
    <section class="px-40 py-20 max-lg:px-6 max-md:py-10 flex flex-col gap-20 mt-5 mb-10  text-stone-700">

        <!-- ADVOCACY -->
        <div class="flex flex-col gap-20">
            <i class="text-3xl text-center max-md:text-xl font-semibold text-white bg-[#0595ddea] rounded-t-2xl">
                Advokasi
            </i>

            <!-- wrapper -->
            <div class="grid grid-cols-3 max-md:grid-cols-1 gap-10 min-h-40">

                <!-- Visitasi, Kolaborasi, dan Undangan -->
                <div
                    class="rounded-xl border border-white hover:border-[#0595dd9e] flex flex-col justify-center items-center p-8">
                    <div class="">
                        <img src="/images/svg/invitation.svg" alt="" class="mb-5">
                        <h1 class="font-bold mb-2  leading-none">Visitasi, Kolaborasi, dan Undangan</h1>
                        <p class="text-xs">
                            Pengajuan Kerjasama untuk <span class="font-bold">Internal maupun Eksternal Universitas
                                Brawijaya</span>
                        </p>
                    </div>

                    <a href="{{ $external_setting->invitation_url }}" target="_blank" rel="noopener noreferrer"
                        class="inline-block text-sm mt-14 py-2 px-5 rounded-full text-white font-bold bg-[#0595dd9e] cursor-pointer">
                        Klik di sini
                    </a>

                </div>

                <!-- narahubung -->
                <div
                    class="md:col-span-2 max-md:col-span-1 rounded-xl border border-white hover:border-[#0595dd9e] p-8 flex flex-col justify-between items-center">
                    <div class="">
                        <img src="/images/svg/narahubung.svg" alt="" class="mb-5">
                        <h1 class="font-bold text-lg mb-2">Narahubung</h1>
                        <p class="text-xs"> Hubungi Kami di Nomor Ini untuk
                            Pengajuan dan Konfirmasi Kerjasama baik dari <span class="font-bold">Internal maupun Eksternal
                                Universitas
                                Brawijaya</span>
                        </p>
                    </div>

                    <div class=" flex gap-2.5">
                        <a href="{{ $external_setting->contact1_link }}" target="_blank" rel="noopener noreferrer"
                            class="text-sm mt-14 py-2 px-5 rounded-full text-white font-bold bg-[#0595dd9e] cursor-pointer">
                            {{ $external_setting->contact1_name }}
                        </a>
                        <a href="{{ $external_setting->contact2_link }}" target="_blank" rel="noopener noreferrer"
                            class="text-sm mt-14 py-2 px-5 rounded-full text-white font-bold bg-[#0595dd9e] cursor-pointer">
                            {{ $external_setting->contact2_name }}
                        </a>
                    </div>

                </div>

            </div>

        </div>

        <!-- PARTNERSHIP -->
        <div class="flex flex-col gap-20">
            <i class="text-3xl text-center max-md:text-xl font-semibold text-white bg-[#0595ddea] rounded-t-2xl ">
                Kerjasama & Kemitraan Publikasi
            </i>

            <!-- wrapper -->
            <div class="grid max-lg:grid-cols-1 grid-cols-3 gap-10  min-h-40">

                <div
                    class=" rounded-xl border border-white hover:border-[#0595dd9e]
                  flex flex-col justify-between items-center p-8">
                    <div class="">
                        <img src="/images/svg/internal.svg" alt="" class="mb-5 ">
                        <h1 class="font-bold text-lg mb-2">Mitra Internal</h1>
                        <p class="text-xs">
                            Syarat Pengajuan Kerjasama untuk <span class="font-bold">Internal Universitas Brawijaya</span>
                        </p>
                    </div>
                    <a href="{{ $external_setting->internal_terms_url }}" target="_blank" rel="noopener noreferrer"
                        class="text-sm mt-14 py-2 px-5 rounded-full text-white font-bold bg-[#0595dd9e] cursor-pointer">
                        Klik di sini
                    </a>

                </div>

                <div
                    class=" rounded-xl border border-white hover:border-[#0595dd9e]
                  flex flex-col justify-between items-center p-7 ">
                    <div class="">
                        <img src="/images/svg/eksternal.svg" alt="" class="mb-5 ">
                        <h1 class="font-bold text-lg mb-2">Mitra Eksternal</h1>
                        <p class="text-xs">
                            Syarat Pengajuan Kerjasama untuk <span class="font-bold">Eksternal Universitas Brawijaya</span>
                        </p>
                    </div>

                    <a href="{{ $external_setting->external_terms_url }}" target="_blank" rel="noopener noreferrer"
                        class="text-sm mt-14 py-2 px-5 rounded-full text-white font-bold bg-[#0595dd9e] cursor-pointer">
                        Klik di sini
                    </a>
                </div>

                <div
                    class=" rounded-xl border border-white hover:border-[#0595dd9e]
                  flex flex-col justify-between items-center p-8">
                    <div class="">
                        <img src="/images/svg/form.svg" alt="" class="mb-5 ">
                        <h1 class="font-bold text-lg mb-2">Form Pengajuan Publikasi</h1>
                        <p class="text-xs">
                            Pengajuan Kerjasama publikasi <br> <i class="font-semibold">*harap dibaca ketentuan terlebih
                                dahulu</i> </span>
                        </p>
                    </div>
                    <a href="{{ $external_setting->terms_form_url }}" target="_blank" rel="noopener noreferrer"
                        class="text-sm mt-14 py-2 px-5 rounded-full text-white font-bold bg-[#0595dd9e] cursor-pointer">
                        Klik di sini
                    </a>

                </div>
            </div>
        </div>
    </section>

    {{-- faq --}}
    <section id="faq" class="bg-gray-50 py-20 max-lg:px-6 text-[#0595ddea]">
        <div class="max-w-4xl mx-auto ">
            <h2 class="text-4xl font-bold text-center mb-16">Frequently Asked Questions</h2>

            @php
                $faqs = [
                    [
                        'question' => 'Apa itu UKM Fordi Mapelar?',
                        'answer' =>
                            'Fordi Mapelar (Forum Studi Mahasiswa Pengembang Penalaran) adalah Unit Kegiatan Mahasiswa (UKM) tingkat Universitas Brawijaya yang mewadahi mahasiswa dalam pengembangan daya nalar, dialektika, dan berpikir kritis. Kami hadir sebagai ruang inkubasi intelektual bagi seluruh mahasiswa UB.',
                    ],
                    [
                        'question' => 'Apa fokus utama atau bidang gerak Fordi Mapelar?',
                        'answer' =>
                            'Organisasi kami berfokus pada pengembangan intelektual anggota melalui empat pilar keilmuan utama, yaitu: Penalaran (Logika), Politik, Psikologi, dan Filsafat. Keempat bidang ini digunakan sebagai landasan berpikir dalam merespons berbagai fenomena sosial.',
                    ],
                    [
                        'question' => 'Apakah untuk bergabung harus pintar atau sudah menguasai Filsafat?',
                        'answer' =>
                            'Tidak perlu. Fordi Mapelar terbuka bagi seluruh mahasiswa, baik dari rumpun Saintek maupun Soshum, tanpa memandang latar belakang akademis. Kurikulum Pendidikan Anggota (KPA) kami dirancang secara bertahap (sistematis) untuk mempelajari dasar-dasar keilmuan tersebut dari nol bersama-sama.',
                    ],
                    [
                        'question' =>
                            'Apakah Fordi Mapelar berafiliasi dengan partai politik atau organisasi tertentu?',
                        'answer' =>
                            'Tegas kami nyatakan tidak. Fordi Mapelar adalah organisasi yang Independen dan Non-Afiliasi. Kami tidak terikat dengan partai politik, golongan, maupun Organisasi Ekstra Kampus (OMEK) manapun. Sikap kritis kami didasarkan pada objektivitas data dan keilmuan, bukan kepentingan politik praktis.',
                    ],
                    [
                        'question' => 'Apa bedanya Fordi Mapelar dengan UKM Riset/Penelitian lain di UB?',
                        'answer' =>
                            'Jika UKM Riset umumnya berfokus pada metodologi penelitian ilmiah tertulis, Fordi Mapelar lebih menekankan pada pembangunan kerangka berpikir (logic framework) dan dialektika lisan maupun tulisan. Kami menggunakan Penalaran, Filsafat, Psikologi, dan Politik sebagai "pisau analisis" untuk membedah masalah secara mendalam.',
                    ],
                    [
                        'question' => 'Apa saja bentuk kegiatan di Fordi Mapelar?',
                        'answer' =>
                            ' Kegiatan kami sangat variatif dan dinamis, meliputi: Forum Diskusi (Isu Politik & Sosial), Pelatihan/Workshop (Kepenulisan & Public Speaking), Aksi Sosial & Pengabdian Masyarakat (bekerja sama dengan LSM/NGO), serta kegiatan literasi kreatif seperti Lapak Baca (berkolaborasi dengan komunitas seperti Malang Book Party) dan partisipasi dalam Aksi Kamisan.',
                    ],
                    [
                        'question' => ' Siapa saja yang boleh bergabung? Apakah terbatas fakultas tertentu?',
                        'answer' =>
                            'Keanggotaan terbuka bagi seluruh mahasiswa aktif Universitas Brawijaya dari segala fakultas dan jurusan. Kami percaya bahwa nalar kritis adalah hak setiap mahasiswa, tanpa sekat disiplin ilmu.',
                    ],
                    [
                        'question' => 'Apa keuntungan (benefit) yang didapat jika menjadi anggota?',
                        'answer' => 'Anggota akan mendapatkan pengembangan diri yang komprehensif, antara lain: 1. Jejaring Luas: Akses kolaborasi dengan LSM, NGO, dan pegiat sosial di Malang. 2. Soft Skills: Kepemimpinan, Public Speaking, Critical Thinking, dan Decision Making. 3. Hard Skills: Kemampuan Menulis (Opini/Esai), Manajemen Forum Diskusi, dan Event Planner.',
                    ],
                    [
                        'question' => 'Kapan pendaftaran dibuka dan bagaimana caranya?',
                        'answer' => 'Penerimaan anggota baru (Open Recruitment) umumnya dilaksanakan dalam dua gelombang, yaitu pada bulan Juli dan September. Informasi teknis dan formulir pendaftaran dapat dipantau melalui kanal media sosial resmi kami.',
                    ],
                    [
                        'question' => 'Dimana lokasi sekretariat Fordi Mapelar?',
                        'answer' => 'Sekretariat kami berlokasi di Gedung UKM (Unit Kegiatan Mahasiswa) Universitas Brawijaya, Lantai 4. Pintu kami selalu terbuka untuk kawan-kawan yang ingin berdiskusi atau sekadar berkunjung.',
                    ],
                ];
            @endphp

            <div class="space-y-4">
                @foreach ($faqs as $faq)
                    <div class="border rounded-lg bg-white shadow overflow-hidden">
                        <button
                            class="accordion w-full text-left px-4 py-3 font-semibold text-lg flex justify-between items-center">
                            {{ $faq['question'] }} <span class="icon transition-transform duration-300">+</span>
                        </button>
                        <div class="panel max-h-0 overflow-hidden px-4 text-gray-700 transition-all duration-500">
                            <p class="py-3">{{ $faq['answer'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
