<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Icon -->
    <link rel="icon" href="images/logo_title.png" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('css/global.css')}}">
    <link rel='stylesheet' href='{{asset('css/me.css')}}' type='text/css' media='screen' />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <script src="https://kit.fontawesome.com/cefd38f320.js" crossorigin="anonymous"></script>

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

        a {
            text-decoration: none;
        }
    </style>
</head>

<body>
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

                    <a class="nav-item nav-link text-primary" href="{{ route('aboutus') }}"><i class="fas fa-heart text-dark"></i></a>
                    <a class="nav-item nav-link text-primary" href="{{ route('aboutus') }}"><i class="fas fa-bell text-dark"></i></a>
                    <a class="nav-item nav-link text-primary" href="{{ route('aboutus') }}"><i class="fas fa-envelope text-dark"></i></a>
                    <a class="nav-item nav-link text-primary" href="{{ route('aboutus') }}"><i class="fas fa-shopping-cart cart"></i></a>
                    <span class="divider"></span>
                    @auth
                    <div class="dropdown">
                        <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="far fa-user-circle w-75"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="nav-item nav-link pr-4" class="" href="{{ route('logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                        </div>
                    </div>

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
    <main style="height: 90vh">
        @yield('content')
    </main>
    </div>
    <script src="{{asset('js/index.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>