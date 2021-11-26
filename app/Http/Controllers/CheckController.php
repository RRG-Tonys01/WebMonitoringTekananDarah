<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckController extends Controller
{
    public function index()
    {
        return view('auth.control');
    }

    public function generateResult(Request $request)
    {
        $hasil = $request->validate([
            'siastolik' => ['required'],
            'diastolik' => ['required'],
            'g15' => ['accepted'],
            'g16' => ['accepted'],
            'g17' => ['accepted'],
            'g18' => ['accepted'],
            'g19' => ['accepted'],
            'g20' => ['accepted'],
            'g21' => ['accepted'],
            'g22' => ['accepted'],
            'g23' => ['accepted'],
            'g24' => ['accepted'],
            'g25' => ['accepted'],
        ]);
    }

    public function insertData()
    {
    }
}
