<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Carbon\Carbon;
use Illuminate\Support\Str;
use App\Models\Data;
use App\Models\Booking;

class AdmuserController extends Controller
{

    public function index():View{
        return view('admin/admin/tampil_admin');
    }

    public function tampildata(){
        $data = Data::where('status_aktif','=','aktif')->get();
        return view('admin/admin/tampil_data',compact('data'));
    }

    public function histori():View{
        $data = Data::where('status_aktif','=','hapus')->get();
        return view('admin/admin/histori_data',compact('data'));
    }



    // akun user
    public function createakun():View{
        return view('admin/admin/tambah_data_akun');
    } 

    public function saveakun(Request $request):RedirectResponse{
        $request->validate([
            'email' => 'required|unique:data',
            'nama_user' => 'required',
            'password' => 'required|unique:data',
            'status_publish' => 'required'
        ]);

        $eml = Str::of($request->email)
            ->rtrim(); //buang spasi berlebih

        Data::create([
            'email' => $eml,
            'nama_user' => $request->nama_user,
            'password' => $request->password,
            'status_aktif' => $request->status_aktif,
            'status_publish' => $request->status_publish,
            'created_by' => $request->created_by,
            'created_at' => NOW()
        ]);

        return redirect()->route('admin.tampildata')->with(
            ['success'=>'Data Berhasil Ditambah!']
        );
    }

    public function editakun($id):View{
        $data = Data::where('id', $id)->firstorfail();
        return view('admin/admin/edit_data_akun', compact('data'));
    }

    public function updateakun(Request $request, $id): RedirectResponse{
        $request->validate([
            'email' => 'required|unique:data',
            'nama_user' => 'required',
            'password' => 'required|unique:data',
            'status_publish' => 'required'
        ]);

        $eml = Str::of($request->email)
            ->rtrim(); //buang spasi berlebih
        $data = Data::where('id', $id)->firstorfail();

        $data->update([
            'id'=> $request->id,
            'email' => $eml,
            'nama_user' => $request->nama_user,
            'password' => $request->password,
            'status_aktif' => $request->status_aktif,
            'status_publish' => $request->status_publish,
            'updated_by' => $request->updated_by,
            'updated_at' => NOW()
        ]);

        return redirect()->route('admin.tampildata')->with(
            ['success'=>'Data Berhasil Diubah!']);
    }

    public function softdeleteakun($id):View{
        $data = Data::where('id', $id)->firstorfail();
        return view('admin/admin/softdelete_data_akun', compact('data'));
    }

    public function softdelete(Request $request, $id){
        $eml = Str::of($request->email)
        ->rtrim(); //buang spasi berlebih
        $data = Data::where('id', $id)->firstorfail();

    $data->update([
        'id'=> $request->id,
        'email' => $eml,
        'nama_user' => $request->nama_user,
        'password' => $request->password,
        'status_aktif' => $request->status_aktif,
        'status_publish' => $request->status_publish,
        'deleted_by' => $request->deleted_by,
        'deleted_at' => NOW()
    ]);

    return redirect()->route('admin.tampildata')->with(
        ['success'=>'Data Berhasil Disoftdelete!']);
    }

    public function balikakun($id):View{
        $data = Data::where('id', $id)->firstorfail();
        return view('admin/admin/edit_histori_akun', compact('data'));
    }

    public function coveryakun(Request $request, $id){
        $eml = Str::of($request->email)
        ->rtrim(); //buang spasi berlebih
        $data = Data::where('id', $id)->firstorfail();

    $data->update([
        'id'=> $request->id,
        'email' => $eml,
        'nama_user' => $request->nama_user,
        'password' => $request->password,
        'status_aktif' => $request->status_aktif,
        'status_publish' => $request->status_publish,
        'updated_by' => $request->updated_by,
        'updated_at' => NOW()
    ]);

    return redirect()->route('admin.tampildata')->with(
        ['success'=>'Data Berhasil Kembali Aktif!']);
    }

    public function detailakun($id):View{
        $data = Data::where('id', $id)->firstorfail();
        return view('admin/admin/detail_data_akun', compact('data'));
    }

    public function deleteakun($id) {
        $data = Data::where('id', $id)->firstorfail();
        return view('admin/admin/hapus_data_akun', compact('data'));
    }

    public function delete($id) {
        $data = Data::where('id', $id)->delete();
        return redirect()->route('admin.histori')->with(
            ['success'=>'Data Berhasil Dihapus!']);
        }

    
    // end akun user


    

    // akun admin
    


    // end akun admin

    public function admin(){
        $admins = Admin::get();
        return view('admin/admin/pemesanan_data',compact('data'));
    }

    // pemesanan
    public function pemesanan(){
        $data = Data::get();
        return view('admin/admin/pemesanan_data',compact('data'));
    }

    

}
