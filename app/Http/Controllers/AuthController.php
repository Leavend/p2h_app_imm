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
        $data = User::getUser();
        return view('user.list', compact('Title', 'data'));
    }

    public function addUser()
    {
        $Title = 'Tambah User - IMM - GA - P2H Unit';
        return view('user.add', compact('Title'));
    }

    public function storeUser(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:users',
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8'
        ]);

        $user = new User();
        $user->username = $request->input('username');
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->role = 'user';
        $user->save();

        return redirect()->route('user.list')->with('success', 'Penambahan data User Berhasil');
    }

    public function editUser($id)
    {
        $Title = 'Edit User - IMM - GA - P2H Unit';
        $user = User::find($id);
        if (!$user) {
            return redirect()->route('user.list')->with('error', 'Data User tidak ditemukan.');
        }
        return view('user.edit', compact('Title', 'user'));
    }

    public function updateUser(Request $request, $id)
    {
        $user = User::find($id);

        if (!$user) {
            return redirect()->route('user.list')->with('error', 'Data User tidak ditemukan.');
        }

        $request->validate([
            'username' => 'required|unique:users,username,' . $id,
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
        ]);

        $user->username = $request->input('username');
        $user->name = $request->input('name');
        $user->email = $request->input('email');

        $user->save();
        return redirect()->route('user.list')->with('success', 'Data User berhasil di Update');
    }

    public function deleteUser($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('user.list')->with('success', 'User berhasil dihapuskan');
    }
}
