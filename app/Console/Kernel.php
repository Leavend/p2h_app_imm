<?php

namespace App\Console;

use App\Events\CreateDailyP2hEntries;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        // Jalankan event CreateDailyP2hEntries setiap hari pada pukul 01:00
        $schedule->event(new CreateDailyP2hEntries())->dailyAt('01:00')->timezone('Asia/Makassar');
    }


    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
