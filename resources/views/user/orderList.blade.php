@php
use App\Models\Products;
@endphp
@extends('layouts.app')
@section('title', 'Checkout Produk')
@section('content')
<div class="row p-5">
    <div class="col-7">
        <h5>Alamat Pengiriman</h5>
        <hr class="my-3" />

        <p>Muhammad Faiz Triputra - 082198211591 <span class="mx-3 text-light">|</span> <b>Rumah</b> <span class="mx-3 text-light">|</span> <a href="" class="btn-default">Utama</a></p>
        <p>Jl. Bambu Ori I No.52, Cilendek Timur, Kec. Bogor Barat</p>

        <p class="text-muted">Kota Bogor, Jawa Barat, 16112<br> Indonesia</p>

        <a href="" class="btn-no-fill">Ubah Alamat</a>

        <hr class="my-3" />

        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Kirim sebagai dropshipper</label>
        </div>

        <hr class="my-3" />

        <div>
            <h5><i class="fas fa-store mr-3"></i>Secondthriftshopco.</h5>
            <p>Jakarta Barat</p>
        </div>

        <div class="row">
            <div class="col-4">
                <img src="{{asset('images/Mask Group.png')}}" style="background: #232323;border-radius: 8px" alt="">
            </div>
            <div class="col-6">
                <h3 style="font-weight: light;">Thrift Kaos Nike Hitam Size L Original</h3>
                <p>1 Barang</p>
                <p><del>Rp.300.000</del></p>
                <h3>Rp.200.000</h3>
            </div>
        </div>

        <div class="form-group my-4">
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

        <h5 class="mt-5">Pengiriman</h5>
        <hr class="my-3">
        <div class="d-flex">

        </div>

        <h5 class="mt-5">Metode Pembayaran</h5>
        <hr class="my-3">
        <div class="d-flex flex-column">
            <div id="accordion">
                <div class="card mb-3">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-light" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Transfer Virtual Account
                            </button>
                        </h5>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
            </div>

            <div id="accordion">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-light" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                Gerai Terdekat
                            </button>
                        </h5>
                    </div>

                    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-5 bg-dark">
        <div class="card mx-auto mt-4" style="width: 28rem">
            <div class="card-body">
                <a href="" class="btn-no-fill d-block">
                    Gunakan Voucher
                </a>

                <hr class="my-4">

                <b>Detail Harga</b>
                <div class="my-3">
                    <div class="d-flex justify-content-between">
                        <p>Total Harga Barang</p>
                        <p>Rp.100.000</p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p>Total Ongkos Kirim</p>
                        <p>Rp.18.000</p>
                    </div>
                </div>

                <hr class="my-4">

                <div class="d-flex justify-content-between">
                    <h4>Total Pembayaran</h4>
                    <h4>Rp.118.000</h4>
                </div>

                <a href="" class="btn-default d-block mt-3">
                    Bayar
                </a>
            </div>
        </div>
    </div>
</div>
@endsection