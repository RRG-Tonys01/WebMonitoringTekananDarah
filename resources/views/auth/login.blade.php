<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="/css/register.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>

<body>
    @if(session()->has('loginError'))
    <div class="alaer alert-danger alert-dismissible fade show" role="alert">
        {{session('loginError')}}
        <button type="button" class="btn-close" data-bs-dismiss="aler" aria-label="Close"></button>
    </div>
    @endif
    <div class="register mt-5 mb-5">
        <div class="container" data-aos="fade-right" data-aos-duration="800">
            <div class="row text-center judul">
                <h2>
                    Login
                </h2>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="login mt-5">
                        <form method="POST" action="{{url('/login')}}" class="inputForm">
                            <div class="fillUp">
                                <h3>Selamat Datang!</h3>
                                <hr>
                            </div>
                            <div class="form-group">
                                @csrf
                                <label for="text" class="col col-form-label-lg">Username</label>
                                <input type="text" class="form-control" id="text" name="username" placeholder="Input Username Anda" autofocus required value="{{old('username')}}">
                                @error('username')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password" class="col col-form-label-lg">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Input Password Anda">
                            </div>
                            <div class="btns mt-2">
                                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                                <a href="#" class="btn btn-danger btn-lg">kembali</a>
                            </div>
                            <div class="mt-4">
                                <p>Belum punya akun? <a href="#">Buat baru</a></p>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-7 text-center">
                    <div class="imgs">
                        <img src="https://res.cloudinary.com/dk0z4ums3/image/upload/v1618237197/attached_image/berapa-tekanan-darah-normal-orang-dewasa.jpg" alt="Regis" class="img-fluid mt-5">
                    </div>
                    <div class="copyright text-center mt-4">
                        <h6><a href="#">Gamma 7 - IF541</a></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        AOS.init();
    </script>
</body>

</html>