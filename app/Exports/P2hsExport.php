<?php

namespace App\Exports;

use App\Models\P2h;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class P2hsExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function headings(): array
    {
        return [
            'jenis_kendaraan',
            'type_kendaraan',
            'nomor_lambung',
            'nomor_polisi',
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
    }

    public function collection()
    {
        return P2h::with('kendaraan')
            ->select(
                'kendaraans.jenis_kendaraan',
                'kendaraans.type_kendaraan',
                'kendaraans.nomor_lambung',
                'kendaraans.nomor_polisi',
                'p2hs.tanggal',
                'p2hs.jam',
                'p2hs.nama_pemeriksa',
                'p2hs.nik',
                'p2hs.departemen',
                'p2hs.no_hp',
                'p2hs.oli_mesin',
                'p2hs.oli_kopling',
                'p2hs.air_radiator',
                'p2hs.oli_stering',
                'p2hs.rem_depanBelakang',
                'p2hs.rem_tangan',
                'p2hs.lampu_jauhDekat',
                'p2hs.lampu_reting_rL',
                'p2hs.lampu_belakang',
                'p2hs.lampu_rem',
                'p2hs.lampu_mundur',
                'p2hs.lampu_rotari',
                'p2hs.roda_depanBelakang',
                'p2hs.roda_cadangan',
                'p2hs.body_fender_rL',
                'p2hs.body_pintu_rL',
                'p2hs.body_atap_kabin',
                'p2hs.body_bendera',
                'p2hs.body_lantai_kabin',
                'p2hs.body_karet_mounting',
                'p2hs.body_sepring',
                'p2hs.tools_dongkrak_aksesoris',
                'p2hs.tools_kunci_roda',
                'p2hs.tools_segitiga_pengaman',
                'p2hs.tools_ganjal_ban',
                'p2hs.others_sabuk_pengaman',
                'p2hs.others_spidometer',
                'p2hs.others_klakson',
                'p2hs.others_spion',
                'p2hs.others_wiper',
                'p2hs.others_alarm_mundur',
                'p2hs.others_radio_komun',
                'p2hs.others_knalpot',
                'p2hs.others_no_lambung',
                'p2hs.others_apar',
                'p2hs.others_kursi_duduk',
                'p2hs.surat_p3k',
                'p2hs.surat_stnp_kir',
                'p2hs.keterangan',
                'p2hs.status',
            )
            ->leftJoin('kendaraans', 'p2hs.kendaraan_id', '=', 'kendaraans.id')
            ->orderBy('p2hs.tanggal', 'desc')
            ->get();
    }
}
