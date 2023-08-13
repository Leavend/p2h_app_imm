<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use Illuminate\Http\Request;

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
            'jenis_kendaraan' => 'required|string|max:25',
            'type_kendaraan' => 'required|string|max:25',
            'nomor_lambung' => 'required|nomor_lambung|unique:kendaraans',
            'nomor_polisi' => 'required|nomor_polisi|unique:kendaraans',
        ]);

        $kendaraan = new Kendaraan;
        $kendaraan->jenis_kendaraan = trim($request->jenis_kendaraan);
        $kendaraan->type_kendaraan = trim($request->type_kendaraan);
        $kendaraan->nomor_lambung = trim($request->nomor_lambung);
        $kendaraan->nomor_polisi = trim($request->nomor_polisi);
        $kendaraan->tanggal = now('Asia/Makassar')->format('Y-m-d');
        $kendaraan->save();

        return redirect()->route('kendaraan.list')->with('success', 'Berhasil menambahkan kendaraan');
    }
    public function edit($id)
    {
        $data = Kendaraan::findOrFail($id);
        $data['header_title'] = 'Edit Kendaraan';
        return view('kendaraan.edit', $data);
    }
    public function update(Request $request, $id)
    {
        $kendaraan = Kendaraan::findOrFail($id);
        $kendaraan->update([
            'jenis_kendaraan' => $request->jenis_kendaraan,
            'type_kendaraan' => $request->type_kendaraan,
            'nomor_lambung' => $request->nomor_lambung,
            'nomor_polisi' => $request->nomor_polisi,
            'tanggal' => now('Asia/Makassar')->format('Y-m-d'),
        ]);
        return redirect()->back()->with('success', 'Berhasil perbaharui kendaraan');
    }
    public function delete($id)
    {
        $kendaraan = Kendaraan::findOrFail($id);
        $kendaraan->delete();
        return redirect()->route('kendaraan.list')->with('success', 'Berhasil menghapus kendaraan');
    }
}
