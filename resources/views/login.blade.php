@extends('layouts.main')

@section('title', 'Login Page')

@section('css')
    <link rel="stylesheet" href="/css/login.css">
@endsection

{{-- @section('navbar')
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{ url('/login')}}">Login</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
@endsection --}}

@section('mainbody')
    <div class="container judulLaman mx-auto d-flex">
        {{-- <div class="row ">
            <h1>Hello World</h1>
        </div> --}}
        <div class="row">
            <img src="/images/bloodIcon.jpeg" alt="Blood Icon" class="bloodIcon">
            <div class="col">
                <h1 class="judulAplikasi lol">Monitoring Tekanan Darah</h1>
            </div>
        </div>

    </div>

    <div class="container formLogin mx-auto d-flex">
        <div class="container">
            <form>
                <div class="form-group">
                    <label for="Username" class=>Username</label>
                    <input type="text" class="form-control" id="username" placeholder="Enter Username">
                </div>
                <div class="form-group">
                    <label for="Password lableLogin">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Password">
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection



