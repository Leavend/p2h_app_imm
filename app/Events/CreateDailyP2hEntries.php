<?php

namespace App\Events;

use App\Models\Kendaraan;
use App\Models\P2h;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class CreateDailyP2hEntries
{
    use Dispatchable, SerializesModels;

    public function __construct()
    {
        //
    }

    public function handle()
    {
        $kendaraans = Kendaraan::all();

        foreach ($kendaraans as $kendaraan) {
            $p2h = new P2h([
                'kendaraan_id' => $kendaraan->id,
                'status' => 'menunggu verifikasi',
                'tanggal' => now('Asia/Makassar')->format('Y-m-d'),
                'jam' => now('Asia/Makassar')->format('H:i:s'),
            ]);
            $p2h->save();
        }
    }
}
