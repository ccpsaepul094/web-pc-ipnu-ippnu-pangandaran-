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

    {{-- content --}}
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <x-footer />

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
