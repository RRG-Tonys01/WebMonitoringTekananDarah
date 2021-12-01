<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function result()
    {
        // return view('home');
        $getHasil = DB::table('rules')
                    ->join('clarifications', 'rules.c_kode', '=', 'clarifications.c_kode')
                    ->where('rulesID', '=', 'R01')
                    ->get();
        // dd($getHasil);
        // dd($getHasil[0]);
        return view('auth.result', ['hasil' => $getHasil]);
    }

    public function aboutIndex()
    {
        return view('about');
    }
}
