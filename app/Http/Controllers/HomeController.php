<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Cari pengguna berdasarkan email
        $user = User::where('email', $request->email)->first();

        // Jika pengguna tidak ditemukan atau password tidak sesuai, kembalikan pesan error
        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->with(['error' => 'Email atau password salah'], 401);
        }

        // Update waktu last login
        $user->last_login = now();
        $user->save();

        // Jika autentikasi berhasil, kembalikan data pengguna
        return redirect()->route('dashboard')->with('success','Login Berhasil !');
    }

    public function dashboard()
    {
        return view('welcome');
    }
}
