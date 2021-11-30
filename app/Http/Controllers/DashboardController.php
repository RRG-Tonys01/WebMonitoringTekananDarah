<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $riwayat = DB::table('controls')
                ->select('siastolik', 'diastolik', 'controls.created_at', 'clarifications.c_nama')
                ->join('rules', 'controls.rulesID', '=', 'rules.rulesID')
                ->join('clarifications', 'rules.c_kode', '=', 'clarifications.c_kode')
                ->where('id', '=', Auth::user()->id)
                ->get();
            return view('auth.dashboard', ['riwayat' => $riwayat]);
        }
    }
    public function delhistory(Request $request)
    {
        if(isset($request->DEL))
        {
            $deleted = DB::table('controls')->where('created_at','=',$request->DEL)->where('id','=',Auth::user()->id)->delete();
            // dd($deleted);
        }
        return redirect('/dashboard');
    }
}
