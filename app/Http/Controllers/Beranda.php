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
    public function tampiladmin(){
        $fotos = foto::get();
        return view('admin/admin/tampil_admin',compact('fotos'));
        
    }
    
}
