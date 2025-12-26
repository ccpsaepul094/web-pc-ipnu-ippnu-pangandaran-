<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

<header class="bg-white shadow-lg fixed top-0 left-0 right-0 z-50 border-b border-gray-100" x-data="{ open: false, dropdownOpen: false }">
    <div class="container max-w-6xl mx-auto flex justify-between items-center py-4 px-6 md:px-0">
        <div class="flex items-center space-x-3">
            {{-- Jika Anda memiliki logo, aktifkan baris di bawah: --}}
            {{-- <img src="assets/image/ipnuippnu.png" alt="Logo IPNU IPPNU" class="h-10 w-10"> --}}
            <h1 class="text-xl font-extrabold text-gray-900">
                Pelajar<span class="text-green-600">NU</span>Pangandaran
            </h1>
        </div>

        <nav class="hidden md:flex space-x-8 items-center font-medium">
            <a href="{{ route('company.home') }}#home"
                class="text-gray-700 hover:text-green-600 transition duration-200">Home</a>

            <div x-data="{ dropdownOpen: false }" @mouseenter="dropdownOpen = true" @mouseleave="dropdownOpen = false"
                class="relative group list-none">
                <a href="javascript:void(0)"
                    class="text-gray-700 hover:text-green-600 flex items-center transition duration-200">
                    Tentang Kami
                    <svg :class="{ 'rotate-180': dropdownOpen }" class="w-4 h-4 ml-1 transition-transform duration-300"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </a>

                <div x-show="dropdownOpen" x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 transform -translate-y-2"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    x-transition:leave="transition ease-in duration-150"
                    x-transition:leave-start="opacity-100 transform translate-y-0"
                    x-transition:leave-end="opacity-0 transform -translate-y-2"
                    class="absolute left-0 mt-3 w-64 bg-white rounded-xl shadow-2xl border border-gray-200 py-2 z-50">

                    <a href="{{ route('company.home') }}#tentangKami"
                        class="block px-5 py-3 text-gray-700 hover:bg-green-50 hover:text-green-700 transition duration-150">
                        Profile Singkat
                    </a>
                    <a href="{{ route('company.history') }}"
                        class="block px-5 py-3 text-gray-700 hover:bg-green-50 hover:text-green-700 transition duration-150">
                        Sejarah Berdiri
                    </a>
                    <a href="{{ route('company.home') }}#visi"
                        class="block px-5 py-3 text-gray-700 hover:bg-green-50 hover:text-green-700 transition duration-150">
                        Visi Misi
                    </a>
                    <a href="#visi"
                        class="block px-5 py-3 text-gray-700 hover:bg-green-50 hover:text-green-700 transition duration-150">
                        Struktur Organisasi
                    </a>
                    <a href="#misi"
                        class="block px-5 py-3 text-gray-700 hover:bg-green-50 hover:text-green-700 transition duration-150">
                        Kegiatan & Program
                    </a>
                </div>
            </div>

            <a href="{{ route('company.home') }}#blog"
                class="text-gray-700 hover:text-green-600 transition duration-200">Blog</a>
            <a href="{{ route('company.home') }}#kontak"
                class="text-gray-700 hover:text-green-600 transition duration-200">Kontak</a>

            <a href="{{ route('login') }}"
                class="text-white bg-green-600 px-5 py-2 rounded-lg font-semibold shadow-md hover:bg-green-700 transition duration-300 transform hover:scale-105">
                Login
            </a>
        </nav>


        <button @click="open = !open"
            class="md:hidden p-2 rounded-md text-gray-700 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-green-500 transition">
            <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    <nav x-show="open" x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 -translate-y-4" x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-4"
        class="md:hidden bg-white shadow-xl px-6 pb-4 pt-2 border-t border-gray-100 absolute w-full top-full">

        <a href="{{ route('company.home') }}#home" @click="open = false"
            class="block px-3 py-3 text-gray-700 hover:bg-green-50 hover:text-green-700 rounded-lg transition duration-150 font-medium">Home</a>

        <div x-data="{ subOpen: false }">
            <a @click="subOpen = !subOpen"
                class="flex justify-between items-center px-3 py-3 text-gray-700 hover:bg-green-50 hover:text-green-700 rounded-lg transition duration-150 font-medium cursor-pointer">
                Tentang Kami
                <svg :class="{ 'rotate-180': subOpen }" class="w-4 h-4 transition-transform duration-300"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </a>

            <div x-show="subOpen" x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="opacity-0 max-h-0" x-transition:enter-end="opacity-100 max-h-screen"
                x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 max-h-screen"
                x-transition:leave-end="opacity-0 max-h-0"
                class="ml-4 border-l border-green-300 pl-3 overflow-hidden space-y-1">

                <a href="{{ route('company.home') }}#tentangKami" @click="open = false; subOpen = false"
                    class="block px-3 py-2 text-sm text-gray-600 hover:bg-green-50 hover:text-green-700 rounded-lg transition">Profile
                    Singkat</a>
                <a href="{{ route('company.history') }}" @click="open = false; subOpen = false"
                    class="block px-3 py-2 text-sm text-gray-600 hover:bg-green-50 hover:text-green-700 rounded-lg transition">Sejarah
                    Berdiri</a>
                <a href="{{ route('company.home') }}#visi" @click="open = false; subOpen = false"
                    class="block px-3 py-2 text-sm text-gray-600 hover:bg-green-50 hover:text-green-700 rounded-lg transition">Visi
                    Misi</a>
                <a href="#visi" @click="open = false; subOpen = false"
                    class="block px-3 py-2 text-sm text-gray-600 hover:bg-green-50 hover:text-green-700 rounded-lg transition">Struktur
                    Organisasi</a>
                <a href="#misi" @click="open = false; subOpen = false"
                    class="block px-3 py-2 text-sm text-gray-600 hover:bg-green-50 hover:text-green-700 rounded-lg transition">Kegiatan</a>
            </div>
        </div>

        <a href="{{ route('company.home') }}#blog" @click="open = false"
            class="block px-3 py-3 text-gray-700 hover:bg-green-50 hover:text-green-700 rounded-lg transition duration-150 font-medium">Blog</a>
        <a href="{{ route('company.home') }}#kontak" @click="open = false"
            class="block px-3 py-3 text-gray-700 hover:bg-green-50 hover:text-green-700 rounded-lg transition duration-150 font-medium">Kontak</a>

        <div class="pt-4 px-3">
            <a href="{{ route('login') }}"
                class="block text-center text-white bg-green-600 px-5 py-2.5 rounded-lg font-semibold shadow-md hover:bg-green-700 transition duration-300">
                Login Anggota
            </a>
        </div>
    </nav>
</header>
