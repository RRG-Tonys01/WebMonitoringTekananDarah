<?php

namespace App\Http\Controllers;

use App\Models\Control;
use Exception;
use Illuminate\Http\Request;
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

    public function insertData(Request $request)
    {
        $users = DB::table('users')->get();
        $status = DB::table('stats')->get();

        $rules = [
            'beratbadan' => ['required', 'integer'],
            'siastolik' => ['required', 'integer'],
            'diastolik' => ['required', 'integer'],
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect('/dashboard')->withInput()->withErrors($validator);
        } else {
            $data = $request->input();
            try {
                $controlData = new Control;
                $controlData->kode_user = $users->id;
                $controlData->tkn_siastolik = $data['siastolik'];
                $controlData->berat_badan = $data['beratbadan'];
                $controlData->tkn_diastolik = $data['diastolik'];
                if ($data['siastolik'] < 80 or $data['diastolik'] < 60) {
                    $controlData->kode_status = 'L';
                } elseif (($data['siastolik'] >= 80 and $data['siastolik'] <= 119)  and ($data['diastolik'] >= 60 and $data['diastolik'] <= 79)) {
                    $controlData->kode_status = 'N';
                } elseif (($data['siastolik'] >= 120 and $data['siastolik'] <= 139) or ($data['diastolik'] >= 80 and $data['diastolik'] <= 89)) {
                    $controlData->kode_status = 'P';
                } elseif (($data['siastolik'] >= 140 and $data['siastolik'] <= 159) or ($data['diastolik'] >= 90 and $data['diastolik'] <= 99)) {
                    $controlData->kode_status = 'H1';
                } elseif (($data['siastolik'] >= 160 and $data['siastolik'] <= 180) or ($data['diastolik'] >= 100 and $data['diastolik'] <= 110)) {
                    $controlData->kode_status = 'H2';
                } elseif ($data['siastolik'] >= 181 or $data['diastolik'] >= 111) {
                    $controlData->kode_status = 'H3';
                }

                $controlData->save();

                $getControl = DB::table('controls')
                    ->where('controls.kode_user', $users->id)
                    ->orderByDesc('controls.created_at')
                    ->limit(1);
                $getKodeStatus = $getControl->kode_status;

                if ($getKodeStatus == 'L') {
                    return redirect()->intended('/dashboard')->with('Status_L');
                } elseif ($getKodeStatus == 'N') {
                    return redirect()->intended('/dashboard')->with('Status_N');
                } elseif ($getKodeStatus == 'P') {
                    return redirect()->intended('/dashboard')->with('Status_P');
                } elseif ($getKodeStatus == 'H1') {
                    return redirect()->intended('/dashboard')->with('Status_H1');
                } elseif ($getKodeStatus == 'H2') {
                    return redirect()->intended('/dashboard')->with('Status_H2');
                } elseif ($getKodeStatus == 'H3') {
                    return redirect()->intended('/dashboard')->with('Status_H3');
                } else {
                    return redirect()->intended('/dashboard')->with('failed', "Operation Failed!!!");
                }
            } catch (Exception $error) {
                return redirect('auth.dashboard')->with('failed', "Operation Failed!!!");
            }
        }
    }
    public function generateResult(Request $request)
    {
        $credentials = $request->validate([
            'beratbadan' => ['required', 'integer'],
            'siastolik' => ['required', 'integer'],
            'diastolik' => ['required', 'integer'],
        ]);
    }


    public function tester(Request $request)
    {
        // var_dump($request->post());
        $rules = DB::table('rules')->where('gejala', 'G17')->get();
        // foreach($rules as $rule){
        //     echo $rule->gejala;
        // }
        echo $rules;
    }
}
