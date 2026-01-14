@extends('layouts.layouts')

@section('content')
    <div class="max-w-4xl mx-auto px-6 py-8 md:px-0">

        <!-- Judul -->
        <h1 class="text-2xl md:text-4xl font-bold text-gray-900 mb-4">
            {{ $berita->judul }}
        </h1>

        <!-- Meta -->
        <div class="text-sm text-gray-500 mb-6">
            Dipublikasikan pada {{ $berita->created_at->format('d M Y') }}
        </div>

        <!-- Gambar -->
        <div class="mb-6">
            <img src="{{ url('/storage/beritas/' . $berita->gambar) }}" alt="{{ $berita->judul }}"
                class="w-full h-48 object-cover rounded" />
        </div>

        <!-- Isi Berita -->
        <article class="prose max-w-none prose-green">
            {!! $berita->isi !!}
        </article>

        <!-- Tombol kembali -->
        <div class="mt-10">
            <a href="{{ url()->previous() }}" class="inline-block text-green-700 font-semibold hover:underline">
                ← Kembali
            </a>
        </div>

    </div>
@endsection
