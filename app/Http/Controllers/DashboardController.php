<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function overview()
    {
        if (Auth::user()->role == "admin") {
            // $data['totalPendaftar'] = Pendaftaran::getTotalRegist(1);
            // $data['totalSiswa'] = User::getTotalStudent(2);
            // $data['totalAdmin'] = User::getTotalAdmin(1);
            return view('overview.list');
        }
    }
}
