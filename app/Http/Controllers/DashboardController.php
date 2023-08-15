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
            $today = now()->format('Y-m-d');
            $startOfWeek = now()->startOfWeek()->format('Y-m-d');
            $startOfMonth = now()->startOfMonth()->format('Y-m-d');

            $TotalUser = User::count();
            $TotalUserToday = User::whereDate('created_at', $today)->count();
            $TotalUserWeek = User::whereDate('created_at', '>=', $startOfWeek)->count();
            $TotalUserMonth = User::whereDate('created_at', '>=', $startOfMonth)->count();

            $TotalKendaraan = Kendaraan::count();
            $TotalKendaraanToday = Kendaraan::whereDate('created_at', $today)->count();
            $TotalKendaraanWeek = Kendaraan::whereDate('created_at', '>=', $startOfWeek)->count();
            $TotalKendaraanMonth = Kendaraan::whereDate('created_at', '>=', $startOfMonth)->count();

            $TotalP2h = P2h::count();
            $TotalP2hBelum = P2h::where('status', 'belum diperiksa')->count();
            $TotalP2hMenunggu = P2h::where('status', 'menunggu verifikasi')->count();
            $TotalP2hTerverif = P2h::where('status', 'terverifikasi')->count();
            $TotalP2hToday = P2h::whereDate('tanggal', $today)->count();
            $TotalP2hTodayBelum = P2h::whereDate('tanggal', $today)->where('status', 'belum diperiksa')->count();
            $TotalP2hTodayMenunggu = P2h::whereDate('tanggal', $today)->where('status', 'menunggu verifikasi')->count();
            $TotalP2hTodayTerverif = P2h::whereDate('tanggal', $today)->where('status', 'terverifikasi')->count();
            $TotalP2hWeek = P2h::whereDate('tanggal', '>=', $startOfWeek)->count();
            $TotalP2hWeekBelum = P2h::whereDate('tanggal', $today)->where('status', 'belum diperiksa')->count();
            $TotalP2hWeekMenunggu = P2h::whereDate('tanggal', $today)->where('status', 'menunggu verifikasi')->count();
            $TotalP2hWeekTerverif = P2h::whereDate('tanggal', $today)->where('status', 'terverifikasi')->count();
            $TotalP2hMonth = P2h::whereDate('tanggal', '>=', $startOfMonth)->count();
            $TotalP2hMonthBelum = P2h::whereDate('tanggal', $today)->where('status', 'belum diperiksa')->count();
            $TotalP2hMonthMenunggu = P2h::whereDate('tanggal', $today)->where('status', 'menunggu verifikasi')->count();
            $TotalP2hMonthTerverif = P2h::whereDate('tanggal', $today)->where('status', 'terverifikasi')->count();

            return view('overview.list', compact(
                'Title',
                'TotalUser',
                'TotalUserToday',
                'TotalUserWeek',
                'TotalUserMonth',
                'TotalKendaraan',
                'TotalKendaraanToday',
                'TotalKendaraanWeek',
                'TotalKendaraanMonth',
                'TotalP2h',
                'TotalP2hBelum',
                'TotalP2hMenunggu',
                'TotalP2hTerverif',
                'TotalP2hToday',
                'TotalP2hTodayBelum',
                'TotalP2hTodayMenunggu',
                'TotalP2hTodayTerverif',
                'TotalP2hWeek',
                'TotalP2hWeekBelum',
                'TotalP2hWeekMenunggu',
                'TotalP2hWeekTerverif',
                'TotalP2hMonth',
                'TotalP2hMonthBelum',
                'TotalP2hMonthMenunggu',
                'TotalP2hMonthTerverif'
            ));
        }
    }
}
