<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Datacustomer;
use Illuminate\View\View;
use Illuminate\Support\Str;

class DatacustomerController extends Controller
{
    public function index(): View
    {
        $masters = Datacustomer::all();
        return view('admin.database.datacustomer', compact('masters'));
    }

    public function indexForm(): View
    {
        return view('form');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'user_nama' => 'required',
            'email' => 'required|email|unique:datacustomer,email',
            'kontak' => 'required',
            'alamat' => 'required',
            'pembayaran' => 'required',
            'tipe_layanan' => 'required',
            'tanggal' => 'required',
            'jam_booking' => 'required',
        ]);

        // Generate unique idpesanan
        $idpesanan = Str::uuid()->toString();

        $datacustomer = Datacustomer::create([
            'idpesanan' => $idpesanan, // Assign generated idpesanan
            'nama_user' => $request->nama_user,
            'email' => $request->email,
            'kontak' => $request->kontak,
            'alamat' => $request->alamat,
            'pembayaran' => $request->pembayaran,
            'tipe_layanan' => $request->tipr_layanan,
            'tanggal' => $request->tanggal,
            'jam_booking' => $request->jam_booking,
            'created_at' => now(),
        ]);

        return redirect()->route('datacustomer.index')->with(['success'=> 'Data Berhasil Ditambah!']);
    }
}
