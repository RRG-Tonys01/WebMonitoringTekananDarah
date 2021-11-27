<link rel="stylesheet" href="/css/login.css">

@if(session()->has('loginError'))
    <div class="alaer alert-danger alert-dismissible fade show" role="alert">
        {{session('loginError')}}
        <button type="button" class="btn-close" data-bs-dismiss="aler" aria-label="Close"></button>
    </div>
@endif
<div class="wrapBg">
    <div class="center">
        <h1>Register</h1>
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
                <input type="text" name="nama" id="nama" class="@error('username') is-invalid @enderror"
                required value="{{old('nama')}}">
                <span>Nama Pengguna</span>
                @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            {{-- <select name="jk" id="jk" class="form-select" aria-label="pilih jenis kelamin">
                <option selected>Jenis Kelamin</option>
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>

            </select> --}}
            <div class="inputbox">
                    <input type="text" name="jk" id="jk" required>
                    <span>Jenis Kelamin</span>
                </div>
            <div class="inputbox">
                <input type="date" name="tanggalLahir" id="tanggalLahir" required>
                <span>Tanggal Lahir</span>
            </div>
            <div class="inputbox">
                <input type="password" name="password" id="password" class="@error('username') is-invalid @enderror"
                required>
                <span>Password</span>
                @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
            </div>
            @enderror
            </div>
            <div class="inputbox">
                <button type="submit">Submit</button>
                <a href="{{url('/login')}}">Kembali</a>
            </div>
        </form>
    </div>
</div>
