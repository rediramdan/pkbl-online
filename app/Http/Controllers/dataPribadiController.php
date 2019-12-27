<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class dataPribadiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function update(Request $request, $id)
    {
        $messages = [
            'alamatktp.required' => 'Alamat KTP wajib diisi',
        ];
        $this->validate($request, [
            'alamatktp' => 'required',
            'alamattinggal' => 'required',
            'prkecamatan' => 'required',
            'prkelurahan' => 'required',
            'rumahkepemilikan' => 'required',
            'prhp' => 'required',
            'prpekerjaan' => 'required',
            'pragama' => 'required',
            'statuspernikahan' => 'required',
            'prpendidikan' => 'required',
        ], $messages);

       $st = DB::table('data_pribadi')
        ->where('id', $id)
        ->update([
            'alamat_ktp' => $request->alamatktp,
            'alamat_tempat_tinggal' => $request->alamattinggal,
            'kecamatan' => $request->prkecamatan,
            'kelurahan' => $request->prkelurahan,
            'kode_pos' => $request->prkodepos,
            'kepemilikan_rumah' => $request->rumahkepemilikan,
            'no_tlp' => $request->prtelepon,
            'no_hp' => $request->prhp,
            'email' => $request->premail,
            'pekerjaan' => $request->prpekerjaan,
            'agama' => $request->pragama,
            'status_pernikahan' => $request->statuspernikahan,
            'pendidikan_terakhir' => $request->prpendidikan,
        ]);

            return $st;


    }
}