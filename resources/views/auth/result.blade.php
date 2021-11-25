@extends('/layouts.main')

@section('title', 'Monitor Tekanan Darah')

@section('css')
<link rel="stylesheet" href="/css/dashboard.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@endsection

@section('js')
<script>
    $('#myModal').on('shown.bs.modal', function() {
        $('#myInput').trigger('focus')
    });
</script>
@endsection

@section('mainbody')
<main>
    <div class="container wel1">
        <div class="center formLayout">
            <div class="mx-auto d-flex">

            </div>
            <div class="col-8 mx-auto d-flex">
                <div class="container inputForm input1">
                    <div class="headerForm">
                        <h1 style="color:white; text-align:center;">
                            Hasil inferensi
                        </h1>
                        <hr>
                        <h5 style="color:white; text-align:center;">
                            Disclaimer: Hasil inferensi ini belum tentu sesuai dengan kondisi anda saat ini sebenarnya, untuk mendapatkan hasil yang maksimal silahkan anda kunjungi dokter.
                        </h5>
                        <hr class="dropdown-divider">
                    </div>
                    <div class="container hasilpg">
                        <h2 style="margin-top: 0.5em;">Klasifikasi Tekanan Darah:</h2>
                        <h3>{{$hasil_pakar}}</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. A quod aliquam veniam, nulla id ullam officiis suscipit in quo rem atque autem maiores tempore temporibus!</p>
                        <hr>
                        <div class="container artikel1">
                            <h2>Tips untuk anda:</h2>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore perspiciatis asperiores aperiam obcaecati dolorem aliquam temporibus quis fugiat optio saepe, officia repudiandae ea praesentium! Sequi?</p>
                            <a style="margin-top: 1em;" class="btn btn-outline-primary" href="#">Klik disini!</a>
                        </div>
                    </div>
                    <div class="inputbox bt1">
                        <form action="/dashboard" method="GET">
                            <input type="submit" value="Kembali" data-toogle="modal" data-target="#resultModal">
                        </form>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    @endsection