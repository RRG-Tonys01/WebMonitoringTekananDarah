<?php

namespace App\Http\Controllers;

use App\Models\Control as ModelsControl;
use App\Models\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CheckController extends Controller
{
    public function index()
    {
        return view('auth.control');
    }
    public function arraytostrings($s,$d,$array){
        $concon = $s.", ".$d;
        if($array !=null){
            foreach($array as $i){
                $concon = $concon.", ".$i;
            }
        }
        // echo $concon;
        return $concon;
    }
    public function generateResult(Request $request)
    {
        $hasil = $request->validate([
            'siastolik' => ['required'],
            'diastolik' => ['required'],
            'diagnostics' => ['nullable']
        ]);

        // dd($hasil);
        $siastolik = $this->generateSiastolik($hasil['siastolik']);
        $diastolik = $this->generateDiastolik($hasil['diastolik']);
        
        $diag = isset($hasil['diagnostics']) ? $hasil['diagnostics'] : null;
        $oo = $this->arraytostrings($siastolik,$diastolik,$diag);
        $results = Rule::where('d_code', ($oo))->get()->first();
        // dd($results);
        
        if(isset($results)){
            if ($this->insertData($hasil['siastolik'], $hasil['diastolik'], $results['rulesID'])) {
                $getHasil = DB::table('rules')
                    ->join('clarifications', 'rules.c_kode', '=', 'clarifications.c_kode')
                    ->where('rulesID', '=', $results['rulesID'])
                    ->get();
    
                // dd($getHasil);
                return view('auth.result', ['hasil' => $getHasil]);
            }
        } else {
            if ($this->insertData($hasil['siastolik'], $hasil['diastolik'], "None")) {
                $getHasil = DB::table('rules')
                    ->join('clarifications', 'rules.c_kode', '=', 'clarifications.c_kode')
                    ->where('rulesID', '=', "None")
                    ->get();
    
                // dd($getHasil);
                return view('auth.result', ['hasil' => $getHasil]);
            }
            return redirect('/control')->with('error_es', 'Hasil Pakar tidak ditemukan!');
        }
    }

    private function generateSiastolik($siastolik)
    {
        if ($siastolik < 120) {
            return 'G01';
        } else if (($siastolik >= 121 && $siastolik <= 130)) {
            return 'G03';
        } else if (($siastolik >= 130 && $siastolik <= 139)) {
            return 'G05';
        } else if (($siastolik >= 140 && $siastolik <= 159)) {
            return 'G07';
        } else if (($siastolik >= 160 && $siastolik <= 179)) {
            return 'G09';
        } else if (($siastolik >= 180 && $siastolik <= 220)) {
            return 'G11';
        } else if ($siastolik > 220) {
            return 'G13';
        }
        return 'Input tidak Dikenali';
    }

    private function generateDiastolik($diastolik)
    {
        if ($diastolik < 80) {
            return 'G02';
        } else if (($diastolik >= 81 && $diastolik <= 85)) {
            return 'G04';
        } else if (($diastolik >= 85 && $diastolik <= 89)) {
            return 'G06';
        } else if (($diastolik >= 90 && $diastolik <= 99)) {
            return 'G08';
        } else if (($diastolik >= 100 && $diastolik <= 109)) {
            return 'G10';
        } else if (($diastolik >= 110 && $diastolik <= 140)) {
            return 'G12';
        } else if ($diastolik > 140) {
            return 'G14';
        } else {
            return 'Input tidak Dikenali';
        }
    }

    public function insertData($siastolik, $diastolik, $rules)
    {
        // if ($rules == 'None') {
        //     return false;
        // } else {
            $control = new ModelsControl();
            $control->id = Auth::user()->id;
            $control->siastolik = $siastolik;
            $control->diastolik = $diastolik;
            $control->rulesID = $rules;
            $control->tanggal = '2021-11-10';
            $control->save();
            return true;
        // }
    }
}
