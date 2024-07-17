@extends('layouts.app')

@section('title', 'iWash | Pesan Layanan')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/wash.css') }}">

    <div class="container-wash py-5">
        <h2>Pesan Layanan iWash</h2>
        <a href="{{ route('menu') }}"><img src="image/back-to.svg" alt="">Kembali ke jenis layanan</a>
        {{-- Tampilan Satu Kali Cuci --}}
        <div class="category-menu mt-5 mb-2" id="menu1" style="display: none;">
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

        {{-- Tampilan Salon Mobil / Detailing --}}
        <div class="category-menu mt-5 mb-2" id="menu2" style="display: none;">
            <h5>Pilih Paket Salon Mobil / Detailing</h5>
            <p class="mt-4">Ukuran mobil Anda</p>
            <div class="car-category">
                <button class="btn-car" id="large-car"><img src="image/large-car-ill.png" alt="">Besar</button>
                <button class="btn-car" id="small-car"><img src="image/small-car-ill.png" alt="">Kecil</button>
                <button class="btn-car" id="medium-car"><img src="image/medium-car-ill.png" alt="">Sedang</button>
            </div>
            <a href="">Cari tahu ukuran mobil Anda <img src="image/arrow-right.svg" alt=""></a>
            <p class="mt-4">Harga di bawah sudah sesuai dengan ukuran mobil Anda</p>
            <div class="price-menu">
                <div class="card-price">
                    <h5><img src="image/p-detailing.png" alt="">Detailing Interior</h5>
                    <div class="price mt-3">
                        <p>Harga</p>
                        <h6>Rp50.000</h6>
                        <p class="estimation mt-3"><img src="image/stopwatch.svg" alt="">Estimasi 1 Jam</p>
                    </div>
                    <div class="select-price">
                        <input class="form-check-input" type="checkbox" name="flexCheckboxDefault" id="d-interior"
                            value="Detailing Interior">
                    </div>
                </div>
                <div class="card-price">
                    <h5><img src="image/p-detailing.png" alt="">Detailing Eksterior</h5>
                    <div class="price mt-3">
                        <p>Harga</p>
                        <h6>Rp60.000</h6>
                        <p class="estimation mt-3"><img src="image/stopwatch.svg" alt="">Estimasi 1 Jam</p>
                    </div>
                    <div class="select-price">
                        <input class="form-check-input" type="checkbox" name="flexCheckboxDefault" id="d-eksterior"
                            value="Detailing Eksterior">
                    </div>
                </div>
                <div class="card-price">
                    <h5><img src="image/p-detailing.png" alt="">Detailing Kaca Mobil</h5>
                    <div class="price mt-3">
                        <p>Harga</p>
                        <h6>Rp70.000</h6>
                        <p class="estimation mt-3"><img src="image/stopwatch.svg" alt="">Estimasi 1 Jam</p>
                    </div>
                    <div class="select-price">
                        <input class="form-check-input" type="checkbox" name="flexCheckboxDefault" id="d-kaca"
                            value="Detailing Kaca Mobil">
                    </div>
                </div>
                <div class="card-price">
                    <h5><img src="image/p-detailing.png" alt="">Detailing Mesin Mobil</h5>
                    <div class="price mt-3">
                        <p>Harga</p>
                        <h6>Rp50.000</h6>
                        <p class="estimation mt-3"><img src="image/stopwatch.svg" alt="">Estimasi 1 Jam</p>
                    </div>
                    <div class="select-price">
                        <input class="form-check-input" type="checkbox" name="flexCheckboxDefault" id="d-mesin"
                            value="Detailing Mesin Mobil">
                    </div>
                </div>
                <div class="card-price">
                    <h5><img src="image/p-detailing.png" alt="">Detailing Ban & Velg</h5>
                    <div class="price mt-3">
                        <p>Harga</p>
                        <h6>Rp60.000</h6>
                        <p class="estimation mt-3"><img src="image/stopwatch.svg" alt="">Estimasi 1 Jam</p>
                    </div>
                    <div class="select-price">
                        <input class="form-check-input" type="checkbox" name="flexCheckboxDefault" id="d-ban-velg"
                            value="Detailing Ban & Velg">
                    </div>
                </div>
            </div>
        </div>

        {{-- Tampilan Paket Super --}}
        <div class="category-menu mt-5 mb-2" id="menu3" style="display: none;">
            <h5>Pilih Paket Super</h5>
            <p class="mt-4">Ukuran mobil Anda</p>
            <div class="car-category">
                <img src="image/small-car-ill.png" alt="">
                <img src="image/medium-car-ill.png" alt="">
                <img src="image/large-car-ill.png" alt="">
            </div>
            <a href="">Cari tahu ukuran mobil Anda <img src="image/arrow-right.svg" alt=""></a>
            <div class="price-menu">

            </div>
        </div>


        {{-- Modal Order --}}
        <div class="price-menu">
            <div class="order-menu mt-5">
                <button class="btn-reset">Reset</button>
                <button class="btn-next">Lanjutkan</button>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var urlParams = new URLSearchParams(window.location.search);
            var type = urlParams.get('type');

            if (type) {
                document.getElementById(type).style.display = 'block';
            }
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('input[name="flexRadioDefault"]').change(function() {
                if ($('input[name="flexRadioDefault"]:checked').length > 0) {
                    $('.order-menu').addClass('visible');
                }
            });

            $('input[name="flexCheckboxDefault"]').change(function() {
                if ($('input[name="flexCheckboxDefault"]:checked').length > 0) {
                    $('.order-menu').addClass('visible');
                }
            });

            $('.btn-reset').click(function() {
                $('input[name="flexRadioDefault"]').prop('checked', false);
                $('input[name="flexCheckboxDefault"]').prop('checked', false);
                $('.order-menu').removeClass('visible');
            });

            $('.btn-next').click(function() {
                var selectedRadioValue = $('input[name="flexRadioDefault"]:checked').val();
                var selectedCheckboxValues = $('input[name="flexCheckboxDefault"]:checked').map(function() {
                    return this.value;
                }).get();

                var message = 'You selected: ' + (selectedRadioValue ? selectedRadioValue : 'None');
                if (selectedCheckboxValues.length > 0) {
                    message += '\nAdditional packages: ' + selectedCheckboxValues.join(', ');
                }

                alert(message);
                // Add your logic here to handle the selected values
            });

            $('.card-price').click(function() {
                var input = $(this).find('input[type="radio"], input[type="checkbox"]');
                input.prop('checked', true).change();
            });
        });
    </script>
@endsection
