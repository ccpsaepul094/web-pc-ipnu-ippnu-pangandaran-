<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class BeritaController extends Controller
{
    public function index()
    {
        $beritas = Berita::all();
        $totalberita = $beritas->count();
        $kategoris = Kategori::all();

        return view('user.dashboarduser', compact('beritas', 'totalberita','kategoris'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:beritas,slug',
            'isi' => 'required|string',
            'kategori_id' => 'nullable|exists:kategoris,id',
            'penulis' => 'nullable|string|max:255',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'tanggal' => 'nullable|date',
            'status' => 'required|in:draft,published',
        ]);

        // Auto-generate slug kalau kosong
        if (empty($validated['slug'])) {
            $validated['slug'] = Str::slug($validated['judul']);
        }

        // Upload gambar jika ada
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/beritas', $filename);
            $validated['gambar'] = $filename;
        }

        // Simpan ke database
        Berita::create($validated);

        return redirect()->route('berita.index')->with('success', 'Artikel berhasil ditambahkan!');
    }
}
