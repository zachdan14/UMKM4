<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Admin;
use App\Models\Datacustomer;
use App\Models\Booking;

class AdmuserController extends Controller
{

    public function index():View{
        return view('admin/admin/tampil_admin');
    }

    public function tampildata(){
        $users = User::where('status_aktif','=','aktif')->get();
        return view('admin/admin/tampil_data',compact('users'));
    }

    public function histori():View{
        $users = User::where('status_aktif','=','hapus')->get();
        return view('admin/admin/histori_data',compact('users'));
    }



    // akun user
    public function createakun():View{
        return view('admin/admin/tambah_data_akun');
    } 

    public function saveakun(Request $request):RedirectResponse{
        $request->validate([
            'email' => 'required|unique:users',
            'name' => 'required',
            'level' => 'required',
            'password' => 'required',
            'phone_number' => 'required',
            'status_publish' => 'required'
        ]);

        $eml = Str::of($request->email)
            ->rtrim(); //buang spasi berlebih

        User::create([
            'email' => $eml,
            'level' => $request->level,
            'name' => $request->name,
            'password' => hash::make('$request->password'),
            'phone_number' => $request->phone_number,
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
        $users = User::where('id', $id)->firstorfail();
        return view('admin/admin/edit_data_akun', compact('users'));
    }

    public function updateakun(Request $request, $id): RedirectResponse{
        $request->validate([
            'email' => 'required',
            'name' => 'required',
            'password' => 'required',
            'phone_number' => 'required',
            'status_publish' => 'required'
        ]);

        $eml = Str::of($request->email)
            ->rtrim(); //buang spasi berlebih
        $users = User::where('id', $id)->firstorfail();

        $users->update([
            'id'=> $request->id,
            'email' => $eml,
            'name' => $request->name,
            'password' => hash::make('$request->password'),
            'phone_number' => $request->phone_number,
            'status_aktif' => $request->status_aktif,
            'status_publish' => $request->status_publish,
            'updated_by' => $request->updated_by,
            'updated_at' => NOW()
        ]);

        return redirect()->route('admin.tampildata')->with(
            ['success'=>'Data Berhasil Diubah!']);
    }


    public function softdeleteakun($id):View{
        $users = User::where('id', $id)->firstorfail();
        return view('admin/admin/softdelete_data_akun', compact('users'));
    }

    public function softdelete(Request $request, $id){
        $eml = Str::of($request->email)
        ->rtrim(); //buang spasi berlebih
        $users = User::where('id', $id)->firstorfail();

    $users->update([
        'id'=> $request->id,
        'email' => $eml,
        'name' => $request->name,
        'password' => hash::make('$request->password'),
        'phone_number' => $request->phone_number,
        'status_aktif' => $request->status_aktif,
        'status_publish' => $request->status_publish,
        'deleted_by' => $request->deleted_by,
        'deleted_at' => NOW()
    ]);

    return redirect()->route('admin.tampildata')->with(
        ['success'=>'Data Berhasil Disoftdelete!']);
    }

    public function balikakun($id):View{
        $users = User::where('id', $id)->firstorfail();
        return view('admin/admin/edit_histori_akun', compact('users'));
    }

    public function coveryakun(Request $request, $id){
        $eml = Str::of($request->email)
        ->rtrim(); //buang spasi berlebih
        $users = User::where('id', $id)->firstorfail();

    $users->update([
        'id'=> $request->id,
        'email' => $eml,
        'name' => $request->name,
        'password' => hash::make('$request->password'),
        'phone_number' => $request->phone_number,
        'status_aktif' => $request->status_aktif,
        'status_publish' => $request->status_publish,
        'updated_by' => $request->updated_by,
        'updated_at' => NOW()
    ]);

    return redirect()->route('admin.tampildata')->with(
        ['success'=>'Data Berhasil Kembali Aktif!']);
    }

    public function detailakun($id):View{
        $users = User::where('id', $id)->firstorfail();
        return view('admin/admin/detail_data_akun', compact('users'));
    }

    public function deleteakun($id) {
        $users = User::where('id', $id)->firstorfail();
        return view('admin/admin/hapus_data_akun', compact('users'));
    }

    public function delete($id) {
        $users = User::where('id', $id)->delete();
        return redirect()->route('admin.histori')->with(
            ['success'=>'Data Berhasil Dihapus!']);
        }

    
    // end akun user

    
}
