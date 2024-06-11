<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Datacustomer;
use Illuminate\View\View;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class HomeController extends Controller
{
    public function index()
    {
        // Mengambil data pemesanan pengguna saat ini
        $user = Auth::user();
        $datacustomers = Datacustomer::where('nama_user', $user->name)->get(); 

        // Mengirim data pemesanan ke halaman beranda
        return view('dashboard.index', compact('datacustomers'));
    }
}
