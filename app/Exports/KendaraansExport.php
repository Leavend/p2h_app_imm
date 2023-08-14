<?php

namespace App\Exports;

use App\Models\Kendaraan;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class KendaraansExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function headings(): array
    {
        return [
            'Jenis Kendaraan',
            'Type Kendaraan',
            'Nomor Lambung',
            'Nomor Polisi',
            'Tanggal Input',
        ];
    }
    public function collection()
    {
        return Kendaraan::select('jenis_kendaraan', 'type_kendaraan', 'nomor_lambung', 'nomor_polisi')->get();
    }
}
