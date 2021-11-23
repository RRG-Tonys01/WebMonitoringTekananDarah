@extends('/layouts.main')

@section('title', 'Monitor Tekanan Darah')

@section('css')
<link rel="stylesheet" href="/css/sidebars.css">
<link rel="stylesheet" href="/css/dashboard.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@endsection

@section('js')
<script>
$('#myModal').on('shown.bs.modal', function () {
$('#myInput').trigger('focus')
});
</script>
@endsection

@section('mainbody')
<main>
<aside>
    <div class="area"></div>
    <nav class="main-menu">
        <ul>
            <li>
                <a href="{{url('/dashboard')}}">
                    <i class="fa fa-home fa-2x"></i>
                    <span class="nav-text">
                        Dashboard
                    </span>
                </a>
            </li>
            <li>
                <a href="{{url('/dashboard')}}">
                    <i class="fa fa-heart fa-2x"></i>
                    {{-- <i class="material-icons"></i> --}}
                    <span class="nav-text">
                        Riwayat
                    </span>
                </a>
            </li>
        </ul>
        <ul class="logout">
            <li>
                <a href="{{url('/logout')}}">
                        <i class="fa fa-power-off fa-2x"></i>
                    <span class="nav-text">
                        Logout
                    </span>
                </a>
            </li>   
        </ul>
    </nav>
</aside>

    

    <div class="container">
    <div class="row mx-auto d-flex dashboard">
    <div class="container welcome">
        <h1>Welcome, {{Auth::user()->nama;}}</h1>
    </div>
    <div class="center formLayout">
        <div class=" mx-auto d-flex">
            <div class="col-4">
                <div class="container mx-auto d-flex tes">
                    <div class="continer history">
                        <h2>
                            Riwayat Pengecekan
                        </h2>
                        <hr>
                    <div class="itemH">
                        <div class="container hist1">
                                <p>Tanggal: mm/dd/yyyy</p>
                                <p>Tekanan Sistolik : xx mmHg</p>
                                <p>Tekanan Diastolik: xx mmHg</p>
                                <p>Klasifikasi: N</p>
                        </div>
                        <div class="container hist1">
                                <p>Tanggal: mm/dd/yyyy</p>
                                <p>Tekanan Sistolik : xx mmHg</p>
                                <p>Tekanan Diastolik: xx mmHg</p>
                                <p>Klasifikasi: N</p>
                        </div>
                        <div class="container hist1">
                                <p>Tanggal: mm/dd/yyyy</p>
                                <p>Tekanan Sistolik : xx mmHg</p>
                                <p>Tekanan Diastolik: xx mmHg</p>
                                <p>Klasifikasi: N</p>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-6 offset-sm-1">
                <div class="container inputForm input1">
                    <div class="headerForm">
                        <h2>
                            Masukkan Tekanan Darah Anda
                        </h2>
                        <hr class="dropdown-divider">
                    </div>

                    <form method="POST" action="{{url('/dashboard')}}">
                        @csrf
                        <div class="inputbox">
                            <label for="siastolik">Tekanan Darah Siastolik Saat Ini :</label>
                            <input type="text" name="siastolik" id="siastolik" placeholder="Input Tekanan Siastolik">
                        </div>
                        <div class="inputbox">
                            <label for="diastolik">Tekanan Darah Diastolik Saat Ini :</label>
                            <input type="text" name="diastolik" id="diastolik" placeholder="Input Tekanan Diastolik">
                        </div>
                        <div class="inputbox">
                            <input type="submit" value="submit" data-toogle="modal" data-target="#resultModal">
                            {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                                Submit
                            </button> --}}
                        </div>
                        </form>
                </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-5">
                                <div class="container keterangan">
                                    <ul>
                                        <li>N: Normal</li>
                                        <li>P: Hipertensi</li>
                                        <li>H: Hipertensi</li>
                                        <li>H1: H. Derajat I</li>
                                        <li>H2: H.Derajat II</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-7">
                                <div class="container tes1">
                                    <!-- Insert Something here if necessary -->
                                </div>
                            </div>
                        </div>
                    </div> 
            </div>
        </div>
    </div>
    </div>
    </div>

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="resultModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
        ...
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
        </div>
    </div>
    </div>
</div>

</main>
@endsection
