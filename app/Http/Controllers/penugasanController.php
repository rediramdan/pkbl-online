<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class penugasanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $data=DB::table('pengajuan_mitra')
        ->join('data_usaha', 'data_usaha.id_pengajuan','=','pengajuan_mitra.id')
        ->join('d_agunan', 'd_agunan.id_pengajuan', '=', 'pengajuan_mitra.id')
        ->join('agunan_kendaraan', 'agunan_kendaraan.id_pengajuan', '=', 'pengajuan_mitra.id')
        ->join('agunan_sertifikat', 'agunan_sertifikat.id_pengajuan', '=', 'pengajuan_mitra.id')
        ->join('agunan_penjamin', 'agunan_penjamin.id_pengajuan', '=', 'pengajuan_mitra.id')
        ->join('agunan_sph', 'agunan_sph.id_pengajuan', '=', 'pengajuan_mitra.id')
        ->where('pengajuan_mitra.status', '=', 'Menunggu Persetujuan')
        ->select('pengajuan_mitra.nilai_pengajuan',
        'pengajuan_mitra.id','pengajuan_mitra.nama',
        'pengajuan_mitra.kode_pengajuan',
        'pengajuan_mitra.tanggal_daftar',
        'pengajuan_mitra.user_id',
        'data_usaha.nama_usaha',
        'data_usaha.kota'
        )
        ->get();

        $data->petugas = DB::table('users')->where('level', '=', 'p')->get();

        return view('penugasan_survey.index', compact('data'));
    }
    
    public function store(Request $request)
    {

       
        if($request->id_pengajuan != null)
        {

            for($i=0; $i < count($request->id_pengajuan); $i++)
            {
                DB::table('penugasan')
                ->insert([
                    'id_petugas' => $request->petugas,
                    'id_pengajuan_mitra' => $request->id_pengajuan[$i],
                    'tanggal_ditugaskan' => $request->tanggal_penugasan,

                ]);

                $id= DB::table('penugasan')->select('id')->orderby('id', 'desc')->first();

                DB::table('kesimpulan_u_s')
                ->insert([
                    'id_penugasan' => $id->id,
                ]);
                DB::table('identitas_c_m')
                ->insert([
                    'id_penugasan' => $id->id,
                ]);
                DB::table('permohonan_c_m')
                ->insert([
                    'id_penugasan' => $id->id,
                ]);
                DB::table('aspek_teknis')
                ->insert([
                    'id_penugasan' => $id->id,
                ]);
                DB::table('kebutuhan_modal')
                ->insert([
                    'id_penugasan' => $id->id,
                ]);
                DB::table('perkembangan_h_u')
                ->insert([
                    'id_penugasan' => $id->id,
                ]);
                DB::table('data_keuangan')
                ->insert([
                    'id_penugasan' => $id->id,
                ]);
                DB::table('aspek_pemasaran')
                ->insert([
                    'id_penugasan' => $id->id,
                ]);
                DB::table('aspek_manajemen')
                ->insert([
                    'id_penugasan' => $id->id,
                ]);
                DB::table('legalitas_c_m')
                ->insert([
                    'id_penugasan' => $id->id,
                ]);
                DB::table('hubungan_c_m')
                ->insert([
                    'id_penugasan' => $id->id,
                ]);
            }

            return redirect()->back()->with('pesan','Data Berhasil Di Tambahkan');
        }else
        {
            return redirect()->back();
        }
      
        
        

    }
}