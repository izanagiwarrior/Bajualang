@extends('layouts.app')
@section('title', 'Order')
@section('content')
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
@endsection