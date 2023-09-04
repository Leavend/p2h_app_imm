<?php

namespace App\Http\Controllers;

use App\Exports\P2hsExport;
use App\Models\P2h;
use App\Models\Kendaraan;
use Illuminate\Http\Request;
use Carbon\Carbon;
use TelegramBot\Api\BotApi;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Illuminate\Validation\ValidationException;
use Maatwebsite\Excel\Facades\Excel;

class P2hController extends Controller
{

    public function index()
    {
        $p2hPaginator = P2h::getp2h();
        $kendaraanPaginator = Kendaraan::getKendaraan();
        $Title = 'IMM - GA - P2H Unit';

        return view('welcome', compact('Title', 'p2hPaginator', 'kendaraanPaginator'));
    }

    public function indexToday()
    {
        $p2hToday = P2h::getp2hdaily();
        $Title = 'GA - P2H Unit - Daily';
        return view('p2h.indexToday', compact('Title', 'p2hToday'));
    }

    public function indexTodayUser()
    {
        $p2hToday = P2h::getp2hdailyuser();
        $Title = 'IMM - GA - P2H Unit';
        return view('p2h.indexTodayUser', compact('Title', 'p2hToday'));
    }

    public function show()
    {
        $Title = 'P2H';
        $All = P2h::getp2hadmin();

        $Counts = [];

        foreach ($All as $p2h) {
            $kendaraanCounts = [
                'baik' => 0,
                'rusak' => 0,
                'tidak ada' => 0,
            ];

            foreach ($p2h->getAttributes() as $col => $value) {
                if (in_array($col, P2h::$enumColumns)) {
                    if ($value === 'baik') {
                        $kendaraanCounts['baik']++;
                    } elseif ($value === 'rusak') {
                        $kendaraanCounts['rusak']++;
                    } elseif ($value === 'tidak ada') {
                        $kendaraanCounts['tidak ada']++;
                    }
                }
            }

            $Counts[$p2h->kendaraan->id] = $kendaraanCounts;
        }
        // dd($All);

        return view('p2h.show', compact('Title', 'All', 'Counts'));
    }

    public function export()
    {
        return Excel::download(new P2hsExport, 'p2h.xlsx');
    }

    public function getForm($id, $nomor_lambung)
    {
        $p2hData = P2h::findOrFail($id)
            ->whereHas('kendaraan', function ($query) use ($nomor_lambung) {
                $query->where('nomor_lambung', $nomor_lambung);
            })
            ->firstOrFail();
        $Title = "GA - P2H Unit - $nomor_lambung";

        return view('p2h.form', compact('Title', 'p2hData'));
    }


    public function getFormUser($id, $nomor_lambung)
    {
        $p2hData = P2h::findOrFail($id)
            ->whereHas('kendaraan', function ($query) use ($nomor_lambung) {
                $query->where('nomor_lambung', $nomor_lambung);
            })
            ->firstOrFail();
        $Title = "GA - P2H Unit - $nomor_lambung";

        return view('p2h.formUser', compact('Title', 'p2hData'));
    }

