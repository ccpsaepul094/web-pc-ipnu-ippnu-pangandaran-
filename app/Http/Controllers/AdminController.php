<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Berita;
use App\Models\Kategori;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {

        $totalSemuaUser = User::count();
        $totalAdmin = User::role('admin')->count();
        $totalUser = User::role('user')->count();
        // Logic for the admin dashboard
        return view('admin.admin', compact('totalSemuaUser', 'totalAdmin', 'totalUser'));
    }

    public function destroy($id)
    {
        // 1. Cari user berdasarkan ID, jika tidak ada akan muncul error 404
        $user = User::findOrFail($id);

        // 2. Keamanan: Jangan biarkan admin menghapus dirinya sendiri
        if (auth()->id() == $user->id) {
            return redirect()->back()->with('error', 'Gagal! Anda tidak bisa menghapus akun Anda sendiri.');
        }

        // 3. Keamanan Tambahan: Jangan biarkan admin menghapus admin lain (Opsional)
        if ($user->hasRole('admin')) {
            return redirect()->back()->with('error', 'User dengan level Admin tidak bisa dihapus sembarangan.');
        }

        // 4. Hapus User
        $user->delete();

        // 5. Kembali ke halaman manajemen user dengan pesan sukses
        return redirect()->back()->with('success', 'Rekan/Rekanita ' . $user->name . ' berhasil dihapus dari sistem.');
    }

    public function management()
    {
        $allUser = User::latest()->paginate(5);
        return view('admin.usermanagemen', compact('allUser'));
    }

    public function articlemanagement()
    {
        $beritas = Berita::orderBy('created_at', 'desc')
            ->paginate(5);
        $totalberita = $beritas->count();
        $kategoris = Kategori::all();

        return view('admin.articlemanagement', compact('beritas', 'totalberita', 'kategoris'));
    }
}
