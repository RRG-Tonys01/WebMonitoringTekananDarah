@extends('/layouts.main')

@section('title', 'Result')

@section('css')
<link rel="stylesheet" href="/css/result.css">
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
    <div class="container wel1 mt-5">
        <div class="center formLayout">
            <div class="mx-auto d-flex">

            </div>
            <div class="col-10 mx-auto d-flex">
                <div class="container inputForm input1">
                    <div class="headerForm">
                        <h1 style="text-align:center;">
                            Hasil inferensi
                        </h1>
                        <hr>
                        <h6 style="text-align:center; padding:0.5em;">
                            Disclaimer: Hasil inferensi ini belum tentu sesuai dengan kondisi anda saat ini sebenarnya, untuk mendapatkan hasil yang maksimal silahkan anda kunjungi dokter.
                        </h6>
                        <h6 style="text-align:center; padding:0.5em;">
                            Jika anda merasa tekanan darah anda tinggi secara tiba-tiba, silakan coba lakukan pengetesan ulang setelah menenangkan diri sejenak
                        </h6>
                    </div>
                    <div class="container hasilpg">
                        <div class="hasilpgHead">
                            <h2 style="margin-top: 0.5em;">Klasifikasi Tekanan Darah:</h2>
                        </div>
                        <div class="container artikel1">
                            <h3>
                                {{$hasil[0]->c_nama}}
                            </h3>
                            <hr>
                            <p>{{$hasil[0]->c_desc}}</p>
                            <p>Terkait dengan kondisi tekanan darah anda, kami menyiapkan sedikit tips yang dapat anda lihat</p>

                            <p>Klik button dibawah untuk melihat artikel tentang kondisi tekanan darah anda:</p>
                            <a style="margin-top: 1em;" class="btn btn-outline-primary" href="{{$hasil[0]->c_href}}">Klik disini!</a>
                        </div>
                    </div>
                    <div class="inputbox bt1">
                            <a href="/dashboard" class="btn btn-primary btn-lg">Kembali</a>
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
