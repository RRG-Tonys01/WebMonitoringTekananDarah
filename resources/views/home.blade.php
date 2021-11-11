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
    <div class="row">
        <div class="col-8 content">
            <h1>Monitoring Tekanan Darah Anda</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit magni praesentium quisquam deserunt quo voluptatibus similique officia, enim maiores dicta magnam nam. Sed, voluptate? Reiciendis necessitatibus repellendus error est suscipit.</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolore beatae, aspernatur aliquid sunt dicta odit aliquam suscipit veritatis doloremque modi perspiciatis laboriosam tempore ratione quia. Quia nemo sed autem nam.</p>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis animi, esse odio repellat quis modi quos recusandae hic quam consequuntur amet cupiditate architecto officiis fugit quas. Animi laboriosam ut facere.</p>
        </div>
        <div class="col-4">
            <img src="/images/tensimeter.png" alt="Tensi Meter">
        </div>
    </div>
</div>

<footer>
    <div class="container">
        <div class="row">
            <h3>Copyright Gamma-7</h3>
        </div>
    </div>
</footer>
{{-- <div class="container desc">
    <div class="content">
        <h1>Selamat Datang</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor, dignissimos rem. Dolores, corporis voluptas officiis nesciunt beatae suscipit reiciendis error laudantium maiores ab, qui, placeat doloremque unde officia? Odit, earum!</p>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere in id hic nulla cumque rem facilis explicabo. Sequi consequatur earum sapiente vitae neque corporis delectus? Beatae autem dolor enim accusantium.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni odio minus assumenda eum ducimus eveniet, totam maxime optio vel veniam natus atque repellendus aliquam itaque. Quis inventore consequatur sequi quas?</p>
    </div>
    <img src="/images/doctor.png" alt="Doctor">
</div> --}}
{{-- <img alt="" src="/images/doctor.png" />


{{-- <footer>
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
</footer> --}}
@endsection



