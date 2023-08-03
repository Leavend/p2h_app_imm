<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function authLogin(Request $request)
    {
        $remember = $request->has('remember');

        if (Auth::attempt(['username' => $request->username, 'password' => $request->password], $remember)) {
            $user = Auth::user();
            if ($user->role == "admin") {
                return redirect()->route('admin.dashboard');
            } else if ($user->role == "user") {
                return redirect()->route('user.dashboard');
            }
        }

        return redirect()->back()->with('error', 'Kombinasi username/password salah');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function authRegister(Request $request)
    {
        $request->validate([
            'username' => 'required|string|min:6|unique:users',
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = new User;
        $user->username = trim($request->username);
        $user->name = trim($request->name);
        $user->email = trim($request->email);
        $user->password = Hash::make($request->password);
        $user->role = 'user';
        $user->save();

        return redirect()->route('login')->with('success', 'Berhasil membuat akun');
    }
}
