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

    public function indexPesanan(): View
    {
        $masters = Datacustomer::all();
        return view('admin.admin.pemesanan_data', compact('masters'));
    }

    public function indexForm(): View
    {
        return view('form');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_user' => 'required',
            'email' => 'required|email|unique:datacustomers,email',
            'kontak' => 'required',
            'alamat' => 'required',
            'pembayaran' => 'required',
            'tipe_layanan' => 'required',
            'tanggal' => 'required|date'
        ]);

        // Generate unique idpesanan
        $id_user = Str::uuid()->toString();

        $datacustomer = Datacustomer::create([
            'id_user' => $id_user, // Assign generated idpesanan
            'nama_user' => $request->nama_user,
            'email' => $request->email,
            'kontak' => $request->kontak,
            'alamat' => $request->alamat,
            'pembayaran' => $request->pembayaran,
            'tipe_layanan' => $request->tipe_layanan,
            'tanggal' => $request->tanggal,
            'created_at' => now(),
        ]);

        return redirect()->route('datacustomer.index')->with('success', 'Data Berhasil Ditambah!');
    }
}
