<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pc Ipnu Ippnu Pangandaran </title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <!-- Font Awesome 6 CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">


    <link rel="icon" type="image/png" href="/assets/image/ipnuippnu.png" sizes="32x32">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            scroll-behavior: smooth;
        }
    </style>
</head>

<body class="bg-white text-gray-800">

    <!-- Header -->
    <x-header />

    <!-- Home -->
    <section id="home" class="min-h-screen bg-white px-6 md:px-16 flex flex-col items-center justify-center ">
        <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-8">
            <div>
                <h3 id="typed" class="text-4xl md:text-5xl font-bold mb-4 text-green-800">
                </h3>
                <p class="text-lg mb-6 text-gray-600 max-w-xl mx-auto">
                    Jadilah pelajar yang tidak hanya cerdas di kelas, tapi juga berkarakter di masyarakat. Ayo gabung
                    IPNU-IPPNU, tempat kita tumbuh bersama
                </p>
                <button class="bg-green-600 text-white px-8 py-3 hover:bg-green-700 transition">Ikut Bargabubng</button>
            </div>
            <div class="flex justify-center">
                <img src="assets/image/foto-team.jpg" alt="Tim Kami"
                    class="rounded-2xl shadow-xl transform rotate-2 hover:rotate-0 hover:scale-105 transition duration-500 hidden md:block">
            </div>
        </div>
    </section>

    <!-- Visi -->
    <section id="visi" class="bg-white min-h-screen flex flex-col py-16 px-6 items-center justify-center">
        <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-8">
            <div class="">
                <h3 class="text-3xl font-semibold text-green-800 mb-10 text-center">Visi</h3>
                <p class="text-gray-700">
                    Menjadi organisasi pelajar yang berperan sebagai wadah kaderisasi, pengembangan potensi, serta
                    pembinaan pelajar, santri, dan mahasiswa untuk membentuk generasi muda religius, intelektual,
                    berakhlak mulia, serta setia pada nilai-nilai Ahlussunnah wal Jamaah an-Nahdliyah.
                </p>
            </div>
            <div class="max-w-5xl mx-auto text-center">
                <h3 class="text-3xl font-semibold text-green-800 mb-10">Misi</h3>
                <ol class="list-decimal list-outside text-gray-700 ml-5 space-y-2 text-left">
                    <li>
                        Membina, mengarahkan, dan mengembangkan potensi pelajar dalam bidang intelektual, spiritual,
                        sosial, dan budaya.
                    </li>
                    <li>
                        Menanamkan nilai-nilai keislaman, ke-Indonesiaan, dan ke-NU-an pada kader muda.
                    </li>
                    <li>
                        Menjadi wadah perjuangan pelajar NU dalam menghadapi tantangan zaman dengan tetap berpegang pada
                        akidah Ahlussunnah wal Jamaah.
                    </li>
                    <li>
                        Mendorong terciptanya kader pelajar NU yang kritis, kreatif, inovatif, dan berdaya saing.
                    </li>
                    <li>
                        Mengembangkan tradisi keilmuan, kepemimpinan, dan pengabdian kepada masyarakat.
                    </li>
                </ol>
            </div>
        </div>
    </section>

    <!-- Tentang Kami  -->
    <section id="tentangKami" class="min-h-screen py-16 px-6 bg-white flex flex-col justify-center">
        <div class="max-w-6xl mx-auto">
            <div class=" grid md:grid-cols-2 gap-8">
                <img src="assets/image/tentang.jpg" alt="Cipta Web" class="rounded-xl shadow-lg">
                <div>
                    <h3 class="text-3xl font-semibold text-green-800 mb-4">Tentang Kami</h3>
                    <p class="text-gray-700 mb-4">
                        Kami adalah organisasi yang berkomitmen untuk membina, mendidik, dan mengembangkan potensi
                        pelajar Nahdlatul Ulama di Kabupaten Pangandaran. Dengan semangat kebersamaan, kami hadir untuk
                        menanamkan nilai keislaman, keilmuan, dan kebangsaan, sehingga setiap anggota mampu menjadi
                        generasi muda yang berakhlak mulia, berwawasan luas, serta siap berkontribusi bagi agama,
                        bangsa, dan tanah air.
                    </p>
                    <ul class="list-disc list-outside text-gray-700 ml-5">
                        <li>Membina dan mengembangkan potensi pelajar NU di Pangandaran</li>
                        <li>Menanamkan nilai-nilai keislaman, keilmuan, dan kebangsaan</li>
                        <li>Mencetak kader pelajar yang berakhlak, cerdas, dan berdaya saing</li>
                        <li>Menguatkan ukhuwah dan kepedulian sosial di kalangan pelajar</li>
                    </ul>

                </div>
            </div>
            <div class="max-w-6xl pt-6 grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="bg-green-50 rounded-2xl shadow-md p-6 text-center">
                    <h3 class="text-sm font-bold text-green-700">PAC & PKPT</h3>
                    <p class="text-2xl font-extrabold text-gray-800 mt-2">22</p>
                </div>
                <div class="bg-green-50 rounded-2xl shadow-md p-6 text-center">
                    <h3 class="text-sm font-bold text-green-700">Pimpinan Komisariat</h3>
                    <p class="text-2xl font-extrabold text-gray-800 mt-2">33</p>
                </div>
                <div class="bg-green-50 rounded-2xl shadow-md p-6 text-center">
                    <h3 class="text-sm font-bold text-green-700">Pimpinan Ranting</h3>
                    <p class="text-2xl font-extrabold text-gray-800 mt-2">183</p>
                </div>
                <div class="bg-green-50 rounded-2xl shadow-md p-6 text-center">
                    <h3 class="text-sm font-bold text-green-700">Jumlah Anggota</h3>
                    <p class="text-2xl font-extrabold text-gray-800 mt-2">224</p>
                </div>
            </div>
        </div>
    </section>

    {{-- blog --}}
    <section id="blog" class="min-h-screen py-16 px-6 bg-white items-center justify-center">
        <div class="max-w-6xl mx-auto py-10">
            <h2 class="text-2xl font-bold text-center mb-8 text-green-700">Artikel Terbaru</h2>

            <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                <!-- Card 1 -->
                <div class="bg-green-50 rounded-2xl shadow-md p-2 hover:shadow-lg transition">
                    <img src="assets/image/artikel.jpg" alt="Thumbnail" class="rounded-xl mb-4">
                    <h3 class="text-lg font-bold text-gray-800 mb-2">Judul Artikel Pertama</h3>
                    <p class="text-sm text-gray-600 mb-4">Ringkasan singkat artikel supaya pengunjung tertarik membaca
                        lebih
                        lanjut.</p>
                    <a href="#" class="text-green-700 font-semibold hover:underline">Baca Selengkapnya →</a>
                </div>

                <div class="bg-green-50 rounded-2xl shadow-md p-2 hover:shadow-lg transition">
                    <img src="assets/image/artikel.jpg" alt="Thumbnail" class="rounded-xl mb-4">
                    <h3 class="text-lg font-bold text-gray-800 mb-2">Judul Artikel Pertama</h3>
                    <p class="text-sm text-gray-600 mb-4">Ringkasan singkat artikel supaya pengunjung tertarik membaca
                        lebih
                        lanjut.</p>
                    <a href="#" class="text-green-700 font-semibold hover:underline">Baca Selengkapnya →</a>
                </div>
                <div class="bg-green-50 rounded-2xl shadow-md p-2 hover:shadow-lg transition">
                    <img src="assets/image/artikel.jpg" alt="Thumbnail" class="rounded-xl mb-4">
                    <h3 class="text-lg font-bold text-gray-800 mb-2">Judul Artikel Pertama</h3>
                    <p class="text-sm text-gray-600 mb-4">Ringkasan singkat artikel supaya pengunjung tertarik membaca
                        lebih
                        lanjut.</p>
                    <a href="#" class="text-green-700 font-semibold hover:underline">Baca Selengkapnya →</a>
                </div>
            </div>
        </div>
    </section>


    <!-- Kontak -->
    <section id="kontak" class="bg-white min-h-screen flex flex-col py-16 px-6">
        <!-- full lebar -->
        <div class="w-full py-10 ">
            <!-- konten dibatasi max-w-6xl dan di tengah -->
            <div class="max-w-6xl mx-auto">
                <h3 class="text-3xl text-center font-semibold text-green-800 mb-6">Hubungi Kami</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                    <!-- Maps -->
                    <div class="">
                        <div class="shadow-md overflow-hidden h-[300px]">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15853.04894070651!2d108.4974593!3d-7.6966004!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6591e6f0560bdf%3A0x7b3fd6b57d3ef1d0!2sPCNU%20Kabupaten%20Pangandaran!5e0!3m2!1sid!2sid!4v1694328888888"
                                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>

                        </div>
                    </div>

                    <!-- Info Kontak -->
                    <div class="flex flex-col gap-4">
                        <div class="flex gap-2">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-green-700">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                                </svg>
                            </div>
                            <p class="text-gray-700">Kantor PCNU Pangandaran, Jl. Raya Cibenda No. 120, RT 01 RW 12,
                                Dusun Karangsari, Desa
                                Cibenda, Kec. Parigi, Kab. Pangandaran, Jawa Barat 46393</p>
                        </div>
                        <div class="flex items-center gap-2">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-green-700">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                                </svg>
                            </div>
                            <p class="text-gray-700">pcipnuippnupangandaran@gmail.com</p>
                        </div>
                        <div class="flex items-center gap-2">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-green-700">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                                </svg>
                            </div>
                            <p class="text-gray-700">081321887357</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <!-- Footer -->


    <footer class="bg-green-50">
        <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
            <div class="md:flex md:justify-between">
                <div class="mb-6 md:mb-0">
                    <a href="#" class="flex items-center">
                        <span class="self-center text-2xl font-semibold whitespace-nowrap text-black">
                            Pelajar NU Pangandaran
                        </span>
                    </a>
                </div>
                <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-black uppercase">Tentang</h2>
                        <ul class="text-black font-medium">
                            <li class="mb-4"><a href="#" class="hover:underline">Profil</a></li>
                            <li><a href="#" class="hover:underline">Sejarah</a></li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-black uppercase">Program</h2>
                        <ul class="text-black font-medium">
                            <li class="mb-4"><a href="#" class="hover:underline">Kegiatan</a></li>
                            <li><a href="#" class="hover:underline">Artikel & Berita</a></li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-black uppercase">Ikuti Kami</h2>
                        <ul class="text-black font-medium">
                            <li class="mb-4"><a href="#" class="hover:underline">Instagram</a></li>
                            <li><a href="#" class="hover:underline">Facebook</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="my-6 border-gray-300 sm:mx-auto lg:my-8" />
            <div class="sm:flex sm:items-center sm:justify-between">
                <span class="text-sm text-black sm:text-center">
                    © 2023 Pelajar NU Pangandaran. All Rights Reserved.
                </span>
                <div class="flex mt-4 sm:justify-center sm:mt-0">
                    <!-- Facebook -->
                    <a href="#" class="text-green-600 hover:text-green-800 ms-5">
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                    {{-- instagra --}}
                    <a href="#" class="text-green-600 hover:text-green-800 ms-5">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    {{-- youtube --}}
                    <a href="#" class="text-green-600 hover:text-green-800 ms-5">
                        <i class="fa-brands fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </footer>



    <script>
        new Typed("#typed", {
            strings: [
                "Bersama Membangun Masa Depan",
                "Ayo Bergabung Bersama Pelajar NU Pangandaran",
                "Bersama Membangun Masa Depan",
                "Belajar & Berjuang"
            ],
            typeSpeed: 50,
            backSpeed: 30,
            startDelay: 500, // jeda 0.5 detik sebelum mulai
            loop: true
        });
    </script>
</body>

</html>
