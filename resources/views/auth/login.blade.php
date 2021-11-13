<link rel="stylesheet" href="/css/login.css">

<div class="center">
    @if(session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{session('loginError')}}
            {{-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            </button> --}}
        </div>
    @endif

    <h1>Login</h1>
    <form method="POST" action="/login">
        @csrf
        <div class="inputbox">
            <input type="text" name="username" id="username" autofocus required>
            <span>Username</span>
            {{-- @error('username')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror --}}
        </div>
        <div class="inputbox">
            <input type="password" name="password" id="password" required>
            <span>Password</span>
        </div>
        <div class="inputbox">
            <input type="submit" value="submit">
        </div>
    </form>
</div>
