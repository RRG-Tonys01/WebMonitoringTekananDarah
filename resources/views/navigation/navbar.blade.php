{{-- CSS --}}
{{-- <link rel="stylesheet" href="/css/navbar.css"> --}}

<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="{{url('/')}}">Sistem Pakar</a>
    </div>
    <div class="navcontainer">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
            <a class="nav-link" href="{{url('/')}}">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{ url('/article')}}">Article</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/diagnostics')}}">Diagnostics</a>
            </li>

            @auth
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li>
                        <a class="dropdown-item" href="#">
                            <i class="bi bi-person"></i>
                            Profile
                        </a>
                    </li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <form action="/logout">
                            @csrf
                            <button type="submit" class="dropdown-item">
                                <i class="bi bi-box-arror-right"></i>
                                Log Out
                            </button>
                        </form>
                        {{-- <a class="dropdown-item" href="#">
                        <i class="bi bi-box-arror-right"></i>
                            Log Out
                        </a> --}}
                    </li>
                </ul>
              </li>
            @else
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/login')}}">Login</a>
            </li>
            @endauth
        </ul>
    </div>
</nav>
