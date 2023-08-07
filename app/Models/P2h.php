<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        return $this->belongsTo(Kendaraan::class);
    }
}
