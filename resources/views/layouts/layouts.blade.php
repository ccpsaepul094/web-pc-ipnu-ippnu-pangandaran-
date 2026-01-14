<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Pc Ipnu Ippnu Pangandaran </title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">

    {{-- apline js --}}
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

    {{-- AOS --}}
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link rel="icon" type="image/png" href="/assets/image/ipnuippnu.png" sizes="32x32">
    <style>
        html,
        body {
            font-family: 'Poppins', sans-serif;
            scroll-behavior: smooth;
            max-width: 100%;
            overflow-x: hidden;
            position: relative;
            margin: 0;
            padding: 0;
        }

        /* Mencegah AOS merusak layout mobile */
        [data-aos] {
            pointer-events: none;
        }

        .aos-animate {
            pointer-events: auto;
        }

        /* Pastikan section benar-benar mengunci kontennya */
        section {
            width: 100%;
            overflow-x: hidden;
        }
    </style>
</head>

<body class="bg-white text-gray-800 overflow-x-hidden pt-[64px] md:pt-[72px]">

    <x-header />

    {{-- content --}}
    <main>
        @yield('content')
    </main>

    <x-footer />

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

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

        document.addEventListener("DOMContentLoaded", () => {
            const items = document.querySelectorAll('.fade-item');
            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate-fade-in-up');
                        entry.target.classList.remove('opacity-0', 'translate-y-10');
                    }
                });
            }, {
                threshold: 0.1
            });

            items.forEach(item => observer.observe(item));
        });
    </script>
</body>

</html>
