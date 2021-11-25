<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('home');
        // return view('contoh');
    }

    public function result()
    {
        return view('auth.result');
    }
}
