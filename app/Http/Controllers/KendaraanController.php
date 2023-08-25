<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use Illuminate\Http\Request;
use App\Exports\KendaraansExport;
use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Facades\Excel;

class KendaraanController extends Controller
{
    public function show()
    {
        $Title = 'Kendaraan';
        $Kendaraan = Kendaraan::getKendaraanAdmin();
        $Bus = Kendaraan::getKendaraanAdminBus();
        $LV = Kendaraan::getKendaraanAdminLV();
        return view('kendaraan.list', compact('Kendaraan', 'Bus', 'LV', 'Title'));
    }

    public function add()
    {
        $Title = 'Tambah Kendaraan';
        return view('kendaraan.add', compact('Title'));
    }

    public function save(Request $request)
    {
        $request->validate([
            'jenis_kendaraan' => 'required',
            'type_kendaraan' => 'required',
            'nomor_lambung' => 'required|regex:/^[A-Za-z][A-Za-z0-9_]*$/|unique:kendaraans,nomor_lambung',
            'nomor_polisi' => 'required|regex:/^[A-Za-z][A-Za-z0-9_]*$/|unique:kendaraans,nomor_polisi',
        ]);

        Kendaraan::create([
            'jenis_kendaraan' => trim($request->jenis_kendaraan),
            'type_kendaraan' => trim($request->type_kendaraan),
            'nomor_lambung' => trim($request->nomor_lambung),
            'nomor_polisi' => trim($request->nomor_polisi),
            'tanggal' => now('Asia/Makassar')->toDateString(),
        ]);

        $nomorLambung = trim($request->nomor_lambung);

        return redirect()->route('kendaraan.list')->with('success', "Kendaraan dengan nomor lambung $nomorLambung berhasil ditambahkan.");
    }

    public function edit($id)
    {
        $kendaraan = Kendaraan::find($id);
        $nomor_lambung = $kendaraan->nomor_lambung;
        $Title = 'Edit Kendaraan - ' . $nomor_lambung;

        if (!$kendaraan) {
            return redirect()->route('kendaraan.list')->with('error', "Data Kendaraan $nomor_lambung tidak ditemukan.");
        }
        return view('kendaraan.edit', compact('Title', 'kendaraan'));
    }

    public function update(Request $request, $id)
    {
        $kendaraan = Kendaraan::findOrFail($id);

        $request->validate([
            'jenis_kendaraan' => 'required',
            'type_kendaraan' => 'required',
            'nomor_lambung' => [
                'required',
                'regex:/^[A-Za-z][A-Za-z0-9_]*$/',
                Rule::unique('kendaraans', 'nomor_lambung')->ignore($id),
            ],
            'nomor_polisi' => [
                'required',
                'regex:/^[A-Za-z][A-Za-z0-9_]*$/',
                Rule::unique('kendaraans', 'nomor_polisi')->ignore($id),
            ],
        ]);

        $kendaraan->update([
            'jenis_kendaraan' => $request->jenis_kendaraan,
            'type_kendaraan' => $request->type_kendaraan,
            'nomor_lambung' => $request->nomor_lambung,
            'nomor_polisi' => $request->nomor_polisi,
        ]);

        return redirect()->route('kendaraan.list')->with('success', "Berhasil perbarui kendaraan $kendaraan->nomor_lambung");
    }

    public function delete($id)
    {
        $kendaraan = Kendaraan::findOrFail($id);
        $no_lambung = $kendaraan->nomor_lambung;
        $kendaraan->delete();

        return redirect()->route('kendaraan.list')->with('success', "Berhasil menghapus kendaraan, No Lambung $no_lambung");
    }

    public function export()
    {
        return Excel::download(new KendaraansExport, 'kendaraan.xlsx');
    }
}
