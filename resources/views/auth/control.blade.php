@extends('/layouts.main')

@section('title', 'Monitor Tekanan Darah')

@section('css')
{{-- <link rel="stylesheet" href="/css/sidebars.css"> --}}
<link rel="stylesheet" href="/css/control.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@endsection

@section('mainbody')
<main>
    <div class="container wel1">
        <div class="row d-flex dashboard">
            <div class="container welcome">
                <h2>Welcome, {{Auth::user()->nama;}}</h2>
                <a class="btn btn-outline-light" href="{{url('/dashboard')}}">
                    <span class="nav-text">
                        Back
                    </span>
                </a>
            </div>
            <div class="center formLayout">
                    <div class="col-11 mx-auto d-flex">
                        <div class="container inputForm input1">
                            <div class="headerForm">
                                <h2>
                                    Masukkan Tekanan Darah Anda
                                </h2>
                                <hr class="dropdown-divider">
                            </div>

                            <form method="POST" action="{{url('/control')}}">
                                @csrf
                                <div class="inputbox">
                                    <label for="siastolik">Tekanan Darah Siastolik Saat Ini :</label>
                                    <input type="text" name="siastolik" id="siastolik" placeholder="Input Tekanan Siastolik">
                                </div>
                                <div class="inputbox">
                                    <label for="diastolik">Tekanan Darah Diastolik Saat Ini :</label>
                                    <input type="text" name="diastolik" id="diastolik" placeholder="Input Tekanan Diastolik">
                                </div>
                                <hr>
                                <div class="container gejala1">
                                    <div class="inputbox">
                                        <input class="form-check-input" type="checkbox" name="diagnostics[]" id="G15">
                                        <label class="form-check-label" for="G15">Apakah anda merasakan sakit kepala?</label>
                                    </div>
                                    <div class="inputbox">
                                        <input class="form-check-input" type="checkbox" name="diagnostics[]" id="G16">
                                        <label class="form-check-label" for="G16">Apakah anda merasa gelisah?</label>
                                    </div>
                                    <div class="inputbox">
                                        <input class="form-check-input" type="checkbox" name="diagnostics[]" id="G17">
                                        <label class="form-check-label" for="G17">Apakah anda merasa pusing?</label>
                                    </div>
                                    <div class="inputbox">
                                        <input class="form-check-input" type="checkbox" name="diagnostics[]" id="G18">
                                        <label class="form-check-label" for="G18">Apakah anda merasakan rasa sakit di dada?</label>
                                    </div>
                                    <div class="inputbox">
                                        <input class="form-check-input" type="checkbox" name="diagnostics[]" id="G19">
                                        <label class="form-check-label" for="G19">Apakah anda merasa mudah lelah?</label>
                                    </div>
                                    <div class="inputbox">
                                        <input class="form-check-input" type="checkbox" name="diagnostics[]" id="G20">
                                        <label class="form-check-label" for="G20">Apakah tekanan darah anda naik tanpa adanya gejala(Asimptomatik)?</label>
                                    </div>
                                    <div class="inputbox">
                                        <input class="form-check-input" type="checkbox" name="diagnostics[]" id="G21">
                                        <label class="form-check-label" for="G21">Apakah anda merasakan sakit kepala berat?</label>
                                    </div>
                                    <div class="inputbox">
                                        <input class="form-check-input" type="checkbox" name="diagnostics[]" id="G22">
                                        <label class="form-check-label" for="G22">Apakah anda kesulitan bernafas/nafas anda pendek?</label>
                                    </div>
                                    <div class="inputbox">
                                        <input class="form-check-input" type="checkbox" name="diagnostics[]" id="G22">
                                        <label class="form-check-label" for="G23">Apakah anda sering buang air kecil pada malam hari?</label>
                                    </div>
                                    <div class="inputbox">
                                        <input class="form-check-input" type="checkbox" name="diagnostics[]" id="G24">
                                        <label class="form-check-label" for="G24">Apakah anda mengalami sulit berbicara(bicara lambat atau tidak jelas)?</label>
                                    </div>
                                    <div class="inputbox">
                                        <input class="form-check-input" type="checkbox" name="diagnostics[]" id="G25">
                                        <label class="form-check-label" for="G25">Apakah anda merasa mengalami gangguan kesadaran?</label>
                                    </div>
                                </div>

                                <div class="inputbox bt1">
                                    <input type="submit" value="submit" data-toogle="modal" data-target="#resultModal">
                                    {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                                Submit
                            </button> --}}
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
</main>
@endsection
