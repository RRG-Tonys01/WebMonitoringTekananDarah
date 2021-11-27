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

        $rules = 'None';

        if ($siastolik == 'G01' && $diastolik == 'G02') {
            if (Rule::where('d_code', ($siastolik . ", " . $diastolik))->exists()) {
                $rules = 'R01';
            }
        } elseif ($siastolik == 'G03' && $diastolik == 'G04') {
            if (Rule::where('d_code', ($siastolik . ", " . $diastolik))->exists()) {
                $rules = 'R02';
            }
        } elseif ($siastolik == 'G05' && $diastolik == 'G06') {
            if (in_array('G17', $hasil['diagnostics'])) {
                if (Rule::where('d_code', ($siastolik . ", " . $diastolik . ", G17"))->exists()) {
                    $rules = 'R03';
                }
            }
        } elseif ($siastolik == 'G07' && $diastolik == 'G08') {
            if (in_array('G15, G17', $hasil['diagnostics'])) {
                if (Rule::where('d_code', ($siastolik . ", " . $diastolik . ", G15, G17"))->exists()) {
                    $rules = 'R04';
                }
            }
        } elseif ($siastolik == 'G09' && $diastolik == 'G10') {
            if (in_array('G15, G16, G17', $hasil['diagnostics'])) {
                if (Rule::where('d_code', ($siastolik . ", " . $diastolik . ", G15, G16, G17"))->exists()) {
                    $rules = 'R05';
                }
            }
        } elseif ($siastolik == 'G09' && $diastolik == 'G10') {
            if (in_array('G15, G16, G17', $hasil['diagnostics'])) {
                if (Rule::where('d_code', ($siastolik . ", " . $diastolik . ", G15, G16, G17"))->exists()) {
                    $rules = 'R05';
                }
            }
        } elseif ($siastolik == 'G11' && $diastolik == 'G12') {
            if (in_array('G15, G16, G20', $hasil['diagnostics'])) {
                if (Rule::where('d_code', ($siastolik . ", " . $diastolik . ", G15, G16, G20"))->exists()) {
                    $rules = 'R06';
                }
            }
        } elseif ($siastolik == 'G11' && $diastolik == 'G12') {
            if (in_array('G21, G22', $hasil['diagnostics'])) {
                if (Rule::where('d_code', ($siastolik . ", " . $diastolik . ", G21, G22"))->exists()) {
                    $rules = 'R07';
                }
            }
        } elseif ($siastolik == 'G13' && $diastolik == 'G14') {
            if (in_array('G18, G22, G23, G24, G25', $hasil['diagnostics'])) {
                if (Rule::where('d_code', ($siastolik . ", " . $diastolik . ", G18, G22, G23, G24, G25"))->exists()) {
                    $rules = 'R08';
                }
            }
        } else {
            $rules = 'None';
        }

        if ($this->insertData($hasil['siastolik'], $hasil['diastolik'], $rules)) {
            $getHasil = DB::table('rules')
                ->select('clarifications.c_nama')
                ->join('clarifications', 'rules.c_kode', '=', 'clarifications.c_kode')
                ->where('rulesID', '=', $rules)
                ->get();

            // dd($getHasil);
            return view('auth.result', ['hasil' => $getHasil]);
        } else {
            return view('auth.control')->with('Input Failed', 'message');
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
        if ($rules == 'None') {
            return false;
        } else {
            $control = new ModelsControl();
            $control->id = Auth::user()->id;
            $control->siastolik = $siastolik;
            $control->diastolik = $diastolik;
            $control->rulesID = $rules;
            $control->tanggal = '2021-11-10';
            $control->save();
            return true;
        }
    }
}
