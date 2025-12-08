<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;



class BeritaController extends Controller
{
    // menampilkan data berita di halaman company
    public function index()
    {
        $beritas = Berita::where('user_id', auth()->id())
            ->orderBy('created_at', 'desc')
            ->paginate(5);
        $totalberita = $beritas->count();
        $kategoris = Kategori::all();

        return view('user.dashboarduser', compact('beritas', 'totalberita', 'kategoris'));
    }

    //tambah data berita
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
            $filename = $file->hashName();
            $file->storeAs('public/beritas', $filename);
            $validated['gambar'] = $filename;
        }

        // ➕ Tambahkan user_id otomatis
        $validated['user_id'] = auth()->id();

        // Simpan ke database
        Berita::create($validated);

        return redirect()->route('berita.index')->with('success', 'Artikel berhasil ditambahkan!');
    }

    //tampilakn form edit berita
    
    //update perubahan

    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);

        // Hapus gambar juga jika ada
        if ($berita->gambar && file_exists(storage_path("app/public/beritas/" . $berita->gambar))) {
            unlink(storage_path("app/public/beritas/" . $berita->gambar));
        }

        $berita->delete();

        return redirect()->route('berita.index')->with('success', 'Artikel berhasil dihapus!');
    }
}
