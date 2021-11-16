<link rel="stylesheet" href="/css/login.css">

@if(session()->has('loginError'))
    <div class="alaer alert-danger alert-dismissible fade show" role="alert">
        {{session('loginError')}}
        <button type="button" class="btn-close" data-bs-dismiss="aler" aria-label="Close"></button>
    </div>
@endif
<div class="wrapBg">
    <div class="center">
        <h1>Login</h1>
        <form method="POST" action="{{url('/login')}}">
            @csrf
            <div class="inputbox">
                <input type="text" name="username" id="username" class="@error('username') is-invalid @enderror"
                autofocus required value="{{old('username')}}">
                @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                <span>Username</span>
            </div>
            <div class="inputbox">
                <input type="password" name="password" id="password" required>
                <span>Password</span>
            </div>
                <div class="inputbox">
                <button type="submit">Submit</button>
                <a href="{{url('/register')}}">Register</a>
                </div>
            </form>
        </div>
</div>
