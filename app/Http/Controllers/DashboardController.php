<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use App\Models\P2h;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function overview()
    {
        $Title = 'Overview - GA - P2H Unit';
        if (Auth::user()->role == "admin") {
            $TotalUser = User::getTotalUser();
            $TotalKendaraan = Kendaraan::count();
            $TotalP2h = P2h::count();
            return view('overview.list', compact(
                'Title',
                'TotalUser',
                'TotalKendaraan',
                'TotalP2h',
            ));
        }
    }
}
