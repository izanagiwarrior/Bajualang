@extends('layouts.app')
@section('title', 'Order')
@section('content')
<div class="row mx-5 mt-4">
    <div class="col-6 px-3">
        {{-- bagian img makanan --}}
        <img src='{{asset("images/Mask Group.png")}}' alt="" class="img-food" style="width:630px; background: #232323"></img>
        {{-- bagian img makanan --}}
    </div>
    <div class="col-6 pl-5">
        <div class="row p-3 ">
            <div class="col">
                {{-- bagian title makanan --}}
                <h5 class="font-weight-bold">{{$products->name}}</h5>
                {{-- bagian title makanan --}}

                {{-- bagian waktu sedia makanan dan harga --}}
                <div class="d-flex">
                    <div class="mr-3">
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-light"></i>
                    </div>

                    <div>
                        <p>1 Terjual</p>
                    </div>
                </div>
                {{-- bagian waktu sedia makanan dan harga --}}
            </div>
        </div>
        <div class="row p-3">
            <div class="col">
                {{-- bagian deskripsi makanan --}}
                <h4>Rp.{{ $products->price }}</h4>
                <div class="d-flex">
                    <h5 class="bg-success mr-3" style="color: rgba(0, 0, 0, 0.5); border-radius: 3px;font-size: 15px; padding:5px">30%</h5>
                    <p class="m-0 p-0"><del>Rp300.000</del></p>
                </div>
                {{-- bagian deskripsi makanan --}}
            </div>
            <div class="col d-flex align-items-end">
                <div class="d-flex">
                    <p class="mr-3"><i class="far fa-heart mr-2"></i>Favoritkan</p>
                    <p><i class="fas fa-share-alt mr-2"></i>Favoritkan</p>
                </div>
            </div>
        </div>

        <hr class="my-3" />

        <div class="row p-3">
            <div class="col pb-4">
                <!-- {{-- bagian stock makanan --}}
                @if ($products->stock === 0)
                <h6 class="text-danger">Out Of Stock</h6>
                @else
                <h6 class="text-primary">Ready Stock</h6>
                @endif
                {{-- bagian stock makanan --}} -->

                <h5>Pengiriman</h5>
                <p><i class="fas fa-map-marker-alt mr-3"></i>Dikirim dari jakarta Barat</p>
                <div class="d-flex align-items-center">
                    <p class="d-flex align-items-center mt-3 mr-3"><i class="fas fa-truck mr-3 p-0"></i>Pengiriman ke </p>
                    <div class="dropdown mr-3">
                        <button class="btn btn-light dropdown-toggle" style="color:#F47C7C;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Kota Bogor
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>

                    <!-- bagian kirim -->
                    <p class="d-flex align-items-center mt-3 mr-3">Ongkos kirim</p>
                    <div class="dropdown">
                        <button class="btn btn-light dropdown-toggle" style="color:#F47C7C;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Rp12.000
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Rp20.000</a>
                            <a class="dropdown-item" href="#">Rp50.000</a>
                            <a class="dropdown-item" href="#">Rp75.000</a>
                        </div>
                    </div>
                    <!-- bagian kirim -->
                </div>
            </div>
        </div>
        <form action="{{route('createProcess')}}" method="post">
            @csrf
            <div class="row">
                <h5>Kuantitas</h5>
                <div class="col">
                    {{-- bagian qty makanan --}}

                    <div class="quantity-control" data-quantity="">
                        <a class="quantity-btn" data-quantity-minus=""><svg viewBox="0 0 409.6 409.6">
                                <g>
                                    <g>
                                        <path d="M392.533,187.733H17.067C7.641,187.733,0,195.374,0,204.8s7.641,17.067,17.067,17.067h375.467 c9.426,0,17.067-7.641,17.067-17.067S401.959,187.733,392.533,187.733z" />
                                    </g>
                                </g>
                            </svg></a>
                        <input type="number" class="quantity-input" data-quantity-target="" value="1" step="1" min="1" max="" name="buyer_quantity">
                        <a class="quantity-btn" data-quantity-plus=""><svg viewBox="0 0 426.66667 426.66667">
                                <path d="m405.332031 192h-170.664062v-170.667969c0-11.773437-9.558594-21.332031-21.335938-21.332031-11.773437 0-21.332031 9.558594-21.332031 21.332031v170.667969h-170.667969c-11.773437 0-21.332031 9.558594-21.332031 21.332031 0 11.777344 9.558594 21.335938 21.332031 21.335938h170.667969v170.664062c0 11.777344 9.558594 21.335938 21.332031 21.335938 11.777344 0 21.335938-9.558594 21.335938-21.335938v-170.664062h170.664062c11.777344 0 21.335938-9.558594 21.335938-21.335938 0-11.773437-9.558594-21.332031-21.335938-21.332031zm0 0" />
                            </svg>
                        </a>
                    </div>
                    {{-- bagian qty makanan --}}
                </div>
                <div class="col d-flex justify-content-end">
                    <button type="submit" class="btn-no-fill py-3 px-5 mr-3">+ keranjang</button>
                    <button type="submit" style="border: none;" class="btn-default py-3 px-5">Beli Sekarang</button>
                </div>
        </form>
    </div>
