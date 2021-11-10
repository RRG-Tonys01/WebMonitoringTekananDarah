{{-- @extends('layouts.main')

@section('title', 'Sistem Pakar')

@section('navbar')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
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
</nav>
@endsection --}}

@extends('layouts.main')

@section('title', 'Monitoring Tekanan Darah')

@section('css')
    <link rel="stylesheet" href="/css/home.css">
    <link rel="stylesheet" href="/css/navbar.css">
@endsection

@section('mainbody')
<div class="container">
    <div class="content">
        <h1>Judul Apalah Itu</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem neque possimus nam nihil? Optio nam culpa dignissimos, a ut eligendi iusto inventore doloremque iure odit quas! Ab esse aut laborum!</p>
    </div>
    <img src="/images/doctor.png" alt="Doctor" width="200px" height="100%">
</div>

<footer>
  <div class="row">

    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="/images/doctor.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Article</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="{{url('/article')}}" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="/images/doctor.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Article</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="{{url('/article')}}" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="/images/doctor.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Article</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="{{url('/article')}}" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
  </div>
</footer>
@endsection



