<head>
    <link rel="stylesheet" href="/css/dashboard.css"/>
    {{-- <link rel="preconnect" href="https://fonts.gstatic.com"/> --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap"/>
    {{-- <link rel="preconnect" href="https://fonts.gstatic.com" /> --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap"/>
    {{-- <link rel="preconnect" href="https://fonts.gstatic.com" /> --}}
    {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap"/> --}}
    {{-- <link rel="preconnect" href="https://fonts.gstatic.com" /> --}}
    {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&display=swap" /> --}}
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class='main-container'>
        <div class='container'>
            <div class='left-sidebar'>
                <h2>Dashboard</h2>
                <div>
                    <ion-icon name="add-circle"></ion-icon>
                    <a class='top-left-sidebar-link' href="{{url('/control')}}">Kontrol</a>
                </div>
                <div>
                    <ion-icon name="home-outline"></ion-icon>
                    <a class='left-sidebar-links' href="{{url('/dashboard')}}">Dashboard</a>
                </div>
                <div>
                    <ion-icon name="storefront-outline"></ion-icon>
                    <a class='left-sidebar-links' href='{{url('/logout')}}'>Log Out</a>
                </div>
            </div>
            <div class='dashboard'>
                    <h2>Welcome, {{Auth::user()->nama;}}</h2>
                    <br>
                    <div class='box-container'>
                        {{-- @if (count($riwayat) != 0){
                            @foreach ($riwayat as $item)
                                <div class='box'>
                                    <br>
                                    <p>Tanggal: {{$item->'created_at'}}</p>
                                    <p>Tekanan Sistolik : {{$item->'siastolik'}} mmHg</p>
                                    <p>Tekanan Diastolik: {{$item->'diastolik'}} mmHg</p>
                                    <p>Klasifikasi: {{$item->'c_nama'}}</p>
                                    <br>
                                    <div class='line'></div>
                                </div>
                            @endforeach
                        }
                        @else
                            <h1> Kamu belum memiliki Riwayat Tekanan Darah</h1>
                        @endif --}}
                        <div class='box'>
                            <br>
                            <p>Tanggal: mm/dd/yyyy</p>
                            <p>Tekanan Sistolik : xx mmHg</p>
                            <p>Tekanan Diastolik: xx mmHg</p>
                            <p>Klasifikasi: N</p>
                            <br>
                            <div class='line'></div>
                            {{-- <div class='buttons-container'>
                                <a class='buttons' href='#'>Install</a>
                                <a class='buttons' href='#'>Share</a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
