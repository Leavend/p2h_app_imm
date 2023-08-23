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
use Maatwebsite\Excel\Facades\Excel;

class P2hController extends Controller
{

    public function index()
    {
        $Title = 'IMM - GA - P2H Unit';
        $p2hPaginator = P2h::getp2h();
        $kendaraanPaginator = Kendaraan::getKendaraan();

        return view('welcome', compact('Title', 'p2hPaginator', 'kendaraanPaginator'));
    }

    public function indexToday()
    {
        $Title = 'IMM - GA - P2H Unit';
        // $p2hToday = P2h::whereDate('tanggal', Carbon::today('Asia/Makassar'))->where('status', 'belum diperiksa')->paginate(10, ['*'], 'p2h_page');
        $p2hToday = P2h::getp2hdaily();
        return view('p2h.indexToday', compact('Title', 'p2hToday'));
    }

    public function indexTodayUser()
    {
        $Title = 'IMM - GA - P2H Unit';
        $p2hToday = P2h::getp2hdailyuser();
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

    public function getForm()
    {
        $Title = 'IMM - GA - P2H Unit';
        // $p2hData = P2h::find($id);
        // $dataKendaraan = Kendaraan::find($id);

        return view('p2h.form', compact('Title'));
    }

    public function getFormUser($id)
    {
        $Title = 'IMM - GA - P2H Unit';
        $p2hData = P2h::find($id);
        $dataKendaraan = Kendaraan::find($id);

        return view('p2h.formUser', compact('Title', 'p2hData', 'dataKendaraan'));
    }

    public function save(Request $request, $id)
    {
        $request->validate([
            'kendaraan_id' => 'required',
            // Tambahkan aturan validasi lain sesuai kebutuhan
        ]);

        // Ambil data P2h berdasarkan ID yang diberikan
        $p2h = P2h::find($id);

        $p2h->fill($request->only([
            'kendaraan_id',
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

        $p2h['status'] = 'menunggu verifikasi';
        $p2h['jam'] = date('H:i:s');

        $p2h->save();

        // Ambil data kendaraan
        $kendaraan = Kendaraan::find('id')->where('kendaraan_id', 'id');
        $noLambung = $p2h->kendaraan->no_lambung;

        // bot Tele Push Notif
        $botToken = env('TELEGRAM_BOT_TOKEN');
        $chatId = env('TELEGRAM_CHAT_ID');
        $User = $request->nama_pemeriksa;
        $message = "$User telah melakukan P2H pada Unit dengan Nomor Lambung $noLambung";

        $telegram = new BotApi($botToken);
        $telegram->sendMessage($chatId, $message);

        return redirect()->route('p2h-cek.list')->with('success', 'Pengecekan Harian Unit Berhasil');
    }

    public function detail($id)
    {
        $data = P2h::findOrFail($id); // Sesuaikan dengan model dan kolom yang sesuai
        return response()->json($data);
    }

    public function edit($id)
    {
        $Title = 'IMM - GA - P2H Unit';
        $data = P2h::where("id", $id)->first();
        $dataKendaraan = Kendaraan::all();

        return view('p2h.edit', compact('Title', 'data', 'dataKendaraan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kendaraan_id' => 'required',
        ]);

        $p2h = P2h::find($id);

        if (!$p2h) {
            return redirect()->back()->with('error', 'Data P2h tidak ditemukan.');
        }

        $p2h->update([
            'status' => $request->status
        ]);

        return redirect()->route('p2h.list')->with('success', 'Data P2h berhasil diupdate.');
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
}
