<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class cekuserpenugasan
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $data = DB::table('users')
        ->join('penugasan', 'penugasan.id_petugas', '=', 'users.id')
        ->select('penugasan.id_petugas')
        ->where('penugasan.id', '=', $request->id)
        ->first();
        if($data == null){
            return redirect()->back();
        }
        if($data->id_petugas != Auth::user()->id){
            
            return redirect()->back();
         }
         
        return $next($request);
    }
}