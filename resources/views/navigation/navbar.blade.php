{{-- CSS --}}
{{-- <link rel="stylesheet" href="/css/navbar.css"> --}}

<nav class="navbar navbar-expand-lg">
    {{-- <a class="navbar-brand" href="{{url('/')}}">Title</a> --}}
    <div class="navcontainer">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
            <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{ url('/article')}}">Article</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/diagnostics')}}">Diagnostics</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/login')}}">Login</a>
            </li>
        </ul>
    </div>
</nav>
