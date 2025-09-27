<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        $beritas = Berita::all();
        $totalberita = $beritas->count();

        return view('user.dashboarduser', compact('beritas','totalberita'));
    }

}
