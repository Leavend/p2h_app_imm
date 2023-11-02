<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Models\Kendaraan;
use App\Models\P2h;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        $schedule->call(function () {
            $kendaraans = Kendaraan::all();

            foreach ($kendaraans as $kendaraan) {
                $p2h = new P2h([
                    'kendaraan_id' => $kendaraan->id,
                    'status' => 'belum diperiksa',
                    'tanggal' => now('Asia/Makassar')->format('Y-m-d'),
                    'jam' => now('Asia/Makassar')->format('H:i:s'),
                ]);
                $p2h->save();
            }
        })->dailyAt('01:00')->timezone('Asia/Makassar');
    }
}
