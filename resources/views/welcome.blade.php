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

    a{
        text-decoration: none;
    }
</style>

<body style="min-height: 100vh">

    <div class="nav-about d-flex flex-row justify-content-between">
        <div class="contact d-flex flex-row align-items-center text-secondary">
            <p class="m-0 p-0">Temukan kami di</p>
            <i class="fab fa-facebook ml-3"></i>
            <i class="fab fa-instagram-square mx-2"></i>
            <i class="fab fa-linkedin"></i>
        </div>
        <div class="link d-flex text-secondary flex-row justify-content-between" style="width: 25%;">
            <a href="">Tentang Bajualang</a>
            <a href="">Blog</a>
            <a href="">Mulai Jualan</a>
            <a href="">Kontak Kami</a>
        </div>
    </div>
    @if (Route::has('login'))
    <nav class="navbar navbar-expand-lg" style="height: 8vh; box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.04); ">
        <div class="container-fluid px-5 m-0">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a href="{{route('welcome')}}">
            </a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <img src="{{asset('images/logo.svg')}}" alt="">
                <!-- cari -->
                <div class="wrap">
                    <div class="search">
                        <input type="text" class="searchTerm" placeholder="Cari Produk">
                        <button type="submit" class="searchButton">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
                <!-- end cari -->

                <ul class="navbar-nav ms-auto">

                    <a class="nav-item nav-link text-primary" href="{{ route('aboutus') }}"><i class="fas fa-shopping-cart cart"></i></a>
                    <span class="divider"></span>
                    @auth
                    <a class="nav-item nav-link pr-4" class="" href="{{ route('logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    @else
                    <a class="nav-item nav-link px-4 btn-no-fill mr-4" href="{{ route('login') }}">Masuk</a>
                    @if (Route::has('register'))
                    <a class="nav-item nav-link px-4 btn-default" href="{{ route('register') }}">Daftar</a>
                    @endif
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
    @endif
    <div class="container">
        <div class="banner my-5">
            <img src="{{asset('images/banner-1.png')}}" alt="">
        </div>

        <!-- bagian telusuri -->
        <div>
            <h2 class="mb-3">Telusuri Kategori</h2>
            <div class="d-flex flex-row justify-content-between">
                <a href="">
                    <img src="{{asset('images/group 27.png')}}" alt="">
                </a>
                <a href="">
                    <img src="{{asset('images/group 28.png')}}" alt="">
                </a>
                <a href="">
                    <img src="{{asset('images/group 29.png')}}" alt="">
                </a>
                <a href="">
                    <img src="{{asset('images/group 30.png')}}" alt="">
                </a>
                <a href="">
                    <img src="{{asset('images/group 31.png')}}" alt="">
                </a>
                <a href="">
                    <img src="{{asset('images/group 32.png')}}" alt="">
                </a>
            </div>
        </div>
        <!-- end telusuri -->

        <hr class="my-5" />

        <!-- bagian promo -->
        <div style="width: 100%;">
            <div class="header d-flex flex-row justify-content-between">
                <h2 class="mb-3">Sedang Promo</h2>
                <a href="" style="text-decoration: none; color: #F47C7C;">Lihat Semua</a>
            </div>

            <div class="row">
                <div class="col-3">
                    <div class="card" style="width: 100%; border-radius: 8px;box-shadow: 0px 2px 12px rgba(0, 0, 0, 0.1);">
                        <img src="{{asset('images/mask group.png')}}" class="card-img-top bg-secondary" alt="">
                        <div class="card-body">
                            <h5 style="font-weight: light;">Thrift Kaos Nike Hitam</h5>
                            <!-- discount -->
                            <div class="d-flex">
                                <h5 class="bg-success mr-3" style="color: rgba(0, 0, 0, 0.5); border-radius: 3px;font-size: 15px; padding:5px">30%</h5>
                                <p class="m-0 p-0"><del>Rp130.000</del></p>
                            </div>
                            <!-- end discount -->

                            <!-- harga -->
                            <h5>Rp.100.000</h5>
                            <!-- end-harga -->

                            <!-- lokasi dan like -->
                            <div class="d-flex flex-row justify-content-between">
                                <p style="color: #F47C7C;">Jakarta Barat</p>
                                <i class="far fa-heart"></i>
                            </div>
                            <!-- end lokasi dan like -->
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="width: 100%; border-radius: 8px;box-shadow: 0px 2px 12px rgba(0, 0, 0, 0.1);">
                        <img src="{{asset('images/mask group.png')}}" class="card-img-top bg-secondary" alt="">
                        <div class="card-body">
                            <h5 style="font-weight: light;">Thrift Kaos Nike Hitam</h5>
                            <!-- discount -->
                            <div class="d-flex">
                                <h5 class="bg-success mr-3" style="color: rgba(0, 0, 0, 0.5); border-radius: 3px;font-size: 15px; padding:5px">30%</h5>
                                <p class="m-0 p-0"><del>Rp130.000</del></p>
                            </div>
                            <!-- end discount -->

                            <!-- harga -->
                            <h5>Rp.100.000</h5>
                            <!-- end-harga -->

                            <!-- lokasi dan like -->
                            <div class="d-flex flex-row justify-content-between">
                                <p style="color: #F47C7C;">Jakarta Barat</p>
                                <i class="far fa-heart"></i>
                            </div>
                            <!-- end lokasi dan like -->
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="width: 100%; border-radius: 8px;box-shadow: 0px 2px 12px rgba(0, 0, 0, 0.1);">
                        <img src="{{asset('images/mask group.png')}}" class="card-img-top bg-secondary" alt="">
                        <div class="card-body">
                            <h5 style="font-weight: light;">Thrift Kaos Nike Hitam</h5>
                            <!-- discount -->
                            <div class="d-flex">
                                <h5 class="bg-success mr-3" style="color: rgba(0, 0, 0, 0.5); border-radius: 3px;font-size: 15px; padding:5px">30%</h5>
                                <p class="m-0 p-0"><del>Rp130.000</del></p>
                            </div>
                            <!-- end discount -->

                            <!-- harga -->
                            <h5>Rp.100.000</h5>
                            <!-- end-harga -->

                            <!-- lokasi dan like -->
                            <div class="d-flex flex-row justify-content-between">
                                <p style="color: #F47C7C;">Jakarta Barat</p>
                                <i class="far fa-heart"></i>
                            </div>
                            <!-- end lokasi dan like -->
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="width: 100%; border-radius: 8px;box-shadow: 0px 2px 12px rgba(0, 0, 0, 0.1);">
                        <img src="{{asset('images/mask group.png')}}" class="card-img-top bg-secondary" alt="">
                        <div class="card-body">
                            <h5 style="font-weight: light;">Thrift Kaos Nike Hitam</h5>
                            <!-- discount -->
                            <div class="d-flex">
                                <h5 class="bg-success mr-3" style="color: rgba(0, 0, 0, 0.5); border-radius: 3px;font-size: 15px; padding:5px">30%</h5>
                                <p class="m-0 p-0"><del>Rp130.000</del></p>
                            </div>
                            <!-- end discount -->

                            <!-- harga -->
                            <h5>Rp.100.000</h5>
                            <!-- end-harga -->

                            <!-- lokasi dan like -->
                            <div class="d-flex flex-row justify-content-between">
                                <p style="color: #F47C7C;">Jakarta Barat</p>
                                <i class="far fa-heart"></i>
                            </div>
                            <!-- end lokasi dan like -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- end promo -->

            <hr class="my-5" />

            <!-- bagian pria -->
            <div style="width: 100%;">
                <div class="header d-flex flex-row justify-content-between">
                    <h2 class="mb-3">Fashion Pria</h2>
                    <a href="" style="text-decoration: none; color: #F47C7C;">Lihat Semua</a>
                </div>

                <div class="row">
                    <div class="col-3">
                        <div class="card" style="width: 100%; border-radius: 8px;box-shadow: 0px 2px 12px rgba(0, 0, 0, 0.1);">
                            <img src="{{asset('images/mask group.png')}}" class="card-img-top bg-secondary" alt="">
                            <div class="card-body">
                                <h5 style="font-weight: light;">Thrift Kaos Nike Hitam</h5>
                                <!-- discount -->
                                <div class="d-flex">
                                    <h5 class="bg-success mr-3" style="color: rgba(0, 0, 0, 0.5); border-radius: 3px;font-size: 15px; padding:5px">30%</h5>
                                    <p class="m-0 p-0"><del>Rp130.000</del></p>
                                </div>
                                <!-- end discount -->

                                <!-- harga -->
                                <h5>Rp.100.000</h5>
                                <!-- end-harga -->

                                <!-- lokasi dan like -->
                                <div class="d-flex flex-row justify-content-between">
                                    <p style="color: #F47C7C;">Jakarta Barat</p>
                                    <i class="far fa-heart"></i>
                                </div>
                                <!-- end lokasi dan like -->
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card" style="width: 100%; border-radius: 8px;box-shadow: 0px 2px 12px rgba(0, 0, 0, 0.1);">
                            <img src="{{asset('images/mask group.png')}}" class="card-img-top bg-secondary" alt="">
                            <div class="card-body">
                                <h5 style="font-weight: light;">Thrift Kaos Nike Hitam</h5>
                                <!-- discount -->
                                <div class="d-flex">
                                    <h5 class="bg-success mr-3" style="color: rgba(0, 0, 0, 0.5); border-radius: 3px;font-size: 15px; padding:5px">30%</h5>
                                    <p class="m-0 p-0"><del>Rp130.000</del></p>
                                </div>
                                <!-- end discount -->

                                <!-- harga -->
                                <h5>Rp.100.000</h5>
                                <!-- end-harga -->

                                <!-- lokasi dan like -->
                                <div class="d-flex flex-row justify-content-between">
                                    <p style="color: #F47C7C;">Jakarta Barat</p>
                                    <i class="far fa-heart"></i>
                                </div>
                                <!-- end lokasi dan like -->
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card" style="width: 100%; border-radius: 8px;box-shadow: 0px 2px 12px rgba(0, 0, 0, 0.1);">
                            <img src="{{asset('images/mask group.png')}}" class="card-img-top bg-secondary" alt="">
                            <div class="card-body">
                                <h5 style="font-weight: light;">Thrift Kaos Nike Hitam</h5>
                                <!-- discount -->
                                <div class="d-flex">
                                    <h5 class="bg-success mr-3" style="color: rgba(0, 0, 0, 0.5); border-radius: 3px;font-size: 15px; padding:5px">30%</h5>
                                    <p class="m-0 p-0"><del>Rp130.000</del></p>
                                </div>
                                <!-- end discount -->

                                <!-- harga -->
                                <h5>Rp.100.000</h5>
                                <!-- end-harga -->

                                <!-- lokasi dan like -->
                                <div class="d-flex flex-row justify-content-between">
                                    <p style="color: #F47C7C;">Jakarta Barat</p>
                                    <i class="far fa-heart"></i>
                                </div>
                                <!-- end lokasi dan like -->
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card" style="width: 100%; border-radius: 8px;box-shadow: 0px 2px 12px rgba(0, 0, 0, 0.1);">
                            <img src="{{asset('images/mask group.png')}}" class="card-img-top bg-secondary" alt="">
                            <div class="card-body">
                                <h5 style="font-weight: light;">Thrift Kaos Nike Hitam</h5>
                                <!-- discount -->
                                <div class="d-flex">
                                    <h5 class="bg-success mr-3" style="color: rgba(0, 0, 0, 0.5); border-radius: 3px;font-size: 15px; padding:5px">30%</h5>
                                    <p class="m-0 p-0"><del>Rp130.000</del></p>
                                </div>
                                <!-- end discount -->

                                <!-- harga -->
                                <h5>Rp.100.000</h5>
                                <!-- end-harga -->

                                <!-- lokasi dan like -->
                                <div class="d-flex flex-row justify-content-between">
                                    <p style="color: #F47C7C;">Jakarta Barat</p>
                                    <i class="far fa-heart"></i>
                                </div>
                                <!-- end lokasi dan like -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end pria -->

                <hr class="my-5" />

                <!-- bagian pria -->
                <div style="width: 100%;">
                    <div class="header d-flex flex-row justify-content-between">
                        <h2 class="mb-3">Banyak Dicari</h2>
                        <a href="" style="text-decoration: none; color: #F47C7C;">Lihat Semua</a>
                    </div>

                    <div class="row">
                        <div class="col-3">
                            <div class="card-search d-flex" style="width: 100%; border: 1px solid #EBEBEB;box-sizing: border-box;box-shadow: 0px 2px 12px rgba(0, 0, 0, 0.1);border-radius: 8px;">
                                <div style="width: 40%;background: #7BB9FA;border-radius: 8px 0 0 8px;" class="d-flex justify-content-center">
                                    <img src="{{asset('images/image 10.png')}}" alt="">
                                </div>
                                <div style="width: 50%;" class="d-flex flex-column justify-content-center ml-4">
                                    <h5>Thrift Cardigan</h5>
                                    <p class="text-muted">1.800 produk</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card-search d-flex" style="width: 100%; border: 1px solid #EBEBEB;box-sizing: border-box;box-shadow: 0px 2px 12px rgba(0, 0, 0, 0.1);border-radius: 8px;">
                                <div style="width: 40%;background: #7BB9FA;border-radius: 8px 0 0 8px;" class="d-flex justify-content-center">
                                    <img src="{{asset('images/image 10.png')}}" alt="">
                                </div>
                                <div style="width: 50%;" class="d-flex flex-column justify-content-center ml-4">
                                    <h5>Thrift Cardigan</h5>
                                    <p class="text-muted">1.800 produk</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card-search d-flex" style="width: 100%; border: 1px solid #EBEBEB;box-sizing: border-box;box-shadow: 0px 2px 12px rgba(0, 0, 0, 0.1);border-radius: 8px;">
                                <div style="width: 40%;background: #7BB9FA;border-radius: 8px 0 0 8px;" class="d-flex justify-content-center">
                                    <img src="{{asset('images/image 10.png')}}" alt="">
                                </div>
                                <div style="width: 50%;" class="d-flex flex-column justify-content-center ml-4">
                                    <h5>Thrift Cardigan</h5>
                                    <p class="text-muted">1.800 produk</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card-search d-flex" style="width: 100%; border: 1px solid #EBEBEB;box-sizing: border-box;box-shadow: 0px 2px 12px rgba(0, 0, 0, 0.1);border-radius: 8px;">
                                <div style="width: 40%;background: #7BB9FA;border-radius: 8px 0 0 8px;" class="d-flex justify-content-center">
                                    <img src="{{asset('images/image 10.png')}}" alt="">
                                </div>
                                <div style="width: 50%;" class="d-flex flex-column justify-content-center ml-4">
                                    <h5>Thrift Cardigan</h5>
                                    <p class="text-muted">1.800 produk</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end pria -->
                </div>
            </div>
        </div>
    </div>
    <!-- footer -->
    <div class="container-fluid mt-5" style="border-top: 4px solid #F47C7C;">
        <div class="row py-5">
            <div class="col-4">
                <img src="{{asset('images/logo.svg')}}" alt="">
                <p style="font-size: 15px;" class="text-muted">Cari barang thrift kesukaan jadi <br />lebih gampang.</p>

                <div style="width: 100px" class="d-flex justify-content-between">
                    <i class="fab fa-facebook"></i>
                    <i class="fab fa-instagram-square"></i>
                    <i class="fab fa-linkedin"></i>
                    <i class="fab fa-discord"></i>
                </div>
            </div>
            <div class="col-2 d-flex flex-column">
                <h5>Layanan Pengguna</h5>
                <a href="" class="text-muted">Bantuan</a>
                <a href="" class="text-muted">FAQ</a>
                <a href="" class="text-muted">Cara Berbelanja</a>
                <a href="" class="text-muted">Cara Berjualan</a>
                <a href="" class="text-muted">Hubungi Kami</a>
            </div>
            <div class="col-2 d-flex flex-column">
            <h5>Info Bajualang</h5>
                <a href="" class="text-muted">Tentang Bajualang</a>
                <a href="" class="text-muted">Karir</a>
                <a href="" class="text-muted">Kebijakan Privasi</a>
                <a href="" class="text-muted">Blog</a>
            </div>
            <div class="col-2 d-flex flex-column">
            <h5>Metode Pembayaran</h5>
            </div>
            <div class="col-2">
            <h5>Pengiriman</h5>
            </div>
        </div>
    </div>
    <!-- end footer -->
</body>

</html>