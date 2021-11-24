@extends('layouts.main')

@section('title', 'Testing')

@section('css')
<link rel="stylesheet" href="/css/test.css">
@endsection

@section('mainbody')
<div class="hold">
    <div class="header">
      <div class="container">
        <div id="logo">
            <h3 style="text-align: center">Blood Control</h3>
        </div>
        <ul class="nav">
          <li><a href="{{url('/')}}">Home</a></li>
          <li><a href="{{url('/about')}}">About</a></li>
          <li><a href="{{url('/login')}}">Login</a></li>
          {{-- <li><a href="#">Wow</a></li> --}}
        </ul>
      </div>
    </div>
  </div>
  <div class="section">
    {{-- <img class="img-fluid mx-auto d-flex" src="https://cdn-icons-png.flaticon.com/512/1043/1043132.png" alt=""> --}}
    <div class="slider">
      <div class="container slidercontent">
        <h1 class="hero">Monitoring Tekanan Darah</h1>
        <h2 class="hero">Ayo Kontrol Tekanan Darahmu Sekarang Juga</h2>
        <div class="call"><span><a href="{{ url('/login')}}"> Kontrol Sekarang </a></span></div>
      </div>
    </div>
  </div>
  <div class="section">
    <div class="container">
        <h1 class="service">Apa Itu Hipertensi???</h1>
        <hr class="brake mx-auto">
        <p> Hipertensi adalah suatu gangguan yang terjadi pada pembuluh darah yang dapat menyebabkan suplai oksigen
            dan nutrisi yang diperlukan oleh tubuh kita menjadi terhambat. Hipertensi sering juga disebut sebagai Silent Killer,
            penyakit ini termasuk penyakit yang mematikan karena bisa datang tanpa disadari oleh pengidapnya. Pada umumnya,
            hipertensi biasanya disebabkan oleh keturunan, pola hidup yang tidak sehat, dan juga karena konsumsi berlebihan
            makanan yang mengandung garam, alkohol, dan berlemak.
        </p>
      </div>
      {{-- <div class="col four">
        <h1 class="icon">[]</h1>
        <h1 class="service">Wow</h1>
        <p>Wow wow wow wow wow wow wow wow wow</p>
      </div>
      <div class="responsivegroup"></div>
      <div class="col four">
        <h1 class="icon">[]</h1>
        <h1 class="service">Wow</h1>
        <p>Wow wow wow wow wow wow wow wow wow wow wow</p>
      </div>
      <div class="col four">
        <h1 class="icon">[]</h1>
        <h1 class="service">Wow</h1>
        <p>Wow wow wow wow wow wow wow</p>
      </div> --}}

      <div class="group"></div>
    </div>
  </div>


  <div class="section bg">
    <div class="container">
      <h1>Klasifikasi Tekanan Darah</h1>
      <div class="col two bg margin extrapad">
        <h1 class="icon side"><i src=""></i></h1>
        <span class="feature side">Normal - 120/80 mmHg </span><span class="side"> </span>
      </div>
      {{-- <div class="col two bg margin extrapad">
        <h1 class="icon side">[]</h1>
        <span class="feature side">Wow wow</span><span class="side"> - Wow wow</span>
        <p class="side">Wow wow wow wow wow wow wow wow wow wow wow wow wow wow wow wow wow wow wow wow wow wow wow</p>
      </div>
      <div class="group margin"></div>
      <div class="col two bg margin extrapad">
        <h1 class="icon side">[]</h1>
        <span class="feature side">Wow wow</span><span class="side"> - Wow</span>
        <p class="side">Wow wow wow wow wow wow wow wow wow wow wow wow wow wow wow</p>
      </div>
      <div class="col two bg margin extrapad">
        <h1 class="icon side">[]</h1>
        <span class="feature side">Wow</span><span class="side"> - Wow wow</span>
        <p class="side">Wow wow wow wow wow wow wow wow wow wow wow wow wow wow wow wow wow wow wow wow wow wow</p>
      </div> --}}
      <div class="group"></div>
    </div>
  </div>


  <div class="section bg">
    <div class="container">
      <h1>About Us</h1>
      <h2>Gamma 7</h2>
      <div class="col three bg nopad pointer">
        <div class="imgholder">
        </div>
        <h1 class="feature">Edrick Sugihatro Putra</h1>
        <p>00000041062</p>
      </div>
      <div class="col three bg nopad pointer">
        <div class="imgholder"></div>
        <h1 class="feature">Muhammad Rafi Sofyan</h1>
        <p>00000037957</p>
      </div>
      <div class="col three bg nopad pointer">
        <div class="imgholder"></div>
        <h1 class="feature">Toni Sembiring</h1>
        <p>00000040075</p>
      </div>
    </div>
  </div>
  <div class="section">
    <div class="container">
      <h1>Wow? Wow wow wow wow!</h1>
      <h2>Wow</h2>
      <div class="col three">
        <h1 class="icon side">[]</h1>
        <h1 class="feature side">Wow</h1>
        <p class="side">Wow wow wow wow wow wow wow wow wow wow wow wow wow</p>
      </div>
      <div class="col three">
        <h1 class="icon side">[]</h1>
        <h1 class="feature side">Wow</h1>
        <p class="side">Wow wow wow wow wow wow wow wow</p>
      </div>
      <div class="col three">
        <h1 class="icon side">[]</h1>
        <h1 class="feature side">Wow</h1>
        <p class="side">Wow wow wow wow wow wow wow wow wow wow wow</p>
      </div>
      <div class="group margin"></div>
      <div class="col three">
        <h1 class="icon side">[]</h1>
        <h1 class="feature side">Wow</h1>
        <p class="side">Wow wow wow wow wow wow wow</p>
      </div>
      <div class="col three">
        <h1 class="icon side">[]</h1>
        <h1 class="feature side">Wow</h1>
        <p class="side">Wow wow wow wow wow wow wow wow</p>
      </div>
      <div class="col three">
        <h1 class="icon side">[]</h1>
        <h1 class="feature side">Wow</h1>
        <p class="side">Wow wow wow wow wow wow wow wow</p>
      </div>
      <div class="group margin"></div>
    </div>
  </div>
  {{-- <div class="section bg">
    <div class="container">
      <h1>Wow</h1>
      <h2>Wow wow wow wow</h2>
      <div class="col two bg margin extrapad">
        <h1 class="icon side">[]</h1>
        <span class="feature side">Wow</span><span class="side"> - Wow wow wow</span>
        <p class="side">Wow wow wow wow wow wow wow wow wow wow wow wow wow wow wow wow wow wow wow wow</p>
      </div>
      <div class="col two bg margin extrapad">
        <h1 class="icon side">[]</h1>
        <span class="feature side">Wow wow</span><span class="side"> - Wow wow</span>
        <p class="side">Wow wow wow wow wow wow wow wow wow wow wow wow wow wow wow wow wow wow wow wow wow wow wow</p>
      </div>
      <div class="group margin"></div>
      <div class="col two bg margin extrapad">
        <h1 class="icon side">[]</h1>
        <span class="feature side">Wow wow</span><span class="side"> - Wow</span>
        <p class="side">Wow wow wow wow wow wow wow wow wow wow wow wow wow wow wow</p>
      </div>
      <div class="col two bg margin extrapad">
        <h1 class="icon side">[]</h1>
        <span class="feature side">Wow</span><span class="side"> - Wow wow</span>
        <p class="side">Wow wow wow wow wow wow wow wow wow wow wow wow wow wow wow wow wow wow wow wow wow wow</p>
      </div>
      <div class="group"></div>
    </div>
  </div> --}}
  <div class="section">
    <div class="container">
      <div class="col two">
        <h1 class="icon">[]</h1>
        <h1 class="service">Wow</h1>
        <p>Wow wow wow wow wow wow wow wow wow wow wow wow wow</p>
      </div>
      <div class="col two">
        <h1 class="icon">[]</h1>
        <h1 class="service">Wow</h1>
        <p>Wow wow wow wow wow wow wow wow wow</p>
      </div>
      <div class="group"></div>
    </div>
  </div>
  <div class="section">
    <div class="container">
      <h1 class="reset">Terrible.</h1>
    </div>
  </div>
  <div class="section">
    <div class="footer">
      <div class="container white">
        <div class="col four left">
          <h1>What?</h1>
          <p>So that's it. This started out as 20 minutes of making fun of modern web dev. Then it turned into a few hours of it.</p>
          <p>I hope you've enjoyed looking at every modern website ever.</p>
          <p>I don't actually hate this style as long as the content is meaningful. In fact, I think this type of design is pretty cool and effective.</p>
        </div>
        <div class="col four left">
          <h1>How?</h1>
          <p>CSS3 and HTML. JS for header shrinking; optional. Site works perfectly with JS disabled (another gripe of mine with modern web dev).</p>
          <p>Only external libraries are GFonts.</p>
          <p>Moderately responsive, should work on anything modern.</p>
        </div>
        <div class="col four left">
          <h1>Why?</h1>
          <p>Many popular HTML themes have thousands of lines of HTML, thousands of lines of CSS and several JS plugins on every page amounting to tens of thousands of lines of JavaScript.</p>
          <p>I fail to see a valid reason for this, particularly the horrendous line counts that are usually due to unused features or badly designed code.</p>
        </div>
        <div class="col four left">
          <h1>Who?</h1>
          <p>I'm Andrew.</p>
          <p>You can get in touch with me through <a href="http://atunnecliffe.com">http://atunnecliffe.com</a> or <a href="mailto:andrew@atunnecliffe.com">emailing me</a>.</p>
        </div>
        <div class="group"></div>
      </div>
    </div>
  </div>
@endsection
