<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class dataPengajuanController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        if(Auth::user()->level == 'a')
        {

            $data=DB::table('pengajuan_mitra')
            ->join('data_usaha', 'data_usaha.id_pengajuan','=','pengajuan_mitra.id')
            ->join('d_agunan', 'd_agunan.id_pengajuan', '=', 'pengajuan_mitra.id')
            ->join('agunan_kendaraan', 'agunan_kendaraan.id_pengajuan', '=', 'pengajuan_mitra.id')
            ->join('agunan_sertifikat', 'agunan_sertifikat.id_pengajuan', '=', 'pengajuan_mitra.id')
            ->join('agunan_penjamin', 'agunan_penjamin.id_pengajuan', '=', 'pengajuan_mitra.id')
            ->join('agunan_sph', 'agunan_sph.id_pengajuan', '=', 'pengajuan_mitra.id')
            ->select('pengajuan_mitra.nilai_pengajuan',
            'pengajuan_mitra.id','pengajuan_mitra.nama',
            'pengajuan_mitra.status',
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

        }else{
            $data=DB::table('pengajuan_mitra')
            ->join('data_usaha', 'data_usaha.id_pengajuan','=','pengajuan_mitra.id')
            ->join('d_agunan', 'd_agunan.id_pengajuan', '=', 'pengajuan_mitra.id')
            ->join('agunan_kendaraan', 'agunan_kendaraan.id_pengajuan', '=', 'pengajuan_mitra.id')
            ->join('agunan_sertifikat', 'agunan_sertifikat.id_pengajuan', '=', 'pengajuan_mitra.id')
            ->join('agunan_penjamin', 'agunan_penjamin.id_pengajuan', '=', 'pengajuan_mitra.id')
            ->join('agunan_sph', 'agunan_sph.id_pengajuan', '=', 'pengajuan_mitra.id')
            ->where('pengajuan_mitra.user_id', '=', Auth::user()->id)
            ->select('pengajuan_mitra.nilai_pengajuan',
            'pengajuan_mitra.id','pengajuan_mitra.nama',
            'pengajuan_mitra.status',
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
        }
        return view('pengajuan_mitra.index', compact('data'));
    }

    public function edit($id)
    {
        $data = DB::table('pengajuan_mitra')
        ->where('id','=', $id)
        ->first();
        $data->data_usaha = DB::table('data_usaha')
        ->where('id_pengajuan','=', $id)
        ->first();
        $data->data_pribadi = DB::table('data_pribadi')
        ->where('id_pengajuan','=', $id)
        ->first();
        $data->data_penerus_kewajiban = DB::table('data_penerus_kewajiban')
        ->where('id_pengajuan','=', $id)
        ->first();
        $data->data_penerus_kewajiban_kr = DB::table('data_penerus_kewajiban_kr')
        ->where('id_pengajuan','=', $id)
        ->first();
        $data->data_lampiran_1 = DB::table('lampiran_1')
        ->where('id_pengajuan','=', $id)
        ->first();
        $data->data_lampiran_2 = DB::table('lampiran_2')
        ->where('id_pengajuan','=', $id)
        ->first();
        $data->d_agunan = DB::table('d_agunan')
        ->where('id_pengajuan','=', $id)
        ->first();
        $data->agunan_kendaraan = DB::table('agunan_kendaraan')
        ->where('id_pengajuan','=', $id)
        ->first();
        $data->agunan_sertifikat = DB::table('agunan_sertifikat')
        ->where('id_pengajuan','=', $id)
        ->first();
        $data->agunan_penjamin = DB::table('agunan_penjamin')
        ->where('id_pengajuan','=', $id)
        ->first();
        $data->agunan_sph = DB::table('agunan_sph')
        ->where('id_pengajuan','=', $id)
        ->first();
        return view('pengajuan_mitra.edit_pengajuan', compact('data'));
    }

    public function store(Request $request)
    {
        $messages = [
            'nama_lengkap.required' => 'Nama wajib diisi',
            'jenis_identitas.required' => 'Jenis Identitas wajib diisi',
            'nomor_identitas.required' => 'Nomor Identitas wajib diisi',
            'tempat_lahir.required' => 'Tempat Lahir wajib diisi',
            'tanggal_lahir.required' => 'Tanggal Lahir wajib diisi',
            'jk.required' => 'Jenis Kelamin wajib diisi',
            'nama_ibu.required' => 'Nama Ibu wajib diisi',
            'nilai_pengajuan.required' => 'Nilai Pengajuan wajib diisi',
            'sektor_usaha.required' => 'Sektor Usaha wajib diisi',
            'badan_usaha.required' => 'Badan Usaha wajib diisi',
            'kota.required' => 'Kota wajib diisi',
        ];
        $validator = $this->validate($request, [
            'nama_lengkap' => 'required',
            'jenis_identitas' => 'required',
            'nomor_identitas' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jk' => 'required',
            'nama_ibu' => 'required',
            'nilai_pengajuan' => 'required',
            'sektor_usaha' => 'required',
            'badan_usaha' => 'required',
            'kota' => 'required',
        ], $messages);

       $kode = DB::table('pengajuan_mitra')
        ->select('kode_pengajuan')
        ->orderby('id', 'desc')
        ->first();

        if($kode == null)
        {
            $kode_pengajuan='MBS.'.date('Y.m').'/000001';
        }else
        {
            $sl = substr($kode->kode_pengajuan, 12) + 1;
            $gb = strlen($sl);
            if($gb==1){
                $gabung = '00000'.$sl;
            }elseif($gb==2)
            {
                $gabung = '0000'.$sl;
            }elseif($gb==3)
            {
                $gabung = '000'.$sl;
            }elseif($gb==4)
            {
                $gabung = '00'.$sl;
            }elseif($gb==5)
            {
                $gabung = '0'.$sl;
            }else
            {
                $gabung = $sl;
            }
            $kode_pengajuan ='MBS.'.date('Y.m').'/'.$gabung;
        }

        DB::table('pengajuan_mitra')
        ->insert([
            'tanggal_daftar' => $request->tanggal_daftar,
            'kode_pengajuan' => $kode_pengajuan,
            'user_id' => Auth::user()->id,
            'nama' => $request->nama_lengkap,
            'jenis_identitas' => $request->jenis_identitas,
            'no_identitas' => $request->nomor_identitas,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jk' => $request->jk,
            'nama_ibu' => $request->nama_ibu,
            'nilai_pengajuan' => $request->nilai_pengajuan,
            'sektor_usaha' => $request->sektor_usaha,
            'badan_usaha' => $request->badan_usaha,
            'kota' => $request->kota,
            'status' => 'Pelengkapan Data',
        ]);
        
        $bid = DB::table('pengajuan_mitra')
        ->select('id')
        ->orderby('id', 'desc')
        ->first();

        if($bid->id==null)
        {
            $id=1;
        }else
        {
            $id = $bid->id;
        }

        DB::table('data_usaha')
        ->insert([
            'id_pengajuan' => $id,
        ]);
        DB::table('data_pribadi')
        ->insert([
            'id_pengajuan' => $id,
        ]);
        DB::table('data_penerus_kewajiban')
        ->insert([
            'id_pengajuan' => $id,
        ]);
        DB::table('data_penerus_kewajiban_kr')
        ->insert([
            'id_pengajuan' => $id,
        ]);
        DB::table('lampiran_1')
        ->insert([
            'id_pengajuan' => $id,
        ]);
        DB::table('lampiran_2')
        ->insert([
            'id_pengajuan' => $id,
        ]);
        DB::table('d_agunan')
        ->insert([
            'id_pengajuan' => $id,
        ]);
        DB::table('agunan_kendaraan')
        ->insert([
            'id_pengajuan' => $id,
        ]);
        DB::table('agunan_penjamin')
        ->insert([
            'id_pengajuan' => $id,
        ]);
        DB::table('agunan_sertifikat')
        ->insert([
            'id_pengajuan' => $id,
        ]);
        DB::table('agunan_sph')
        ->insert([
            'id_pengajuan' => $id,
        ]);
        
      
        return redirect()->route('pengajuan');
    }


    public function update(Request $request, $id)
    {
        $messages = [
            'nama_lengkap.required' => 'Nama wajib diisi',
            'jenis_identitas.required' => 'Jenis Identitas wajib diisi',
            'nomor_identitas.required' => 'Nomor Identitas wajib diisi',
            'tempat_lahir.required' => 'Tempat Lahir wajib diisi',
            'tanggal_lahir.required' => 'Tanggal Lahir wajib diisi',
            'jk.required' => 'Jenis Kelamin wajib diisi',
            'nama_ibu.required' => 'Nama Ibu wajib diisi',
            'nilai_pengajuan.required' => 'Nilai Pengajuan wajib diisi',
            'sektor_usaha.required' => 'Sektor Usaha wajib diisi',
            'badan_usaha.required' => 'Badan Usaha wajib diisi',
            'kota.required' => 'Kota wajib diisi',
        ];
        $validator = $this->validate($request, [
            'nama_lengkap' => 'required',
            'jenis_identitas' => 'required',
            'nomor_identitas' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jk' => 'required',
            'nama_ibu' => 'required',
            'nilai_pengajuan' => 'required',
            'sektor_usaha' => 'required',
            'badan_usaha' => 'required',
            'kota' => 'required',
        ], $messages);

        $validator->after(function() use($validator)  {
            if( $request->nama_lengkap == 'redi' )
            {
                $validator->errors()->add('nama_lengkap', 'ganteng redi mu');
            }
        });

       $st = DB::table('pengajuan_mitra')
        ->where('id', $id)
        ->update([
            'tanggal_daftar' => $request->tanggal_daftar,
            'nama' => $request->nama_lengkap,
            'jenis_identitas' => $request->jenis_identitas,
            'no_identitas' => $request->nomor_identitas,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jk' => $request->jk,
            'nama_ibu' => $request->nama_ibu,
            'nilai_pengajuan' => $request->nilai_pengajuan,
            'sektor_usaha' => $request->sektor_usaha,
            'badan_usaha' => $request->badan_usaha,
            'kota' => $request->kota,
        ]);

            return $st;


    }

    public function ajukan(Request $request, $id)
    {
        DB::table('pengajuan_mitra')
        ->where('id', $id)
        ->update([
            'status' => $request->status,
        ]);

        return redirect()->route('pengajuan')->with('pesan','Data berhasil Diajukan');

    }
}