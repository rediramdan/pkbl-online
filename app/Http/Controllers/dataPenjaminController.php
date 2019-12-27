<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class dataPenjaminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function update(Request $request, $id)
    {
        $messages = [
            'pknama.required' => 'Nomor Telepon wajib diisi'
        ];

        $this->validate($request, [
            'pknama' => 'required'
        ], $messages);

       $st = DB::table('data_penerus_kewajiban')
        ->where('id', $request->id_pk)
        ->update([
            'nama_lengkap' => $request->pknama,
            'hubungan_keluarga' => $request->pkhubungankeluarga,
            'pekerjaan' => $request->pkpekerjaan,
            'alamat' => $request->pkalamatrumah,
            'kota' => $request->pkkota,
            'kecamatan' => $request->pkkecamatan,
            'kelurahan' => $request->pkdesa,
            'no_tlp' => $request->pknohp
        ]);
       $st = DB::table('data_penerus_kewajiban_kr')
        ->where('id', $id)
        ->update([
            'nama_lengkap' => $request->ktnama,
            'hubungan_dengan_pemohon' => $request->kthubp,
            'pekerjaan' => $request->ktpekerjaan,
            'alamat' => $request->ktalamat,
            'kota' => $request->ktkota,
            'kecamatan' => $request->ktkecamatan,
            'kelurahan' => $request->ktdesa,
            'no_tlp' => $request->ktnohp
        ]);

            return $st;


    }
}