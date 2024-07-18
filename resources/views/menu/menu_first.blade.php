@extends('layouts.app')

@section('title', 'iWash - Satu Kali Cuci')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">

    <div class="container-wash py-5">
        <h2>Pesan Layanan iWash</h2>
        <a href="{{ route('menu') }}"><img src="image/back-to.svg" alt="">Kembali ke jenis layanan</a>
        <div class="category-menu mt-5 mb-2" id="menu1">
            <h5>Pilih Paket Satu Kali Cuci</h5>
            <div class="price-menu">
                <div class="card-price" for="basic">
                    <h5><img src="image/p-basic.png" alt="">Basic</h5>
                    <ul class="card-service">
                        <li><img src="image/check-ill.png" alt="">Hand Wash</li>
                        <li><img src="image/check-ill.png" alt="">Interior Cleaning</li>
                        <li><img src="image/check-ill.png" alt="">Vacuum</li>
                        <li><img src="image/check-ill.png" alt="">Tire Polish</li>
                    </ul>
                    <div class="price mt-3">
                        <p>Harga</p>
                        <h6>Rp50.000</h6>
                        <p class="estimation mt-3"><img src="image/stopwatch.svg" alt="">Estimasi 1 Jam</p>
                    </div>
                    <div class="select-price">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="basic"
                            value="basic">
                    </div>
                </div>
                <div class="card-price">
                    <h5><img src="image/p-standard.png" alt="">Standard</h5>
                    <ul class="card-service">
                        <li style="font-weight: 600"><img src="image/check-ill.png" alt="">All in Basic</li>
                        <li><img src="image/check-ill.png" alt="">Foam Wash</li>
                        <li><img src="image/check-ill.png" alt="">Spot Remover (Body)</li>
                        <li><img src="image/check-ill.png" alt="">Engine Cleaning</li>
                    </ul>
                    <div class="price">
                        <p>Harga</p>
                        <h6>Rp60.000</h6>
                        <p class="estimation mt-3"><img src="image/stopwatch.svg" alt="">Estimasi 1 Jam</p>
                    </div>
                    <div class="select-price">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="standard"
                            value="standard">
                    </div>
                </div>
                <div class="card-price">
                    <h5><img src="image/p-professional.png" alt="">Professional</h5>
                    <ul class="card-service">
                        <li style="font-weight: 600"><img src="image/check-ill.png" alt="">All in Standard</li>
                        <li><img src="image/check-ill.png" alt="">Spot Remover </li>
                        <li style="margin-left: 26px">(Window)</li>
                        <li><img src="image/check-ill.png" alt="">Tar Remover</li>
                    </ul>
                    <div class="price mt-3">
                        <p>Harga</p>
                        <h6>Rp70.000</h6>
                        <p class="estimation mt-3"><img src="image/stopwatch.svg" alt="">Estimasi 1 Jam</p>
                    </div>
                    <div class="select-price">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="professional"
                            value="professional">
                    </div>
                </div>
            </div>
        </div>
        <div class="price-menu">
            <div class="order-menu mt-5">
                <button class="btn-reset">Reset</button>
                <button class="btn-next">Lanjutkan</button>
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@endsection
