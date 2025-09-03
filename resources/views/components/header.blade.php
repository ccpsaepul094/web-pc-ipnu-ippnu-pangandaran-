<!-- Tambah Alpine.js dulu (taruh di <head>) -->
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

<header class="bg-white shadow-md sticky top-0 z-50" x-data="{ open: false }">
    <div class="container max-w-6xl mx-auto flex justify-between items-center py-4 px-4">
        <!-- Logo -->
        <div class="flex items-center space-x-3">
            <img src="assets/image/ipnuippnu.png" alt="" class="h-10 w-10">
            <h1 class="text-xl font-bold text-black">pc ipnu ippnu pangandaran</h1>
        </div>


        <!-- Menu besar (desktop) -->
        <nav class="hidden md:flex space-x-6">
            <a href="#home" class="text-gray-700 hover:text-green-600">Home</a>
            <a href="#visi" class="text-gray-700 hover:text-green-600">Visi misi</a>
            <a href="#tentangKami" class="text-gray-700 hover:text-green-600">Tentang Kami</a>
            <a href="#blog" class="text-gray-700 hover:text-green-600">Blog</a>
            <a href="#kontak" class="text-gray-700 hover:text-green-600">kontak</a>
        </nav>

        <!-- Tombol hamburger (mobile) -->
        <button @click="open = !open" class="md:hidden text-gray-700 focus:outline-none">
            <!-- Icon Hamburger -->
            <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <!-- Icon Close -->
            <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    <!-- Dropdown menu (mobile) -->
    <nav x-show="open" class="md:hidden bg-white shadow-md px-4 py-2 space-y-2">
        <a href="#home" class="block text-gray-700 hover:text-green-600">Home</a>
        <a href="#visi" class="block text-gray-700 hover:text-green-600">Visi misi</a>
        <a href="#tentangKami" class="block text-gray-700 hover:text-green-600">Tentang Kami</a>
        <a href="#blog" class="block text-gray-700 hover:text-green-600">Blog</a>
        <a href="#kontak" class="block text-gray-700 hover:text-green-600">kontak</a>
    </nav>
</header>
