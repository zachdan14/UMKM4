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

    public function pemesanan(){
        $datacustomers = Datacustomer::where('status_pemesanan','=','Message')->get();
        return view('admin/admin/pemesanan_data',compact('datacustomers'));
    }

    public function pemesananacc():View{
        $datacustomers = Datacustomer::where('status_pemesanan','=','Acc')->get();
        return view('admin/admin/pemesanan_data_acc',compact('datacustomers'));
    }

    public function pemesananprocess():View{
        $datacustomers = Datacustomer::where('status_pemesanan','=','Process')->get();
        return view('admin/admin/pemesanan_data_process',compact('datacustomers'));
    }
    
    public function pemesanandone():View{
        $datacustomers = Datacustomer::where('status_pemesanan','=','Process')->get();
        return view('admin/admin/pemesanan_data_done',compact('datacustomers'));
    }

    public function createpesanan():View{
        return view('admin/admin/tambah_pesanan');
    } 

    public function savepesanan(Request $request){
        $request->validate([
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
                ]);

        return redirect()->route('admin.tampildata')->with(
            ['success'=>'Data Berhasil Ditambah!']
        );
    }


    public function indexForm(): View
    {
        return view('form');
    }

    public function indexPemesanan(): View
    {
        return view('admin.admin.pemesanan_data');
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

        // Generate unique idpesanan\
        $id_user = Str::uuid()->toString();

        $datacustomers = Datacustomer::create([
            'id_user' => $id_user, // Assign generated idpesanan
            'nama_user' => $request->nama_user,
            'email' => $request->email,
            'kontak' => $request->kontak,
            'alamat' => $request->alamat,
            'pembayaran' => $request->pembayaran,
            'tipe_layanan' => $request->tipe_layanan,
            'tanggal' => $request->tanggal,
        ]);

        return redirect()->route('home')->with('success', 'Data Berhasil Ditambah!');
    }
}
