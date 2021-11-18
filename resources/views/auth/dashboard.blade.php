@extends('/layouts.main')

@section('title', 'Monitor Tekanan Darah')

@section('css')
<link rel="stylesheet" href="/css/sidebars.css">
<link rel="stylesheet" href="/css/dashboard.css">
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
                        <i class="fa fa-home fa-2x"></i>
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

    <div class="container welcome">
        <h1>Welcome, {{Auth::user()->username;}}</h1>
    </div>

    <div class="center formLayout">
        <div class="container inputForm">
            <div class="headerForm">
                <h2>
                    Masukkan Tekanan Darah Anda
                </h2>
                <hr class="dropdown-divider">
            </div>

            <form method="POST" action="{{url('/dashboard')}}">
                @csrf
                @method('PUT')
                <div class="inputbox">
                    <label for="beratbadan">Berat Badan Saat Ini : </label>
                    <input type="text" name="beratbadan" id="beratbadan" placeholder="Input Berat Badan">
                </div>
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
