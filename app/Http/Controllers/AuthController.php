<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        $Title = 'Login - IMM - GA - P2H Unit';
        return view('auth.login', compact('Title'));
    }

    public function authLogin(Request $request)
    {
        $remember = $request->has('remember');

        if (Auth::attempt(['username' => $request->username, 'password' => $request->password], $remember)) {
            $user = Auth::user();
            if ($user->role == "admin") {
                return redirect()->route('overview.list');
            } else if ($user->role == "user") {
                return redirect()->route('p2h.list');
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

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }

    public function listAdmin()
    {
        $Title = 'Admin - IMM - GA - P2H Unit';
        $data = User::getAdmin();
        return view('admin.list', compact('Title', 'data'));
    }

    public function listUser()
    {
        $Title = 'User - IMM - GA - P2H Unit';
        $User = User::getUser();
        return view('user.list', compact('Title', 'User'));
    }

    public function export()
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }

    public function import()
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }

    public function addUser()
    {
        $Title = 'Tambah User - IMM - GA - P2H Unit';
        return view('user.add', compact('Title'));
    }

    public function storeUser(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:users,username',
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
            'no_hp' => ['required', 'regex:/^\d{10,14}$/'],
        ]);

        $user = new User();
        $user->username = trim($request->username);
        $user->name = trim($request->name);
        $user->email = trim($request->email);
        $user->password = Hash::make($request->password);
        $user->no_hp = trim($request->no_hp);
        $user->role = 'user';
        $user->tanggal = now('Asia/Makassar')->format('Y-m-d');
        $user->save();

        return redirect()->route('user.list')->with('success', 'Penambahan data User Berhasil');
    }

    public function editUser(Request $request)
    {
        $user = User::findOrFail($request->id);
        if (!$user) {
            return response()->json(['error' => 'Data User tidak ditemukan.'], 404);
        }
        return response()->json($user);
    }

    public function updateUser(Request $request)
    {
        $user = User::findOrFail($request->id);
        if (!$user) {
            return redirect()->route('user.list')->with('error', 'Data User tidak ditemukan.');
        }

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        // Update field lainnya sesuai kebutuhan

        $user->save();

        return redirect()->route('user.list')->with('success', 'Data User berhasil diperbarui.');
    }


    public function deleteUser($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('user.list')->with('success', 'User berhasil dihapuskan');
    }
}