</div>

<hr class="my-5" />

<div class="row">
    <h4>Informasi Penjual</h4>
    <div class="col d-flex justify-content-end">
        <div class="card" style="width: 848px;box-shadow: 0px 2px 12px rgba(0, 0, 0, 0.1);
border-radius: 8px;border:none;">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="mr-4" style="border-radius: 50%;width: 80px;height:80px;background: #c4c4c4"></div>
                    <div>
                        <h5>Secondthriftshopco.</h5>
                        <p><i class="fas fa-map-marker-alt mr-3"></i>Jakarta Barat</p>
                    </div>

                    <div class="ms-auto">
                        <p><i class="fas fa-share-alt mr-2"></i>Bagikan Toko</p>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col d-flex justify-content-between text-center">
                        <div>
                            <b style="color: #F47C7C;">120</b>
                            <p>Ulasan</p>
                        </div>
                        <div>
                            <b style="color: #F47C7C;">120</b>
                            <p>Ulasan</p>
                        </div>
                        <div>
                            <b style="color: #F47C7C;">120</b>
                            <p>Ulasan</p>
                        </div>
                    </div>
                    <div class="col d-flex justify-content-end">
                        <button type="submit" class="btn-no-fill py-3 px-5 mr-3"><i class="fas fa-comment-dots mr-3"></i>Chat</button>
                        <button type="submit" style="border: none;" class="btn-default py-3 px-5"><i class="fas fa-store mr-3"></i>Kunjungi Toko</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<hr class="my-5" />

<div class="row">
    <h4>Informasi Barang</h4>
    <div class="col d-flex justify-content-end">
            <div style="width: 45%;">
                <h5>Spesifikasi</h5>
                <p>Kondisi : Bekas</p>
                <p>Kategori : <span style="color: #F47C7C;">Kaos Pria</span></p>
                <p>Berat : 300 gram</p>
                <p>Asal Barang : Import</p>
                <p>Brand : Nike</p>

                <h5 class="mt-3">Deskripsi</h5>
                <p>{{$products->description}}</p>
            </div>
    </div>
</div>

<hr class="my-5" />

<div class="row">
    <h4>Ulasan Pembeli</h4>
    <div class="col d-flex justify-content-end">
            <div style="width: 45%;">
                <h5>Spesifikasi</h5>
                <p>Kondisi : Bekas</p>
                <p>Kategori : <span style="color: #F47C7C;">Kaos Pria</span></p>
                <p>Berat : 300 gram</p>
                <p>Asal Barang : Import</p>
                <p>Brand : Nike</p>

                <h5 class="mt-3">Deskripsi</h5>
                <p>{{$products->description}}</p>
            </div>
    </div>
</div>
@endsection