<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    // login
    public function login(){
        return view('auth.login');
    }

    public function login_proses(Request $request){
        // untuk mengonfirmasi data yang ada didatabase
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
                // biar admin 
        $adminEmail = 'admingp@GPhotoadmin.com';
        $adminPassword = 'Wherever i go, i see beutiful pictures';

        if ($request->email === $adminEmail && $request->password === $adminPassword) {
            $admin = User::where('email', $adminEmail)->first();

            if (!$admin) {
                $admin = User::create([
                    'name' => 'Admin',
                    'email' => $adminEmail,
                    'password' => Hash::make($adminPassword),
                    'phone_number' => '1234567890',
                    'level' => 'admin'
                ]);
            }

            Auth::login($admin);
            return redirect()->route('admin.home');
        }

        $data = $request->only('email', 'password');
        // ini untuk hanya mengambil email dan password

        if (Auth::attempt( $data)) {
            // pilih kasih level
            $user = Auth::user();
            // biar kalo akun keluar dihitung mati/ tidak aktif
            if (!$user->active) {
                Auth::logout();
                return redirect()->route('login')->with('failed', 'Akun ini tidak aktif.');
            }
            // mengapa menggunakan "$user = Auth::user();"? Hal ini sangat berguna ketika Anda perlu menyimpan informasi
            // terkait pengguna yang melakukan suatu tindakan, seperti membuat atau memperbarui catatan dalam database.
            if ($user->level == 'admin') {
                // kalo level admin masuk ke tampilan admin
                return redirect()->route('admin.home');
            } else {
                // kalo level user masuk ke tampilan user
                return redirect()->route('home');
            }
        } else {
            // kalo email atau password salah
            return redirect()->route('login')->with('failed', 'Email atau password salah.');
        }
    }
    
            // register
    public function register(){
        return view('auth.register');
    }

    public function register_proses(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'phone_number' => 'required',
        ]);

        // Create a new user
        $user = User::create([
            'name' => $request->name,
            'level' => 'user',
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone_number' => $request->phone_number,
            'email_verified_at' => null,
            'active' => true,
        ]);
            return redirect('login')->with('success', 'Registration successful, please check your phone for verification.');
    }
    public function logout(Request $request) {
        Auth::logout();

        return redirect()->route('login');
    }
    // //ini seingetku gk penting, cuma buat uji coba kayaknya
    // public function welcome_home() {
    //     return view('home');
    // }
}