<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class dataAgunanController extends Controller
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

       $st = DB::table('d_agunan')
        ->where('id', $id)
        ->update([
            'nama_tabel_agunan' => $request->nama_tabel,
        ]);



        if($request->nama_tabel == 'agunan_kendaraan')
        {
            $this->validate($request, [
                'nobpkb' => 'numeric',
            ], $messages);

            $st = DB::table('agunan_kendaraan')
             ->where('id', $id)
             ->update([
                 'no_bpkb' => $request->nobpkb,
             ]);
        }
        elseif($request->nama_tabel == 'agunan_sertifikat')
        {
            $this->validate($request, [
                'noshm' => 'numeric',
            ], $messages);

            $st = DB::table('agunan_sertifikat')
             ->where('id', $id)
             ->update([
                 'no_shm' => $request->noshm,
             ]);
        }
        elseif($request->nama_tabel == 'agunan_penjamin')
        {
            $this->validate($request, [
                'nipp' => 'numeric',
            ], $messages);

            $st = DB::table('agunan_penjamin')
             ->where('id', $id)
             ->update([
                 'nipp' => $request->nipp,
             ]);
        }
        elseif($request->nama_tabel == 'agunan_sph')
        {
            $this->validate($request, [
                'nosph' => 'numeric',
            ], $messages);
            
            $st = DB::table('agunan_sph')
             ->where('id', $id)
             ->update([
                 'no_sph' => $request->nosph,
             ]);
        }
            return $st;


    }
}