    public function save(Request $request, $id, $nomor_lambung)
    {
        try {
            $request->validate([
                'nama_pemeriksa' => 'required|min:3|max:25',
                'nik' => 'required|regex:/^9\d{5,8}$/',
                'departemen' => 'required|min:5|max:50',
                'no_hp' => 'required|regex:/^08\d{8,11}$/',
                'oli_mesin' => 'required',
                'oli_kopling' => 'required',
                'air_radiator' => 'required',
                'oli_stering' => 'required',
                'rem_depanBelakang' => 'required',
                'rem_tangan' => 'required',
                'lampu_jauhDekat' => 'required',
                'lampu_reting_rL' => 'required',
                'lampu_belakang' => 'required',
                'lampu_rem' => 'required',
                'lampu_mundur' => 'required',
                'lampu_rotari' => 'required',
                'roda_depanBelakang' => 'required',
                'roda_cadangan' => 'required',
                'body_fender_rL' => 'required',
                'body_pintu_rL' => 'required',
                'body_atap_kabin' => 'required',
                'body_bendera' => 'required',
                'body_lantai_kabin' => 'required',
                'body_karet_mounting' => 'required',
                'body_sepring' => 'required',
                'tools_dongkrak_aksesoris' => 'required',
                'tools_kunci_roda' => 'required',
                'tools_segitiga_pengaman' => 'required',
                'tools_ganjal_ban' => 'required',
                'others_sabuk_pengaman' => 'required',
                'others_spidometer' => 'required',
                'others_klakson' => 'required',
                'others_spion' => 'required',
                'others_wiper' => 'required',
                'others_alarm_mundur' => 'required',
                'others_radio_komun' => 'required',
                'others_knalpot' => 'required',
                'others_no_lambung' => 'required',
                'others_apar' => 'required',
                'others_kursi_duduk' => 'required',
                'surat_p3k' => 'required',
                'surat_stnp_kir' => 'required',
            ], [
                'nama_pemeriksa.required' => 'Kolom Nama Pemeriksa harus diisi.',
                'nama_pemeriksa.min' => 'Nama Pemeriksa memiliki minimal karakter.',
                'nama_pemeriksa.max' => 'Nama Pemeriksa memiliki maksimal karakter.',
                'nik.regex' => 'Format NIK tidak valid.',
                'departemen.required' => 'Kolom Departemen harus diisi.',
                'departemen.min' => 'Departemen memiliki minimal karakter.',
                'departemen.max' => 'Departemen memiliki maksimal karakter.',
                'no_hp.regex' => 'Format nomor HP tidak valid.',
            ]);


            $p2h = P2h::findOrFail($id)
                ->whereHas('kendaraan', function ($query) use ($nomor_lambung) {
                    $query->where('nomor_lambung', $nomor_lambung);
                })
                ->firstOrFail();

            $p2h->fill($request->only([
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
            ]));

            $p2h->jam = date('H:i:s');
            $p2h->status = 'menunggu verifikasi';
            $p2h->save();

            // bot Tele Push Notif
            $botToken = env('TELEGRAM_BOT_TOKEN');
            $chatId = env('TELEGRAM_CHAT_ID');
            $User = $request->nama_pemeriksa;
            $noLambung = $p2h->kendaraan->nomor_lambung;
            $message = "$User telah melakukan P2H pada Unit dengan Nomor Lambung $noLambung";

            $telegram = new BotApi($botToken);
            $telegram->sendMessage($chatId, $message);

            return redirect()->route('p2h-cek.list')->with('success', 'Pengecekan Harian Unit Berhasil');
        } catch (ValidationException $e) {
            return back()->withErrors($e->errors())->withInput();
            dd($e);
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'Terjadi kesalahan.'])->withInput();
        }
    }

    public function saveUser(Request $request, $id, $nomor_lambung)
    {
        try {
            $request->validate([
                'nama_pemeriksa' => 'required|min:3|max:25',
                'nik' => 'required|regex:/^9\d{5,8}$/',
                'departemen' => 'required|min:5|max:50',
                'no_hp' => 'required|regex:/^08\d{8,11}$/',
                'oli_mesin' => 'required',
                'oli_kopling' => 'required',
                'air_radiator' => 'required',
                'oli_stering' => 'required',
                'rem_depanBelakang' => 'required',
                'rem_tangan' => 'required',
                'lampu_jauhDekat' => 'required',
                'lampu_reting_rL' => 'required',
                'lampu_belakang' => 'required',
                'lampu_rem' => 'required',
                'lampu_mundur' => 'required',
                'lampu_rotari' => 'required',
                'roda_depanBelakang' => 'required',
                'roda_cadangan' => 'required',
                'body_fender_rL' => 'required',
                'body_pintu_rL' => 'required',
                'body_atap_kabin' => 'required',
                'body_bendera' => 'required',
                'body_lantai_kabin' => 'required',
                'body_karet_mounting' => 'required',
                'body_sepring' => 'required',
                'tools_dongkrak_aksesoris' => 'required',
                'tools_kunci_roda' => 'required',
                'tools_segitiga_pengaman' => 'required',
                'tools_ganjal_ban' => 'required',
                'others_sabuk_pengaman' => 'required',
                'others_spidometer' => 'required',
                'others_klakson' => 'required',
                'others_spion' => 'required',
                'others_wiper' => 'required',
                'others_alarm_mundur' => 'required',
                'others_radio_komun' => 'required',
                'others_knalpot' => 'required',
                'others_no_lambung' => 'required',
                'others_apar' => 'required',
                'others_kursi_duduk' => 'required',
                'surat_p3k' => 'required',
                'surat_stnp_kir' => 'required',
            ], [
                'nama_pemeriksa.required' => 'Kolom Nama Pemeriksa harus diisi.',
                'nama_pemeriksa.min' => 'Nama Pemeriksa memiliki minimal karakter.',
                'nama_pemeriksa.max' => 'Nama Pemeriksa memiliki maksimal karakter.',
                'nik.regex' => 'Format NIK tidak valid.',
                'departemen.required' => 'Kolom Departemen harus diisi.',
                'departemen.min' => 'Departemen memiliki minimal karakter.',
                'departemen.max' => 'Departemen memiliki maksimal karakter.',
                'no_hp.regex' => 'Format nomor HP tidak valid.',
            ]);


            $p2h = P2h::findOrFail($id)
                ->whereHas('kendaraan', function ($query) use ($nomor_lambung) {
                    $query->where('nomor_lambung', $nomor_lambung);
                })
                ->firstOrFail();

            $p2h->fill($request->only([
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
            ]));

            $p2h->jam = date('H:i:s');
            $p2h->status = 'terverifikasi';
            $p2h->save();

            // bot Tele Push Notif
            $botToken = env('TELEGRAM_BOT_TOKEN');
            $chatId = env('TELEGRAM_CHAT_ID');
            $User = $request->nama_pemeriksa;
            $noLambung = $p2h->kendaraan->nomor_lambung;
            $message = "$User telah melakukan P2H pada Unit dengan Nomor Lambung $noLambung";

            $telegram = new BotApi($botToken);
            $telegram->sendMessage($chatId, $message);

            return redirect()->route('p2h.list')->with('success', 'Pengecekan Harian Unit Berhasil');
        } catch (ValidationException $e) {
            return back()->withErrors($e->errors())->withInput();
            dd($e);
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'Terjadi kesalahan.'])->withInput();
        }
    }

    public function getFormAdmin($id)
    {
        $p2hData = P2h::findOrFail($id);
        $nomor_lambung = $p2hData->kendaraan->nomor_lambung;
        $Title = "GA - P2H Unit - $nomor_lambung";

        return view('p2h.edit', compact('Title', 'p2hData'));
    }

    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'nama_pemeriksa' => 'required|min:3|max:25',
                'nik' => 'required|regex:/^9\d{5,8}$/',
                'departemen' => 'required|min:5|max:50',
                'no_hp' => 'required|regex:/^08\d{8,11}$/',
                'oli_mesin' => 'required',
                'oli_kopling' => 'required',
                'air_radiator' => 'required',
                'oli_stering' => 'required',
                'rem_depanBelakang' => 'required',
                'rem_tangan' => 'required',
                'lampu_jauhDekat' => 'required',
                'lampu_reting_rL' => 'required',
                'lampu_belakang' => 'required',
                'lampu_rem' => 'required',
                'lampu_mundur' => 'required',
                'lampu_rotari' => 'required',
                'roda_depanBelakang' => 'required',
                'roda_cadangan' => 'required',
                'body_fender_rL' => 'required',
                'body_pintu_rL' => 'required',
                'body_atap_kabin' => 'required',
                'body_bendera' => 'required',
                'body_lantai_kabin' => 'required',
                'body_karet_mounting' => 'required',
                'body_sepring' => 'required',
                'tools_dongkrak_aksesoris' => 'required',
                'tools_kunci_roda' => 'required',
                'tools_segitiga_pengaman' => 'required',
                'tools_ganjal_ban' => 'required',
                'others_sabuk_pengaman' => 'required',
                'others_spidometer' => 'required',
                'others_klakson' => 'required',
                'others_spion' => 'required',
                'others_wiper' => 'required',
                'others_alarm_mundur' => 'required',
                'others_radio_komun' => 'required',
                'others_knalpot' => 'required',
                'others_no_lambung' => 'required',
                'others_apar' => 'required',
                'others_kursi_duduk' => 'required',
                'surat_p3k' => 'required',
                'surat_stnp_kir' => 'required',
                'keterangan' => 'required|min:5|max:255',
            ], [
                'nama_pemeriksa.required' => 'Kolom Nama Pemeriksa harus diisi.',
                'nama_pemeriksa.min' => 'Nama Pemeriksa memiliki minimal karakter.',
                'nama_pemeriksa.max' => 'Nama Pemeriksa memiliki maksimal karakter.',
                'nik.regex' => 'Format NIK tidak valid.',
                'departemen.required' => 'Kolom Departemen harus diisi.',
                'departemen.min' => 'Departemen memiliki minimal karakter.',
                'departemen.max' => 'Departemen memiliki maksimal karakter.',
                'no_hp.regex' => 'Format nomor HP tidak valid.',
                'keterangan.required' => 'Kolom Keterangan harus diisi.',
                'keterangan.min' => 'Departemen memiliki minimal karakter.',
                'keterangan.max' => 'Departemen memiliki maksimal karakter.',
            ]);


            $p2h = P2h::findOrFail($id);
            $p2h->fill($request->only([
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
                'keterangan'
            ]));

            $p2h->jam = date('H:i:s');
            $p2h->status = 'terverifikasi';
            $p2h->save();

            // bot Tele Push Notif
            $botToken = env('TELEGRAM_BOT_TOKEN');
            $chatId = env('TELEGRAM_CHAT_ID');
            $User = $request->nama_pemeriksa;
            $noLambung = $p2h->kendaraan->nomor_lambung;
            $message = "$User telah melakukan P2H pada Unit dengan Nomor Lambung $noLambung";

            $telegram = new BotApi($botToken);
            $telegram->sendMessage($chatId, $message);

            return redirect()->route('p2h.list')->with('success', 'Pengecekan Harian Unit Berhasil');
        } catch (ValidationException $e) {
            return back()->withErrors($e->errors())->withInput();
            dd($e);
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'Terjadi kesalahan.'])->withInput();
        }
    }

    public function updateUser(Request $request, $nomor_lambung)
    {
        $kendaraan = Kendaraan::where('nomor_lambung', $nomor_lambung)->first();

        if (!$kendaraan) {
            return redirect()->route('error')->with('error', 'Kendaraan tidak ditemukan.');
        }

        $p2h = P2h::where('kendaraan_id', $kendaraan->id)->first();

        if (!$p2h) {
            return redirect()->back()->with('error', 'Data P2h tidak ditemukan.');
        }

        $request->validate([
            'tanggal' => 'required|date',
            'jam' => 'required',
            'nama_pemeriksa' => 'required|string|max:255',
            'nik' => 'required|string|min:6|max:9',
            'departemen' => 'required|string|max:255',
            'no_hp' => 'required',
            'oli_mesin' => 'required',
            'oli_kopling' => 'required',
            'air_radiator' => 'required',
            'oli_stering' => 'required',
            'rem_depanBelakang' => 'required',
            'rem_tangan' => 'required',
            'lampu_jauhDekat' => 'required',
            'lampu_reting_rL' => 'required',
            'lampu_belakang' => 'required',
            'lampu_rem' => 'required',
            'lampu_mundur' => 'required',
            'lampu_rotari' => 'required',
            'roda_depanBelakang' => 'required',
            'roda_cadangan' => 'required',
            'body_fender_rL' => 'required',
            'body_pintu_rL' => 'required',
            'body_atap_kabin' => 'required',
            'body_bendera' => 'required',
            'body_lantai_kabin' => 'required',
            'body_karet_mounting' => 'required',
            'body_sepring' => 'required',
            'tools_dongkrak_aksesoris' => 'required',
            'tools_kunci_roda' => 'required',
            'tools_segitiga_pengaman' => 'required',
            'tools_ganjal_ban' => 'required',
            'others_sabuk_pengaman' => 'required',
            'others_spidometer' => 'required',
            'others_klakson' => 'required',
            'others_spion' => 'required',
            'others_wiper' => 'required',
            'others_alarm_mundur' => 'required',
            'others_radio_komun' => 'required',
            'others_knalpot' => 'required',
            'others_no_lambung' => 'required',
            'others_apar' => 'required',
            'others_kursi_duduk' => 'required',
            'surat_p3k' => 'required',
            'surat_stnp_kir' => 'required',
            'keterangan' => 'required',
            'status' => 'required'
        ]);

        $p2h->update($request->all());

        return redirect()->route('p2h.list')->with('success', 'Data P2h berhasil diupdate.');
    }

    public function delete($id)
    {
        $p2h = P2h::findOrFail($id);
        $no_lambung = $p2h->kendaraan->nomor_lambung;
        $p2h->delete();

        return redirect()->route('p2h.list.admin')->with('success', "Berhasil menghapus P2H kendaraan dengan No.Lambung: $no_lambung");
    }

    public function verifikasiStatus($id)
    {
        P2h::where('id', "$id")->update([
            'status' => 'terverifikasi'
        ]);
        return redirect()->route('p2h.list');
    }

    public function invalidStatus($id)
    {
        P2h::where('id', "$id")->update([
            'status' => 'belum diperiksa'
        ]);
        return redirect()->route('p2h.list');
    }

    public function showErrorPage()
    {
        $Title = 'Error - Page';
        return view('error_page', compact('Title'));
    }
}
