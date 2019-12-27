<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon;
use Illuminate\Support\Facades\File;

class lampiranlainController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function update(Request $request, $id)
    {
            $this->validate($request, [
                'filelainnya' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
            ]);
        
            $image = $request->file('filelainnya');
            $foto = DB::table('lampiran_2')->select('poto')->where('id', $id)->first();
            $tanggal = Carbon\Carbon::now();
            if($image==null){
            $new_name= $foto->poto;
            }else{
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $url=public_path("lampiran_2\\". $foto->poto);
            $image->move(public_path('lampiran_2'), $new_name);
            File::delete($url); 
            }
        
            DB::table('lampiran_2')
            ->where('id', $id)
            ->update([
               'poto' => $new_name,
               'keterangan' => $request->keteranganlainnya,
            ]);
        
        
            return redirect()->route('pengajuan.edit', $request->id_route)->with('pesan','Data Berhasil Di Tambahkan');
       
      
        
        

    }
}