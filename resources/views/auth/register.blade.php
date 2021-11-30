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

    <div class="register mt-5 mb-5">
        <div class="container" data-aos="fade-right" data-aos-delay="700">
            <div class="row text-center judul">
                <h2>
                    Registrasi
                </h2>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <form method="post" class="inputForm" action="{{url('/register')}}">
                    @csrf
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                        <div class="fillUp">
                            <h3>Harap Masukkan Data Diri Anda</h3>
                            <hr>
                        </div>
                        <div class="form-group">
                            <label for="nama" class="col col-form-label-lg">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Input Nama Anda" value="{{old('nama')}}">
                        </div>
                        <div class="form-group">
                            <label for="username" class="col col-form-label-lg">Username</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Input Username Anda" value="{{old('username')}}">
                        </div>
                        <div class="form-group">
                            <label for="password" class="col col-form-label-lg">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Input Password Anda">
                        </div>
                        <div class="form-group">
                            <label for="gender" class="col col-form-label-lg">Jenis Kelamin</label>
                            <select class="form-control" id="gender" name="gender">
                                <option value="ph" disabled selected>-Klik disini-</option>
                                <option name="Laki-Laki" value="Laki-Laki">Laki-laki</option>
                                <option name="Perempuan" value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="ttl" class="col col-form-label-lg">Tanggal lahir</label>
                            <input type="date" class="form-control" id="ttl" name="ttl" value="{{old('ttl')}}">
                        </div>
                        <!-- <div class="form-group">
                            <label for="weight" class="col col-form-label-lg">Berat badan saat ini(KG):</label>
                            <input type="number" class="form-control" id="weight" name="weight" value="{{old('weight')}}">
                        </div> -->
                        <div class="btns">
                            <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                            <a href="{{url('/')}}" class="btn btn-danger btn-lg">kembali</a>
                        </div>
                    </form>
                </div>
                <div class="col-md-7 text-center mt-5">
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