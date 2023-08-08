<?php

namespace App\Http\Controllers;

use App\Models\P2h;
use App\Models\Kendaraan;
use Illuminate\Http\Request;
use Carbon\Carbon;
use TelegramBot\Api\BotApi;


class P2hController extends Controller
{

    public function index()
    {
        $Title = 'IMM - GA - P2H Unit';
        $All = P2h::with('kendaraan')->orderBy('id', 'asc')->paginate(6);
        // $kendaraanData = Kendaraan::orderBy('id', 'asc')->paginate(6);
        return view('welcome', compact('Title', 'All'));
    }


    public function indexToday()
    {
        $Title = 'IMM - GA - P2H Unit';
        $p2hToday = P2h::whereDate('tanggal', Carbon::today())->where('status', 'belum diperiksa')->paginate(6);
        return view('p2h.indexAll', compact('Title', 'p2hToday'));
    }


    public function show()
    {
        $Title = 'P2H';
        $All = P2h::with('kendaraan')->orderBy('id', 'asc')->paginate(6);
        $Baik = P2h::where('oli_mesin', 'baik')
            ->where('oli_kopling', 'baik')
            ->where('air_radiator', 'baik')
            ->where('oli_stering', 'baik')
            ->where('rem_depanBelakang', 'baik')
            ->where('rem_tangan', 'baik')
            ->where('lampu_jauhDekat', 'baik')
            ->where('lampu_reting_rL', 'baik')
            ->where('lampu_belakang', 'baik')
            ->where('lampu_rem', 'baik')
            ->where('lampu_mundur', 'baik')
            ->where('lampu_rotari', 'baik')
            ->where('roda_depanBelakang', 'baik')
            ->where('roda_cadangan', 'baik')
            ->where('body_fender_rL', 'baik')
            ->where('body_pintu_rL', 'baik')
            ->where('body_atap_kabin', 'baik')
            ->where('body_bendera', 'baik')
            ->where('body_lantai_kabin', 'baik')
            ->where('body_karet_mounting', 'baik')
            ->where('body_sepring', 'baik')
            ->where('tools_dongkrak_aksesoris', 'baik')
            ->where('tools_kunci_roda', 'baik')
            ->where('tools_segitiga_pengaman', 'baik')
            ->where('tools_ganjal_ban', 'baik')
            ->where('others_sabuk_pengaman', 'baik')
            ->where('others_spidometer', 'baik')
            ->where('others_klakson', 'baik')
            ->where('others_spion', 'baik')
            ->where('others_wiper', 'baik')
            ->where('others_alarm_mundur', 'baik')
            ->where('others_radio_komun', 'baik')
            ->where('others_knalpot', 'baik')
            ->where('others_no_lambung', 'baik')
            ->where('others_apar', 'baik')
            ->where('others_kursi_duduk', 'baik')
            ->where('surat_p3k', 'baik')
            ->where('surat_stnp_kir', 'baik')
            ->get()->count();
        $Rusak = P2h::where('oli_mesin', 'rusak')
            ->where('oli_kopling', 'rusak')
            ->where('air_radiator', 'rusak')
            ->where('oli_stering', 'rusak')
            ->where('rem_depanBelakang', 'rusak')
            ->where('rem_tangan', 'rusak')
            ->where('lampu_jauhDekat', 'rusak')
            ->where('lampu_reting_rL', 'rusak')
            ->where('lampu_belakang', 'rusak')
            ->where('lampu_rem', 'rusak')
            ->where('lampu_mundur', 'rusak')
            ->where('lampu_rotari', 'rusak')
            ->where('roda_depanBelakang', 'rusak')
            ->where('roda_cadangan', 'rusak')
            ->where('body_fender_rL', 'rusak')
            ->where('body_pintu_rL', 'rusak')
            ->where('body_atap_kabin', 'rusak')
            ->where('body_bendera', 'rusak')
            ->where('body_lantai_kabin', 'rusak')
            ->where('body_karet_mounting', 'rusak')
            ->where('body_sepring', 'rusak')
            ->where('tools_dongkrak_aksesoris', 'rusak')
            ->where('tools_kunci_roda', 'rusak')
            ->where('tools_segitiga_pengaman', 'rusak')
            ->where('tools_ganjal_ban', 'rusak')
            ->where('others_sabuk_pengaman', 'rusak')
            ->where('others_spidometer', 'rusak')
            ->where('others_klakson', 'rusak')
            ->where('others_spion', 'rusak')
            ->where('others_wiper', 'rusak')
            ->where('others_alarm_mundur', 'rusak')
            ->where('others_radio_komun', 'rusak')
            ->where('others_knalpot', 'rusak')
            ->where('others_no_lambung', 'rusak')
            ->where('others_apar', 'rusak')
            ->where('others_kursi_duduk', 'rusak')
            ->where('surat_p3k', 'rusak')
            ->where('surat_stnp_kir', 'rusak')
            ->get()->count();
        $tidakAda = P2h::where('oli_mesin', 'tidak ada')
            ->where('oli_kopling', 'tidak ada')
            ->where('air_radiator', 'tidak ada')
            ->where('oli_stering', 'tidak ada')
            ->where('rem_depanBelakang', 'tidak ada')
            ->where('rem_tangan', 'tidak ada')
            ->where('lampu_jauhDekat', 'tidak ada')
            ->where('lampu_reting_rL', 'tidak ada')
            ->where('lampu_belakang', 'tidak ada')
            ->where('lampu_rem', 'tidak ada')
            ->where('lampu_mundur', 'tidak ada')
            ->where('lampu_rotari', 'tidak ada')
            ->where('roda_depanBelakang', 'tidak ada')
            ->where('roda_cadangan', 'tidak ada')
            ->where('body_fender_rL', 'tidak ada')
            ->where('body_pintu_rL', 'tidak ada')
            ->where('body_atap_kabin', 'tidak ada')
            ->where('body_bendera', 'tidak ada')
            ->where('body_lantai_kabin', 'tidak ada')
            ->where('body_karet_mounting', 'tidak ada')
            ->where('body_sepring', 'tidak ada')
            ->where('tools_dongkrak_aksesoris', 'tidak ada')
            ->where('tools_kunci_roda', 'tidak ada')
            ->where('tools_segitiga_pengaman', 'tidak ada')
            ->where('tools_ganjal_ban', 'tidak ada')
            ->where('others_sabuk_pengaman', 'tidak ada')
            ->where('others_spidometer', 'tidak ada')
            ->where('others_klakson', 'tidak ada')
            ->where('others_spion', 'tidak ada')
            ->where('others_wiper', 'tidak ada')
            ->where('others_alarm_mundur', 'tidak ada')
            ->where('others_radio_komun', 'tidak ada')
            ->where('others_knalpot', 'tidak ada')
            ->where('others_no_lambung', 'tidak ada')
            ->where('others_apar', 'tidak ada')
            ->where('others_kursi_duduk', 'tidak ada')
            ->where('surat_p3k', 'tidak ada')
            ->where('surat_stnp_kir', 'tidak ada')
            ->get()->count();

        // $belumDiperiksa = P2h::whereKendaraanId('kendaraan_id')->whereTanggal(date('Y-m-d'))->whereStatus('belum diperiksa')->count();
        // $menungguVerifikasi = P2h::whereKendaraanId('kendaraan_id')->whereTanggal(date('Y-m-d'))->whereStatus('menunggu verifikasi')->count();
        // $Terverifikasi = P2h::whereKendaraanId('kendaraan_id')->whereTanggal(date('Y-m-d'))->whereStatus('terverifikasi')->count();
        return view('p2h.show', compact('Title', 'All', 'Baik', 'Rusak', 'tidakAda'));
    }

    public function getForm($id)
    {
        $Title = 'IMM - GA - P2H Unit';
        $p2hData = P2h::find($id);
        $dataKendaraan = Kendaraan::find($id);

        return view('p2h.form', compact('Title', 'p2hData', 'dataKendaraan'));
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
        $Title = 'IMM - GA - P2H Unit';
        $data = P2h::where('id', $id)->first();
        $dataKendaraan = Kendaraan::all();
        // $no = 1;

        // $dataP2h = P2h::where('id', "$id")->get();
        return view('p2h.detail', compact('Title', 'data', 'dataKendaraan'));
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
