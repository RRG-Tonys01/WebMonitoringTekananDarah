<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Sidebars · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sidebars/">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>


    <!-- Custom styles for this template -->
    <link href="/css/sidebars.css" rel="stylesheet">
  </head>
  <body>

<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="bootstrap" viewBox="0 0 118 94">
    <title>Bootstrap</title>
    <path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"></path>
  </symbol>

</svg>

<main>
    <aside>
        <div class="d-flex flex-column align-items-stretch flex-shrink-0 bg-white" style="width: 380px;">
            <a href="/" class="d-flex align-items-center flex-shrink-0 p-3 link-dark text-decoration-none border-bottom">
            <svg class="bi me-2" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
            <span class="fs-5 fw-semibold">Riwayat Tensi Anda</span>
            </a>
            <div class="list-group list-group-flush border-bottom scrollarea">
            <a href="#" class="list-group-item list-group-item-action active py-3 lh-tight" aria-current="true">
                <small>dd/mm/yyyy HH:MM</small>
                    <div class="d-flex w-100 align-items-center justify-content-between border-bottom">
                        <strong class="mb-1">Sistolik (mmHg)</strong>
                    </div>
                    <div class="d-flex w-100 align-items-center justify-content-between">
                        <strong class="mb-1">Diastolik (mmHg)</strong>
                    </div>
                    <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the heading and date.</div>
            </a>
            <a href="#" class="list-group-item list-group-item-action py-3 lh-tight">
                <small>dd/mm/yyyy HH:MM</small>
                    <div class="d-flex w-100 align-items-center justify-content-between border-bottom">
                        <strong class="mb-1">Sistolik (mmHg)</strong>
                    </div>
                    <div class="d-flex w-100 align-items-center justify-content-between">
                        <strong class="mb-1">Diastolik (mmHg)</strong>
                    </div>
                    <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the heading and date.</div>
            </a>
            </div>
        </div>
    </aside>
  <div>
  <div class="container py-4">

    <div class="p-5 mb-4 bg-light rounded-3">
        <div class="row">
            <div class="col-4">
                <div class="container-fluid">
                    <img src="https://image.flaticon.com/icons/png/128/845/845084.png" alt="" width="100px">
                  </div>
            </div>
            <div class="col-8">
                <h1 class="display-5 fw-bold">Masukkan Tekanan Darah Anda Hari ini</h1>
                <!-- <p class="col-md-8 fs-4">Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p> -->
                <div class="d-flex w-100 align-items-center justify-content-between">
                    <form action="" method="post">
                        <input type="text" name="sistolik" placeholder="Input Sistolik">
                        <br>
                        <input type="text" name="diastolik" placeholder="Input Diastolik">
                        <br>
                        <button class="btn btn-primary btn-lg" type="submit">Submit</button>
                    </form>
                </div>
            </div>
    </div>
    </div>
    <div class="d-flex bd-highlight mb-3">
  <div class="me-auto p-2 bd-highlight bg-secondary">
      <p>Keterangan:</p>
      <p>
        N   : Normal<br>
        P   : PreHipertensi<br>
        H   : Hipertensi<br>
        H1 : H. Stage 1<br>
        H2 : H. Stage 2
      </p>
  </div>
  <div class="p-1 bd-highlight align-self-sm-center"><button class="btn btn-secondary btn-lg">About Us</button></div>
  <div class="p-1 bd-highlight align-self-sm-center"><button class="btn btn-secondary btn-lg">Ajukan Keluhan</button></div>
</div>
</main>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

      <script src="/js/sidebars.js"></script>
  </body>
</html>
