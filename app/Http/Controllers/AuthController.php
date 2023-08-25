<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

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
        $Title = 'User';
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
            'username' => ['required', Rule::unique('users', 'username')],
            'name' => 'required|string',
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|min:8',
            'no_hp' => ['required', 'regex:/^08[0-9]{8,}$/'],
        ]);

        $user = new User();
        $user->username = trim($request->username);
        $user->name = trim($request->name);
        $user->email = trim($request->email);
        $user->password = Hash::make($request->password);
        $user->no_hp = trim($request->no_hp);
        $user->role = 'user';
        $user->tanggal = now('Asia/Makassar')->toDateString();
        $user->save();

        return redirect()->route('user.list')->with('success', "Penambahan data User $user->name Berhasil");
    }

    public function editUser($id)
    {
        $user = User::findOrFail($id);
        if (!empty($user)) {
            $Title = 'Edit User - ' . $user->name;
            return view('user.edit', compact('user', 'Title'));
        } else {
            abort(404);
        }
    }

    public function updateUser(Request $request, $id)
    {
        $request->validate([
            'username' => ['required', 'string', Rule::unique('users', 'username')->ignore($id)],
            'name' => 'required|string|max:255',
            'email' => ['required', 'email', Rule::unique('users', 'email')->ignore($id)],
            'no_hp' => ['nullable', 'string', 'regex:/^08[0-9]{8,}$/'],
        ]);

        $user = User::findOrFail($id);

        if (!$user) {
            return redirect()->route('user.list')->with('error', 'Data User tidak ditemukan.');
        }

        $user->fill([
            'username' => trim($request->username),
            'name' => trim($request->name),
            'email' => trim($request->email),
            'no_hp' => $request->filled('no_hp') ? trim($request->no_hp) : null,
        ]);

        $user->save();

        return redirect()->route('user.list')->with('success', "Data User $user->name berhasil diperbarui.");
    }

    public function deleteUser($id)
    {
        $user = User::findOrFail($id);
        $userName = $user->name;
        $user->delete();

        return redirect()->route('user.list')->with('success', "User $userName berhasil dihapuskan");
    }
}
