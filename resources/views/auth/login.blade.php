<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bajualang</title>

    <!-- Icon -->
    <link rel="icon" href="images/logo_title.png" type="image/x-icon">

    <!-- Styles -->
    <link rel='stylesheet' href='{{asset("css/app.css")}}' type='text/css' media='screen' />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/cefd38f320.js" crossorigin="anonymous"></script>
</head>

<style>
    .btn-no-fill {
        border: 1px solid #F47C7C;
        border-radius: 8px;
        color: #F47C7C;
        background: #fff;
        padding: 10px;
        text-align: center;
    }

    .btn-default {
        background-color: #F47C7C;
        border-radius: 8px;
        color: #fff;
        padding: 10px;
        text-align: center;
        border: none;
    }

    .divider {
        border: 1px solid rgba(0, 0, 0, 0.2);
        margin: 0 30px;
    }

    .cart {
        color: #232323;
    }

    /* bagian cari */
    .search {
        width: 100%;
        position: relative;
        display: flex;
    }

    .searchTerm {
        width: 100%;
        border: 1px solid #E5E5E5;
        border-right: none;
        padding: 5px;
        height: 36px;
        border-radius: 5px 0 0 5px;
        outline: none;
        color: #E5E5E5;
    }

    .searchTerm:focus {
        color: #E5E5E5;
    }

    .searchButton {
        width: 40px;
        height: 36px;
        border: 1px solid #E5E5E5;
        background: #E5E5E5;
        text-align: center;
        color: rgba(0, 0, 0, 0.2);
        border-radius: 0 5px 5px 0;
        cursor: pointer;
        font-size: 20px;
    }

    .wrap {
        width: 30%;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    /* end cari */

    /* about */
    .nav-about {
        background: #F7FAF9;
        padding: 10px 60px;
    }

    .link a {
        text-decoration: none;
        color: rgba(0, 0, 0, 0.5);
    }

    /* end about */

    a {
        text-decoration: none;
    }
</style>

<body style="min-height: 100vh">
    <nav class="navbar navbar-expand-lg" style="height: 8vh; box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.04); ">
        <div class="container-fluid px-5 m-0">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a href="{{route('welcome')}}">
            </a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <img src="{{asset('images/logo.svg')}}" alt="">
                <ul class="navbar-nav ms-auto">
                    <a class="" href="{{ route('login') }}" style="text-decoration: none; color: #232323">Masuk</a>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid" style="height: 92vh;">
        <div class="row" style="height: 100%;">
            <div class="col d-flex flex-column justify-content-center">
                <div class="mx-auto">
                    <img src="{{asset('images/Frame 176.png')}}" alt="" width="380">
                    <h3>Cari Barang Thrift Makin Gampang <br> Cuma Di Bajualang</h3>
                    <p>Masuk untuk mulai nge-thrift barang yang kamu suka!</p>
                </div>
            </div>
            <div class="col d-flex justify-content-center align-items-center">
                <div class="card py-5" style="width: 450px;box-shadow: 0px 2px 12px rgba(0, 0, 0, 0.1);">
                    <div class="text-center">
                        <h3 class="">Selamat Datang !</h3>
                        <p>Belum punya akun? <b style="color:#F47C7C;">Daftar</b></p>
                    </div>
                    <div class="d-flex justify-content-between mx-auto" style="width: 60%;">
                        <a href="" class="btn btn-light"><i class="fab fa-facebook-f mr-3"></i>Facebook</a>
                        <a href="" class="btn btn-light"><i class="fab fa-google mr-3"></i>Google</a>
                    </div>

                    <hr class="my-5 w-75 mx-auto">

                    <form action="{{route('login')}}" method="post">
                        @csrf
                        <div class="form-group w-75 mx-auto">
                            <label for="exampleInputPassword1">Email atau Nomer Telefon</label>
                            <input type="email" name="email" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="form-group w-75 mx-auto">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                        </div>

                        <div class="w-75 mx-auto">
                            <button type="submit" class="btn-default w-100">Masuk</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</body>

</html>