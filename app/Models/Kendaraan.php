<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;

class Kendaraan extends Model
{
    use HasFactory;
    // public $timestamps = false;
    protected $table = "kendaraans";
    protected $fillable = [
        'jenis_kendaraan',
        'type_kendaraan',
        'nomor_lambung',
        'nomor_polisi',
        'tanggal',
    ];
    protected $guarded = [];

    public function p2hs()
    {
        return $this->hasMany(P2h::class, 'kendaraan_id');
    }

    static public function getKendaraan()
    {
        $return = self::select('jenis_kendaraan', 'type_kendaraan', 'nomor_lambung', 'tanggal');
        if (!empty(Request::get('no_lambung'))) {
            $return = $return->where('nomor_lambung', 'like', '%' . Request::get('no_lambung') . '%');
        }
        $return = $return->orderBy('id', 'asc')->paginate(10, ['*'], 'kendaraan_page');

        return $return;
    }

    static public function getKendaraanAdmin()
    {
        $return = self::select('jenis_kendaraan', 'type_kendaraan', 'nomor_lambung', 'nomor_polisi', 'tanggal');
        if (!empty(Request::get('no_lambung'))) {
            $return = $return->where('nomor_lambung', 'like', '%' . Request::get('no_lambung') . '%');
        }
        $return = $return->orderBy('id', 'asc')->paginate(10, ['*'], 'kendaraan_page');

        return $return;
    }

    static public function getKendaraanAdminBus()
    {
        $return = self::select('jenis_kendaraan', 'type_kendaraan', 'nomor_lambung', 'nomor_polisi', 'tanggal');
        if (!empty(Request::get('no_lambung'))) {
            $return = $return->where('nomor_lambung', 'like', '%' . Request::get('no_lambung') . '%');
        }
        $return = $return->where('jenis_kendaraan', 'Bus')->orderBy('id', 'asc')->paginate(10, ['*'], 'kendaraan_bus_page');

        return $return;
    }

    static public function getKendaraanAdminLV()
    {
        $return = self::select('jenis_kendaraan', 'type_kendaraan', 'nomor_lambung', 'nomor_polisi', 'tanggal');
        if (!empty(Request::get('no_lambung'))) {
            $return = $return->where('nomor_lambung', 'like', '%' . Request::get('no_lambung') . '%');
        }
        $return = $return->where('jenis_kendaraan', 'LV')->orderBy('id', 'asc')->paginate(10, ['*'], 'kendaraan_lv_page');

        return $return;
    }
}
