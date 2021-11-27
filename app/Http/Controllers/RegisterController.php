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
            'username' => ['require', 'min:6', 'max:15', 'unique:users'],
            'nama' => ['require', 'max:50'],
            'jenis_kelamin' => ['require'],
            'tanggalLahir' => ['require'],
            'password' => ['require', 'min:8'],
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);
        // $validatedData['password'] = Hash::make($validatedData['password']);

        // $users = new User;
        // $users->username = $request->username;
        // $users->nama = $request->nama;
        // $users->jenis_kelamin = $request->jk;
        // $users->tanggal_lahir = $request->tanggalLahir;
        // $users->password = bcrypt($request->password);

        // User::created($validatedData);
        dd("register berhasil");
        // $request->session()->flash('successRegister', 'Register Berhasil!! Silahkan Login untuk melanjutkan');
        return redirect('/login')->with('successRegister', 'Register Berhasil!! Silahkan Login untuk melanjutkan');
    }
}
