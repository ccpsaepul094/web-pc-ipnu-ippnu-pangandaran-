<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;
use App\Models\Berita;

class CompanyController extends Controller
{
    public function index()
    {
        $agent = new Agent();

        // Mobile = 3, Desktop = 6
        $perPage = $agent->isMobile() ? 3 : 6;

        $beritas = Berita::where('status', 'published')
            ->orderBy('created_at', 'desc')
            ->paginate($perPage);

        return view('company.home', compact('beritas'));
    }

    public function history()
    {
        return view('company.history');
    }
}
