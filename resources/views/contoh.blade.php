@extends('layouts.main')

@section('title', 'Testing')

@section('css')
<link rel="stylesheet" href="/css/test.css">
@endsection

@section('mainbody')
<main class="center">
    <div class="container leftContent">
        <article>
            <h3 class="judulPage">Monitoring Tekanan Darah</h3>
            <h4>Apa Itu Hipertensi???</h4>
            <p>
                Hipertensi adalah suatu gangguan yang terjadi pada pembuluh darah yang dapat menyebabkan suplai oksigen dan nutrisi yang diperlukan oleh tubuh kita menjadi terhambat. Hipertensi sering juga disebut sebagai Silent Killer, penyakit ini termasuk penyakit yang mematikan karena bisa datang tanpa disadari oleh pengidapnya. Pada umumnya, hipertensi biasanya disebabkan oleh keturunan, pola hidup yang tidak sehat, dan juga karena konsumsi berlebihan makanan yang mengandung garam, alkohol, dan berlemak.
            </p>
            <strong><q>Waspadai Hipertensi Kendalikan Tekanan Darah</q></strong><br>
            <strong><q>Ayo Kontrol Tekanan Darahmu Sekarang Juga</q></strong><br>
            <a href="{{url('/login')}}" type="button" class="btn btn-primary"> Kontrol Sekarang</a>
        </article>
    </div>
    <div class="container rightContent">
        <img src="/images/doctor.png" alt="Dokter Hewan">
    </div>
</main>
@endsection
