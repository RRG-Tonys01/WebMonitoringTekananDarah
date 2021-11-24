@extends('layouts.main')

@section('title', 'Monitoring Tekanan Darah')

@section('css')
<link rel="stylesheet" href="/css/home.css">
    {{-- <link rel="stylesheet" href="/css/navbar.css"> --}}
@endsection

@section('mainbody')
<main class="homeMain">
    <div class="row mx-auto d-flex offset-md-2">
        <div class="col-8">
            <div class="kiriPage">
                <h2><span>Monitoring Tekanan Darah</span></h2>
                <div class="kiriDesc">
                    <img class="img-fluid mx-auto d-flex" src="https://cdn-icons-png.flaticon.com/512/1043/1043132.png" alt="">
                    <hr class="brake mx-auto">
                    <h4>Apa Itu Hipertensi???</h4>
                    <p>
                        Hipertensi adalah suatu gangguan yang terjadi pada pembuluh darah yang dapat menyebabkan suplai oksigen dan nutrisi yang diperlukan oleh tubuh kita menjadi terhambat. Hipertensi sering juga disebut sebagai Silent Killer, penyakit ini termasuk penyakit yang mematikan karena bisa datang tanpa disadari oleh pengidapnya. Pada umumnya, hipertensi biasanya disebabkan oleh keturunan, pola hidup yang tidak sehat, dan juga karena konsumsi berlebihan makanan yang mengandung garam, alkohol, dan berlemak.
                    </p>
                    <div class="quotes">
                        <q><strong>Waspadai Hipertensi Kendalikan Tekanan Darah</strong></q><br>
                        <q><strong>Ayo Kontrol Tekanan Darahmu Sekarang Juga</strong></q><br>
                    </div>
                </div>
                <a href="{{url('/login')}}" class="btn btn-success btn-lg">
                    Kontrol Sekarang
                </a>
            </div>
        </div>
        <div class="col-4">
            <div class="kananPage">
                <h2>About Us</h2>
                <img class="img-fluid mx-auto d-block" src="https://img.freepik.com/free-vector/doctor-character-background_1270-84.jpg?size=338&ext=jpg" alt="">
                <!-- <p><b>Dibuat Oleh:</b></p> -->
                <ul>
                    <li style="text-decoration: none"><b>Dibuat Oleh:</b></li>
                    <li><a href="https://www.linkedin.com/in/edrick-sugiharto-putra-aa07b4164/" target="_blank">Edrick Sugiharto Putra (00000041062)</a></li>
                    <li><a href="https://www.linkedin.com/in/muhammad-rafi-sofyan-5b2464220/" target="_blank">Muhammad Rafi Sofyan (00000037957)</a></li>
                    <li><a href="#" target="_blank">Toni Sembiring (00000040075)</a></li>
                </ul>
                <p>
                    <!-- Makan dulu slurr -->
                    Website ini dibuat untuk memenuhi tugas akhir mata kuliah <strong>IF541-Sistem Pakar</strong>
                </p>
            </div>
        </div>
    </div>
</main>
@endsection




