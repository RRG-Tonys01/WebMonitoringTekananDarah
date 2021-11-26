<?php

namespace App\Http\Controllers;

use App\Models\Control;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return view('auth.dashboard');
        }
    }

    public function tester(Request $request)
    {
        // var_dump($request->post());
        // var_dump($this->generateGejala(119, 80, 13));
        $siastolik = (int)$request->post()['siastolik'];
        $diastolik = (int)$request->post()['diastolik'];
        $result = array(
            [
                'G01' => $this->generateGejala($siastolik, $diastolik, 1),
                'G02' => $this->generateGejala($siastolik, $diastolik, 2),
                'G03' => $this->generateGejala($siastolik, $diastolik, 3),
                'G04' => $this->generateGejala($siastolik, $diastolik, 4),
                'G05' => $this->generateGejala($siastolik, $diastolik, 5),
                'G06' => $this->generateGejala($siastolik, $diastolik, 6),
                'G07' => $this->generateGejala($siastolik, $diastolik, 7),
                'G08' => $this->generateGejala($siastolik, $diastolik, 8),
                'G09' => $this->generateGejala($siastolik, $diastolik, 9),
                'G10' => $this->generateGejala($siastolik, $diastolik, 10),
                'G11' => $this->generateGejala($siastolik, $diastolik, 11),
                'G12' => $this->generateGejala($siastolik, $diastolik, 12),
                'G13' => $this->generateGejala($siastolik, $diastolik, 13),
                'G14' => $this->generateGejala($siastolik, $diastolik, 14),
                'G15' => (int)isset($request->post()['G15']),
                'G16' => (int)isset($request->post()['G16']),
                'G17' => (int)isset($request->post()['G17']),
                'G18' => (int)isset($request->post()['G18']),
                'G19' => (int)isset($request->post()['G19']),
                'G20' => (int)isset($request->post()['G20']),
                'G21' => (int)isset($request->post()['G21']),
                'G22' => (int)isset($request->post()['G22']),
                'G23' => (int)isset($request->post()['G23']),
                'G24' => (int)isset($request->post()['G24']),
                'G25' => (int)isset($request->post()['G25'])
            ]
        );
        // var_dump($result);

        // $rules = DB::table('rules')->where('gejala', 'G17')->get();
        $rules = DB::table('rules')->get();
        $kesimpulan = DB::table('Klasifikasis')->get();

        foreach ($rules as $rule) {
            if (
                $rule->G01 == $result[0]['G01'] &&
                $rule->G02 == $result[0]['G02'] &&
                $rule->G03 == $result[0]['G03'] &&
                $rule->G04 == $result[0]['G04'] &&
                $rule->G05 == $result[0]['G05'] &&
                $rule->G06 == $result[0]['G06'] &&
                $rule->G07 == $result[0]['G07'] &&
                $rule->G08 == $result[0]['G08'] &&
                $rule->G09 == $result[0]['G09'] &&
                $rule->G10 == $result[0]['G10'] &&
                $rule->G11 == $result[0]['G11'] &&
                $rule->G12 == $result[0]['G12'] &&
                $rule->G13 == $result[0]['G13'] &&
                $rule->G14 == $result[0]['G14'] &&
                $rule->G15 == $result[0]['G15'] &&
                $rule->G16 == $result[0]['G16'] &&
                $rule->G17 == $result[0]['G17'] &&
                $rule->G18 == $result[0]['G18'] &&
                $rule->G19 == $result[0]['G19'] &&
                $rule->G20 == $result[0]['G20'] &&
                $rule->G21 == $result[0]['G21'] &&
                $rule->G22 == $result[0]['G22'] &&
                $rule->G23 == $result[0]['G23'] &&
                $rule->G24 == $result[0]['G24'] &&
                $rule->G25 == $result[0]['G25']
            ) {
                foreach ($kesimpulan as $kk) {
                    if ("K0" . $rule->K_id == $kk->k_kode) {
                        // echo $kk->k_nama;
                        return view('auth.result', ['hasil_pakar' => $kk->k_nama]);
                    }
                }

                break;
            } else {
                // echo "NPO";
            }
        }
        return view('auth.result', ['hasil_pakar' => "Tidak Di Temukan"]);
        // echo $result[0]['G01'];
        // return view('auth.result', $result);
        // echo $rules;
    }

    public function generateGejala($siastolik, $diastolik, $gcode)
    {
        if ($siastolik < 120 && $gcode == 1) {
            return 1;
        } else if (($siastolik >= 121 && $siastolik <= 130) && $gcode == 3) {
            return 1;
        } else if (($siastolik >= 130 && $siastolik <= 139) && $gcode == 5) {
            return 1;
        } else if (($siastolik >= 140 && $siastolik <= 159) && $gcode == 7) {
            return 1;
        } else if (($siastolik >= 160 && $siastolik <= 179) && $gcode == 9) {
            return 1;
        } else if (($siastolik >= 180 && $siastolik <= 220) && $gcode == 11) {
            return 1;
        } else if ($siastolik > 220 && $gcode == 13) {
            return 1;
        }

        if ($diastolik < 80 && $gcode == 2) {
            return 1;
        } else if (($diastolik >= 81 && $diastolik <= 85) && $gcode == 4) {
            return 1;
        } else if (($diastolik >= 85 && $diastolik <= 89) && $gcode == 6) {
            return 1;
        } else if (($diastolik >= 90 && $diastolik <= 99) && $gcode == 8) {
            return 1;
        } else if (($diastolik >= 100 && $diastolik <= 109) && $gcode == 10) {
            return 1;
        } else if (($diastolik >= 110 && $diastolik <= 140) && $gcode == 12) {
            return 1;
        } else if ($diastolik > 140 && $gcode == 14) {
            return 1;
        }
        return 0;
    }




    // public function insertData(Request $request)
    // {
    //     $users = DB::table('users')->get();
    //     $status = DB::table('stats')->get();

    //     $rules = [
    //         'beratbadan' => ['required', 'integer'],
    //         'siastolik' => ['required', 'integer'],
    //         'diastolik' => ['required', 'integer'],
    //     ];

    //     $validator = Validator::make($request->all(), $rules);
    //     if ($validator->fails()) {
    //         return redirect('/dashboard')->withInput()->withErrors($validator);
    //     } else {
    //         $data = $request->input();
    //         try {
    //             $controlData = new Control;
    //             $controlData->kode_user = $users->id;
    //             $controlData->tkn_siastolik = $data['siastolik'];
    //             $controlData->berat_badan = $data['beratbadan'];
    //             $controlData->tkn_diastolik = $data['diastolik'];
    //             if ($data['siastolik'] < 80 or $data['diastolik'] < 60) {
    //                 $controlData->kode_status = 'L';
    //             } elseif (($data['siastolik'] >= 80 and $data['siastolik'] <= 119)  and ($data['diastolik'] >= 60 and $data['diastolik'] <= 79)) {
    //                 $controlData->kode_status = 'N';
    //             } elseif (($data['siastolik'] >= 120 and $data['siastolik'] <= 139) or ($data['diastolik'] >= 80 and $data['diastolik'] <= 89)) {
    //                 $controlData->kode_status = 'P';
    //             } elseif (($data['siastolik'] >= 140 and $data['siastolik'] <= 159) or ($data['diastolik'] >= 90 and $data['diastolik'] <= 99)) {
    //                 $controlData->kode_status = 'H1';
    //             } elseif (($data['siastolik'] >= 160 and $data['siastolik'] <= 180) or ($data['diastolik'] >= 100 and $data['diastolik'] <= 110)) {
    //                 $controlData->kode_status = 'H2';
    //             } elseif ($data['siastolik'] >= 181 or $data['diastolik'] >= 111) {
    //                 $controlData->kode_status = 'H3';
    //             }

    //             $controlData->save();

    //             $getControl = DB::table('controls')
    //                 ->where('controls.kode_user', $users->id)
    //                 ->orderByDesc('controls.created_at')
    //                 ->limit(1);
    //             $getKodeStatus = $getControl->kode_status;

    //             if ($getKodeStatus == 'L') {
    //                 return redirect()->intended('/dashboard')->with('Status_L');
    //             } elseif ($getKodeStatus == 'N') {
    //                 return redirect()->intended('/dashboard')->with('Status_N');
    //             } elseif ($getKodeStatus == 'P') {
    //                 return redirect()->intended('/dashboard')->with('Status_P');
    //             } elseif ($getKodeStatus == 'H1') {
    //                 return redirect()->intended('/dashboard')->with('Status_H1');
    //             } elseif ($getKodeStatus == 'H2') {
    //                 return redirect()->intended('/dashboard')->with('Status_H2');
    //             } elseif ($getKodeStatus == 'H3') {
    //                 return redirect()->intended('/dashboard')->with('Status_H3');
    //             } else {
    //                 return redirect()->intended('/dashboard')->with('failed', "Operation Failed!!!");
    //             }
    //         } catch (Exception $error) {
    //             return redirect('auth.dashboard')->with('failed', "Operation Failed!!!");
    //         }
    //     }
    // }
}
