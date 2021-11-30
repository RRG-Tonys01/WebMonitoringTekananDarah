<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.register');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'username' => ['required', 'min:0', 'max:15', 'unique:users'],
            'nama' => ['required', 'max:50'],
            'gender' => ['required'],
            'ttl' => ['required'],
            'password' => ['required', 'min:8'],
            // 'weight' => ['required'],
        ]);

        // $validatedData['password'] = bcrypt($validatedData['password']);
        // $validatedData['password'] = Hash::make($validatedData['password']);

        $users = new User;
        $users->username = $request->username;
        $users->nama = $request->nama;
        $users->jenis_kelamin = $request->gender;
        $users->tanggal_lahir = $request->ttl;
        $users->password = $request->password;
        $users->save();
        // User::created($validatedData);
        // dd(User::created($validatedData));
        // dd("register berhasil");
        // $request->session()->flash('successRegister', 'Register Berhasil!! Silahkan Login untuk melanjutkan');
        return redirect('/login')->with('successRegister', 'Register Berhasil! Silahkan Login');
    }
}
