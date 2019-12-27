<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon;
use Illuminate\Support\Facades\File;

class lampiranController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function update(Request $request, $id)
    {

       
        if($request->lampiran != null)
        {

            for($i=0; $i < count($request->lampiran); $i++)
            {
                $this->validate($request, [
                    $request->lampiran[$i] => 'image|mimes:jpg,jpeg,png,gif|max:2048',
                ]);
            
                $image = $request->file($request->lampiran[$i]);
                $foto= DB::table('lampiran_1')->pluck($request->lampiran[$i])->where('id', $id)->first();
                $tanggal = Carbon\Carbon::now();
                if($image==null){
                $new_name= $foto;
                }else{
                $new_name = rand() . '.' . $image->getClientOriginalExtension();
                $url=public_path("lampiran_1\\". $foto);
                $image->move(public_path('lampiran_1'), $new_name);
                    File::delete($url); 
                }
            
                DB::table('lampiran_1')
                ->where('id', $id)
                ->update([
                    $request->lampiran[$i] => $new_name,
                ]);
            
            }
            return redirect()->route('pengajuan.edit', $request->id_route)->with('pesan','Data Berhasil Di Tambahkan');
        }else
        {
            return redirect()->route('pengajuan.edit', $request->id_route);
        }
      
        
        

    }
}