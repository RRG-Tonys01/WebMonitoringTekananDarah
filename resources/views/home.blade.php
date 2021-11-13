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
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nostrum, placeat libero magni laudantium at tempora animi quae similique temporibus fuga delectus commodi asperiores harum. Reiciendis rem velit alias porro facilis. Accusantium, beatae minus! Fuga doloremque libero reiciendis maiores eligendi totam ducimus iure excepturi minus illo, temporibus quam voluptatem consectetur quaerat.</p>
                </div>
                <button type="button" class="btn btn-success btn-lg">
                    Perikasakan dirimu sekarang
                </button>
            </div>

        </div>
        <div class="col-4">
            <div class="kananPage">
                <h2>Periksakan dirimu sekarang juga</h2>
                <img class="img-fluid mx-auto d-block" src="https://img.freepik.com/free-vector/doctor-character-background_1270-84.jpg?size=338&ext=jpg" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem deleniti dicta officia, necessitatibus excepturi adipisci, corrupti nemo ea officiis quia perferendis sit ullam dolore harum.</p>
            </div>
        </div>
    </div>
</main>
@endsection



