<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Carbon\Carbon;
use Illuminate\Support\Str;
use App\Models\foto;

class Beranda extends Controller
{
    public function showUploadForm()
    {
        return view('admin.tampiladmin');
    }

    public function tampiladmin(Request $request)
    {
        $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $photo = $request->file('photo');
        $path = $photo->store('public/photos');

        // Simpan path file dan data relevan lainnya ke database jika diperlukan

        return redirect()->route('admin.showUploadForm')->with('success', 'Foto berhasil diupload!');
    }
    
}
    

