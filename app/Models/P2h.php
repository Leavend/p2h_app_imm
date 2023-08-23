<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;

class P2h extends Model
{
    use HasFactory;
    protected $table = 'p2hs';
    protected $fillable = [
        'kendaraan_id',
        'tanggal',
        'jam',
        'nama_pemeriksa',
        'nik',
        'departemen',
        'no_hp',
        'oli_mesin',
        'oli_kopling',
        'air_radiator',
        'oli_stering',
        'rem_depanBelakang',
        'rem_tangan',
        'lampu_jauhDekat',
        'lampu_reting_rL',
        'lampu_belakang',
        'lampu_rem',
        'lampu_mundur',
        'lampu_rotari',
        'roda_depanBelakang',
        'roda_cadangan',
        'body_fender_rL',
        'body_pintu_rL',
        'body_atap_kabin',
        'body_bendera',
        'body_lantai_kabin',
        'body_karet_mounting',
        'body_sepring',
        'tools_dongkrak_aksesoris',
        'tools_kunci_roda',
        'tools_segitiga_pengaman',
        'tools_ganjal_ban',
        'others_sabuk_pengaman',
        'others_spidometer',
        'others_klakson',
        'others_spion',
        'others_wiper',
        'others_alarm_mundur',
        'others_radio_komun',
        'others_knalpot',
        'others_no_lambung',
        'others_apar',
        'others_kursi_duduk',
        'surat_p3k',
        'surat_stnp_kir',
        'keterangan',
        'status',
    ];

    public $timestamps = false;

    public function kendaraan()
    {
        return $this->belongsTo(Kendaraan::class, 'kendaraan_id');
    }

    public static $enumColumns = [
        'oli_mesin', 'oli_kopling', 'air_radiator', 'oli_stering',
        'rem_depanBelakang', 'rem_tangan', 'lampu_jauhDekat', 'lampu_reting_rL',
        'lampu_belakang', 'lampu_rem', 'lampu_mundur', 'lampu_rotari',
        'roda_depanBelakang', 'roda_cadangan', 'body_fender_rL', 'body_pintu_rL',
        'body_atap_kabin', 'body_bendera', 'body_lantai_kabin', 'body_karet_mounting',
        'body_sepring', 'tools_dongkrak_aksesoris', 'tools_kunci_roda', 'tools_segitiga_pengaman',
        'tools_ganjal_ban', 'others_sabuk_pengaman', 'others_spidometer', 'others_klakson',
        'others_spion', 'others_wiper', 'others_alarm_mundur', 'others_radio_komun',
        'others_knalpot', 'others_no_lambung', 'others_apar', 'others_kursi_duduk',
        'surat_p3k', 'surat_stnp_kir'
    ];

    static public function getp2h()
    {
        $return = self::select('nama_pemeriksa', 'keterangan', 'status', 'tanggal', 'kendaraan_id'); // Ganti kolom yang diinginkan
        if (!empty(Request::get('date'))) {
            $return = $return->whereDate('tanggal', '=', Request::get('date'));
        }
        $return = $return->orderBy('tanggal', 'desc')->paginate(10, ['*'], 'p2h_page');

        return $return;
    }

    static public function getp2hadmin()
    {
        $return = self::select('p2hs.*'); // Ganti kolom yang diinginkan

        if (!empty(request()->input('date'))) {
            $return = $return->whereDate('tanggal', '=', request()->input('date'));
        }

        if (!empty(request()->input('no_lambung'))) {
            $return = $return->whereHas('kendaraan', function ($query) {
                $query->where('nomor_lambung', 'like', '%' . request()->input('no_lambung') . '%');
            });
        }

        $return = $return->orderBy('tanggal', 'desc')->paginate(10, ['*'], 'p2h_page');

        return $return;
    }

    static public function getp2hdaily()
    {
        $return = self::select('p2hs.*');
        if (!empty(request()->input('no_lambung'))) {
            $return = $return->whereHas('kendaraan', function ($query) {
                $query->where('nomor_lambung', 'like', '%' . request()->input('no_lambung') . '%');
            });
        }
        $return = $return->whereDate('tanggal', Carbon::today('Asia/Makassar'))->where('status', 'belum diperiksa')->paginate(10, ['*'], 'p2h_page');

        return $return;
    }
}
