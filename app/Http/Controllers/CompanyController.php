<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        $beritas = Berita::where('status', 'published')->orderBy('created_at', 'desc')->paginate(6);
        return view('company.home', compact('beritas'));
    }

    public function history()
    {
        return view('company.history');
    }
}
