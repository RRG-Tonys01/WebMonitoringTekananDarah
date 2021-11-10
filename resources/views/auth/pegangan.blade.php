@extends('layouts.main')

@section('title', 'Login Page')

@section('css')
    <link rel="stylesheet" href="/css/login.css">
@endsection

@section('mainbody')
    <div class="container judulLaman mx-auto d-flex">
        <div class="row">
            <img src="/images/bloodIcon.jpeg" alt="Blood Icon" class="bloodIcon">
            <div class="col">
                <h1 class="judulAplikasi">Monitoring Tekanan Darah</h1>
            </div>
        </div>
    </div>

    <div class="container formLogin mx-auto d-flex">
        <div class="container">
            <form method="POST" action="{{ route('login.custom') }}">
                @csrf
                <div class="form-group mb-3">
                    <label for="Username" class=>Username</label>
                    <input type="text" class="form-control" id="username" placeholder="Enter Username" required autofocus>
                    @if($errors->has('username'))
                    <span class="text-danger">{{ $errors->first('username') }}</span>
                    @endif
                </div>
                <div class="form-group mb-3">
                    <label for="Password lableLogin">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Password" required>
                    @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection



