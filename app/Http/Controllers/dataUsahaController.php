<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class dataUsahaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function update(Request $request, $id)
    {
        

        
        $this->validate($request, [
            'namausaha' => 'required',
        ]);

       $st = DB::table('data_usaha')
        ->where('id', $id)
        ->update([
            'bidang_usaha' => $request->bidangusaha,
            'nama_usaha' => $request->namausaha,
            'nama_pimpinan' => $request->namapimpinan,
            'alamat_usaha' => $request->alamat,
            'kota' => $request->uskota,
            'kecamatan' => $request->uskecamatan,
            'kelurahan' => $request->uskelurahan,
            'kode_pos' => $request->uskodepos,
            'no_tlp' => $request->ustelepon,
            'no_hp' => $request->ushp,
            'no_fax' => $request->usfax,
            'email' => $request->usemail,
            'status_kepemilikan_usaha' => $request->usstatuskepemilikan,
            'tanggal_akhir_sewa' => $request->ustanggalakhir,
            'tanggal_aktif_usaha' => $request->tanggalmulai,
            'jumlah_tenaga_kerja' => $request->jumlahtenaga,
            'modal' => $request->usmodal,
            'investasi' => $request->investasi,
            'omset_perbulan_rp' => $request->omsetrp,
            'omset_perbulan_unit' => $request->omsetunit,
            'adm_pembukuan' => $request->pembukuan,
            'berupa' => $request->berupa,
            'pinjaman_pihak_lain' => $request->kewajiban,
            'bank_bumn' => $request->bumn,
            'Besarnya' => $request->besarnya,
        ]);

            return $st;


    }
}