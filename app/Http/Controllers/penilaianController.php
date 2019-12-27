<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use Auth;

class penilaianController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index($id)
    {
        $data = new User;
        $data->kesimpulan_u_s = DB::table('kesimpulan_u_s')
        ->where('id_penugasan', $id)
        ->first();

        $data->identitas_c_m = DB::table('identitas_c_m')
        ->where('id_penugasan', $id)
        ->first();

        $data->permohonan_c_m = DB::table('permohonan_c_m')
        ->where('id_penugasan', $id)
        ->first();

        $data->aspek_teknis = DB::table('aspek_teknis')
        ->where('id_penugasan', $id)
        ->first();

        $data->kebutuhan_modal = DB::table('kebutuhan_modal')
        ->where('id_penugasan', $id)
        ->first();

        $data->perkembangan_h_u = DB::table('perkembangan_h_u')
        ->where('id_penugasan', $id)
        ->first();

        $data->data_keuangan = DB::table('data_keuangan')
        ->where('id_penugasan', $id)
        ->first();

        $data->aspek_pemasaran = DB::table('aspek_pemasaran')
        ->where('id_penugasan', $id)
        ->first();

        $data->aspek_manajemen = DB::table('aspek_manajemen')
        ->where('id_penugasan', $id)
        ->first();

        $data->legalitas_c_m = DB::table('legalitas_c_m')
        ->where('id_penugasan', $id)
        ->first();

        $data->hubungan_c_m = DB::table('hubungan_c_m')
        ->where('id_penugasan', $id)
        ->first();

        return view('penilaian_survey.index', compact('data'));
    }


    public function update(Request $request, $id)
    {
        $messages = [
            'jnsp.required' => 'Nomor Telepon wajib diisi'
        ];

        $this->validate($request, [
            'jnsp' => 'required',
            'alasan' => 'required',
         
        ], $messages);


       $st = DB::table('kesimpulan_u_s')
        ->where('id_penugasan', $id)
        ->update([
            'jenis_pinjaman' => $request->jnsp,
            'kegunaan' => $request->kegunaan,
            'jasa_administrasi' => $request->jsa,
            'jenis_perhitungan_data' => $request->jpj,
            'alasan' => $request->alasan,
        ]);
        $st = DB::table('identitas_c_m')
        ->where('id_penugasan', $id)
        ->update([
            'no_ref_penilaian' => $request->norefp,
            'tanggal_proposal' => $request->tglp,
            'tanggal_survey' => $request->tgls,
            'nama_calon' => $request->nama,
            'alamat_usaha' => $request->almtu,
            'kecamatan' => $request->kec,
            'kelurahan' => $request->kel,
            'bidang_usaha' => $request->bidus,
            'no_telepon' => $request->ntlp,
            'pengalaman_usaha' => $request->pengus,
        ]);
        $st = DB::table('permohonan_c_m')
        ->where('id_penugasan', $id)
        ->update([
            'no_ref_customer' => $request->norefc,
            'permohonan_kredit' => $request->pk,
        ]);
        $st = DB::table('aspek_teknis')
        ->where('id_penugasan', $id)
        ->update([
            'aspek_teknis' => $request->astek,
        ]);
        $st = DB::table('kebutuhan_modal')
        ->where('id_penugasan', $id)
        ->update([
            'laba_rugi_usaha' => $request->labarugi,
            'beban_rumah_tangga' => $request->brt,
            'pendapatan_ll' => $request->pll,
            'angsuran_perbulan' => $request->kmb,
            'pengakuan_mampu_membayar' => $request->pkma,
            'nilai_pinjam' => $request->pnp,
            'kemampuan_angsuran_perbulan' => $request->kmab,
            'jangka_waktu' => $request->jw,
            'grace_periode' => $request->gp,
            'entitas_pembayaran' => $request->epm,
            'entitas_nilai_pokok' => $request->enp,
            'jumlah_pinjaman' => $request->jpy,
            'pembulatan' => $request->pbl,
        ]);
        $st = DB::table('perkembangan_h_u')
        ->where('id_penugasan', $id)
        ->update([
            'catatan_wawancara' => $request->pemasaran,
            'biaya_sewa' => $request->biayas,
            'biaya_makan' => $request->biayam,
            'biaya_utilitas' => $request->biayau,
            'biaya_pendidikan' => $request->biayap,
            'biaya_lain' => $request->biayal,
            'jumlah_biaya' => $request->bebanrt,
            'pendapatan_lain' => $request->pendapatanll,
            'angsuran_perbulan' => $request->angsuran,
        ]);
        $st = DB::table('data_keuangan')
        ->where('id_penugasan', $id)
        ->update([
            'kas_bank' => $request->kasbnk,
            'persediaan_barang' => $request->persedianb,
            'piutang_usaha' => $request->piutang,
            'peralatan_usaha' => $request->peralatanu,
            'kendaraan' => $request->kendaraan,
            'total_aktiva' => $request->totalk,
            'hutang_dagang' => $request->hutangd,
            'hutang_lain' => $request->hutangl,
            'modal' => $request->modal,
            'total_pasiva' => $request->total,
        ]);
        $st = DB::table('aspek_manajemen')
        ->where('id_penugasan', $id)
        ->update([
            'perf_calon' => $request->pcbkpu,
        ]);
        $st = DB::table('legalitas_c_m')
        ->where('id_penugasan', $id)
        ->update([
            'no_ktp_calon' => $request->nktp,
            'no_kk' => $request->nkk,
            'no_surat_keterangan' => $request->nsku,
            'no_surat_ijin_usaha' => $request->nsiu,
        ]);
        $st = DB::table('hubungan_c_m')
        ->where('id_penugasan', $id)
        ->update([
            'fasilitas_bantuan' => $request->fbypsdbl,
            'penjelasan' => $request->jaj,
        ]);


            return $st;


    }

    public function daftar()
    {
        $data=DB::table('pengajuan_mitra')
        ->join('data_usaha', 'data_usaha.id_pengajuan','=','pengajuan_mitra.id')
        ->join('penugasan', 'penugasan.id_pengajuan_mitra','=','pengajuan_mitra.id')
        ->join('d_agunan', 'd_agunan.id_pengajuan', '=', 'pengajuan_mitra.id')
        ->join('agunan_kendaraan', 'agunan_kendaraan.id_pengajuan', '=', 'pengajuan_mitra.id')
        ->join('agunan_sertifikat', 'agunan_sertifikat.id_pengajuan', '=', 'pengajuan_mitra.id')
        ->join('agunan_penjamin', 'agunan_penjamin.id_pengajuan', '=', 'pengajuan_mitra.id')
        ->join('agunan_sph', 'agunan_sph.id_pengajuan', '=', 'pengajuan_mitra.id')
        ->where('penugasan.id_petugas', '=', Auth::user()->id)
        ->select('pengajuan_mitra.nilai_pengajuan','pengajuan_mitra.nama',
        'pengajuan_mitra.status',
        'penugasan.id',
        'penugasan.id_pengajuan_mitra',
        'pengajuan_mitra.kode_pengajuan',
        'pengajuan_mitra.tanggal_daftar',
        'pengajuan_mitra.user_id',
        'agunan_kendaraan.no_bpkb',
        'agunan_sertifikat.no_shm',
        'agunan_penjamin.nipp',
        'agunan_sph.no_sph',
        'd_agunan.nama_tabel_agunan',
        'data_usaha.nama_usaha')
        ->get();
        return view('daftar_penilaian.d_penilaian', compact('data'));
    }

}