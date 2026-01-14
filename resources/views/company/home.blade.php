@extends('layouts.layouts')

@section('content')
    <section id="home"
        class="min-h-screen bg-gray-50 px-6 md:px-16 flex flex-col items-center justify-center relative overflow-hidden">
        {{-- pt-20 dihapus karena padding sudah ada di body --}}

        <div
            class="absolute bottom-0 left-[-100px] w-56 h-56 md:w-96 md:h-96
               bg-gradient-to-tr from-green-300/40 via-green-200/40 to-transparent
               opacity-70 blur-3xl z-0 rounded-full">
        </div>

        <div
            class="absolute top-0 right-[-100px] w-56 h-56 md:w-96 md:h-96
               bg-gradient-to-bl from-green-400/40 via-green-200/40 to-transparent
               opacity-70 blur-3xl z-0 rounded-full">
        </div>

        <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-12 relative z-10 items-center">
            <div data-aos="fade-right"  data-aos-duration="1500">
                <h3 class="text-5xl md:text-6xl font-extrabold mb-4 text-gray-900 leading-tight">
                    <span class="block text-green-600">Belajar Berjuang</span> Bertaqwa
                </h3>
                <p class="text-xl mb-8 text-gray-600 max-w-xl">
                    Jadilah pelajar yang tidak hanya cerdas di kelas, tapi juga berkarakter di masyarakat. Ayo gabung
                    <strong class="text-green-700">IPNU-IPPNU</strong>, tempat kita tumbuh bersama.
                </p>
                <a href="#tentangKami" class="inline-block">
                    <button
                        class="bg-green-600 text-white font-semibold text-lg px-10 py-3 rounded-lg shadow-lg hover:bg-green-700 hover:shadow-xl transition duration-300 transform hover:-translate-y-0.5 ease-in-out">
                        Ikut Bergabung
                    </button>
                </a>
            </div>

            <div class="flex justify-center order-first md:order-last" data-aos="fade-left" data-aos-delay="100"
                data-aos-duration="1500">
                <img src="assets/image/foto-team.jpg" alt="Tim Kami"
                    class="rounded-3xl shadow-2xl w-full max-w-md h-auto object-cover transform rotate-3 hover:rotate-0 hover:scale-[1.03] transition duration-500 ease-in-out border-4 border-white hidden md:block">
            </div>
        </div>
    </section>

    <section id="visi"
        class="bg-white min-h-screen flex flex-col py-20 px-6 items-center justify-center relative overflow-hidden z-10">

        <div
            class="absolute bottom-[-100px] left-[-100px]
           w-64 h-64 md:w-[400px] md:h-[400px]
           bg-gradient-to-tr from-green-400/20 via-green-200/20 to-transparent
           opacity-70 blur-3xl z-0 rounded-full">
        </div>

        <div
            class="absolute top-[-40px] right-[-40px]
           w-28 h-28 md:w-40 md:h-40
           bg-gradient-to-bl from-green-300/30 via-green-200/30 to-transparent
           opacity-60 blur-2xl z-0 rounded-full">
        </div>

        <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-12 relative z-10">

            <div class="
            bg-white p-10 rounded-xl shadow-xl
            transition duration-500 hover:shadow-2xl hover:-translate-y-1
            border-l-4 border-green-600
            text-center"
                data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500">

                <div class="mb-6 pb-4 border-b border-gray-200">
                    <h3 class="text-3xl font-bold text-green-700">
                        <span class="mr-2">🏆</span> Visi
                    </h3>
                </div>

                <p class="text-gray-700 text-lg leading-relaxed italic">
                    "Menjadi organisasi pelajar yang berperan sebagai wadah kaderisasi, pengembangan potensi, serta
                    pembinaan pelajar, santri, dan mahasiswa untuk membentuk generasi muda **religius, intelektual,
                    berakhlak mulia**, serta setia pada nilai-nilai Ahlussunnah wal Jamaah an-Nahdliyah."
                </p>
            </div>

            <div class="
            bg-white p-10 rounded-xl shadow-xl
            transition duration-500 hover:shadow-2xl hover:-translate-y-1
            border-l-4 border-green-600"
                data-aos="fade-down" data-aos-delay="100" data-aos-duration="1500">

                <div class="mb-6 pb-4 border-b border-gray-200 text-center">
                    <h3 class="text-3xl font-bold text-green-700">
                        <span class="mr-2">🚀</span> Misi
                    </h3>
                </div>

                <ol class="list-none text-gray-700 space-y-6 text-left">
                    @foreach (['Membina, mengarahkan, dan mengembangkan potensi pelajar dalam bidang intelektual, spiritual, sosial, dan budaya.', 'Menanamkan nilai-nilai keislaman, ke-Indonesiaan, dan ke-NU-an pada kader muda.', 'Menjadi wadah perjuangan pelajar NU dalam menghadapi tantangan zaman dengan tetap berpegang pada akidah Ahlussunnah wal Jamaah.', 'Mendorong terciptanya kader pelajar NU yang kritis, kreatif, inovatif, dan berdaya saing.', 'Mengembangkan tradisi keilmuan, kepemimpinan, dan pengabdian kepada masyarakat.'] as $key => $misi)
                        <li class="flex items-start">
                            <span
                                class="
                        w-6 h-6 flex items-center justify-center rounded-full
                        bg-green-600 text-white font-bold text-sm mr-4 flex-shrink-0 mt-0.5
                    ">
                                {{ $key + 1 }}
                            </span>
                            <p class="text-base text-gray-700 leading-relaxed">{{ $misi }}</p>
                        </li>
                    @endforeach
                </ol>
            </div>
        </div>
    </section>

    <section id="tentangKami"
        class="min-h-screen py-20 px-6 bg-gray-50 flex flex-col justify-center relative overflow-hidden z-10">

        <div
            class="absolute bottom-0 left-[-100px] w-56 h-56 md:w-96 md:h-96
               bg-gradient-to-tr from-green-300/40 via-green-200/40 to-transparent
               opacity-60 blur-3xl z-0 rounded-full">
        </div>

        <div
            class="absolute top-0 right-[-100px] w-56 h-56 md:w-96 md:h-96
               bg-gradient-to-bl from-green-400/40 via-green-200/40 to-transparent
               opacity-60 blur-3xl z-0 rounded-full">
        </div>

        <div class="max-w-6xl mx-auto relative z-10">
            <h2 class="text-3xl font-bold text-center mb-12 text-gray-900" data-aos="fade-down" data-aos-delay="100"
                data-aos-duration="1500">Mengenal Kami Lebih Dekat</h2>

            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="order-last md:order-first" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1500">
                    <img src="assets/image/tentang.jpg" alt="Aktivitas Organisasi"
                        class="rounded-3xl shadow-2xl w-full max-w-lg mx-auto object-cover transform -rotate-1 hover:rotate-0 transition duration-500 ease-in-out border-4 border-white">
                </div>

                <div class="text-gray-700" data-aos="fade-left" data-aos-delay="100" data-aos-duration="1500">
                    <h3 class="text-2xl font-bold text-green-700 mb-4">Tentang Kami</h3>
                    <p class="mb-6 text-lg leading-relaxed border-l-4 border-green-500 pl-4">
                        Kami adalah organisasi yang berkomitmen untuk membina, mendidik, dan mengembangkan potensi
                        pelajar Nahdlatul Ulama di Kabupaten Pangandaran. Berlandaskan nilai-nilai Aswaja, kami hadir
                        sebagai motor penggerak **generasi muda yang berkarakter**.
                    </p>
                    <ul class="list-none space-y-3">
                        <li class="flex items-start">
                            <span class="text-green-600 mr-2 text-xl font-bold">✓</span>
                            Membina dan mengembangkan potensi pelajar NU di Pangandaran
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-600 mr-2 text-xl font-bold">✓</span>
                            Menanamkan nilai-nilai keislaman, keilmuan, dan kebangsaan
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-600 mr-2 text-xl font-bold">✓</span>
                            Mencetak kader pelajar yang berakhlak, cerdas, dan berdaya saing
                        </li>
                    </ul>
                </div>
            </div>

            <div class="pt-16 grid grid-cols-2 md:grid-cols-4 gap-6" data-aos="fade-up" data-aos-delay="100"
                data-aos-duration="1500">
                <div
                    class="bg-white rounded-2xl shadow-xl p-6 text-center transition-transform duration-500 transform hover:scale-[1.05] hover:shadow-2xl border-t-8 border-green-600">
                    <p class="text-sm font-semibold text-green-700 uppercase tracking-wider mb-1">PAC & PKPT</p>
                    <p class="text-4xl font-extrabold text-gray-900 mt-2">22</p>
                </div>
                <div
                    class="bg-white rounded-2xl shadow-xl p-6 text-center transition-transform duration-500 transform hover:scale-[1.05] hover:shadow-2xl border-t-8 border-green-600">
                    <p class="text-sm font-semibold text-green-700 uppercase tracking-wider mb-1">Pimpinan Komisariat</p>
                    <p class="text-4xl font-extrabold text-gray-900 mt-2">33</p>
                </div>
                <div
                    class="bg-white rounded-2xl shadow-xl p-6 text-center transition-transform duration-500 transform hover:scale-[1.05] hover:shadow-2xl border-t-8 border-green-600">
                    <p class="text-sm font-semibold text-green-700 uppercase tracking-wider mb-1">Pimpinan Ranting</p>
                    <p class="text-4xl font-extrabold text-gray-900 mt-2">183</p>
                </div>
                <div
                    class="bg-white rounded-2xl shadow-xl p-6 text-center transition-transform duration-500 transform hover:scale-[1.05] hover:shadow-2xl border-t-8 border-green-600">
                    <p class="text-sm font-semibold text-green-700 uppercase tracking-wider mb-1">Jumlah Anggota</p>
                    <p class="text-4xl font-extrabold text-gray-900 mt-2">224</p>
                </div>
            </div>

        </div>
    </section>

    <section id="blog" class="min-h-screen py-20 px-6 bg-white items-center justify-center">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl font-bold text-center mb-12 text-gray-900" data-aos="fade-down" data-aos-delay="100"
                data-aos-duration="1500">Artikel Terbaru</h2>

            <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($beritas as $berita)
                    <div class="bg-white rounded-xl shadow-lg hover:shadow-2xl transition duration-300 overflow-hidden transform hover:-translate-y-1 border border-gray-100"
                        data-aos="zoom-in" data-aos-delay="100" data-aos-duration="1500">
                        <a href="{{ route('berita.show', $berita->slug) }}" class="block">
                            <img src="{{ asset('storage/beritas/' . $berita->gambar) }}" alt="Thumbnail Artikel"
                                class="w-full h-52 object-cover transition duration-500 group-hover:scale-105">
                        </a>
                        <div class="p-5">
                            <a href="{{ route('berita.show', $berita->slug) }}" class="hover:text-green-600 transition">
                                <h3 class="text-xl font-bold text-gray-900 mb-2 line-clamp-2">{{ $berita->judul }}</h3>
                            </a>
                            <p class="text-base text-gray-600 mb-4 line-clamp-3">
                                {!! str_replace(['<p>', '</p>'], '', $berita->isi) !!}
                            </p>

                            <a href="{{ route('berita.show', $berita->slug) }}"
                                class="text-green-600 font-semibold flex items-center hover:text-green-700 transition">
                                Baca Selengkapnya
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                                </svg>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="mt-10 flex justify-center">
                {{ $beritas->links('vendor.pagination.tailwind') }}
            </div>
        </div>
    </section>


    <section id="kontak" class="bg-gray-50 py-20 px-6">
        <div class="max-w-6xl mx-auto">

            <!-- Judul -->
            <div class="text-center mb-14" data-aos="fade-down" data-aos-delay="100" data-aos-duration="1500">
                <h3 class="text-3xl font-bold text-gray-900 mb-4">Tentang Kami</h3>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    PC IPNU IPPNU Pangandaran merupakan organisasi pelajar yang berkomitmen
                    dalam pengembangan kader berakhlak, berilmu, dan berkontribusi bagi masyarakat.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">

                <!-- KIRI: PROFIL & KONTAK -->
                <div class="bg-white  md:h-[450px] rounded-xl shadow-xl p-8" data-aos="fade-right" data-aos-delay="100"
                    data-aos-duration="1500">
                    <h4 class="text-xl font-semibold text-gray-800 mb-4">
                        Sekretariat Kami
                    </h4>

                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Sekretariat PC IPNU IPPNU Pangandaran menjadi pusat kegiatan organisasi,
                        mulai dari koordinasi kaderisasi, administrasi, hingga pelaksanaan program
                        sosial dan keagamaan.
                    </p>

                    <ul class="space-y-4 text-gray-700">
                        <li class="flex items-start gap-3">
                            <span class="text-green-600 text-xl shrink-0">📍</span>
                            <span class="break-words">
                                Sekretariat PCNU Kabupaten Pangandaran
                            </span>
                        </li>

                        <li class="flex items-start gap-3">
                            <span class="text-green-600 text-xl shrink-0">📞</span>
                            <span class="break-words">
                                +62 8xxx xxxx xxxx
                            </span>
                        </li>

                        <li class="flex items-start gap-3">
                            <span class="text-green-600 text-xl shrink-0">✉️</span>
                            <span class="break-all">
                                pcipnuippnupangandaran@email.com
                            </span>
                        </li>
                    </ul>

                </div>

                <!-- KANAN: MAP -->
                <div class="bg-white rounded-xl shadow-xl overflow-hidden h-[350px] md:h-[450px]" data-aos="fade-left"
                    data-aos-delay="100" data-aos-duration="1500">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15750.627914856008!2d108.61863584898235!3d-7.669818817294576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e65c02b21703277%3A0x6331a90c0b115467!2sSekretariat%20PCNU%20Kabupaten%20Pangandaran!5e0!3m2!1sen!2sid!4v1704987000000!5m2!1sen!2sid"
                        class="w-full h-full border-0 transition duration-500 hover:scale-[1.02]" allowfullscreen
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>

            </div>
        </div>
    </section>
@endsection
