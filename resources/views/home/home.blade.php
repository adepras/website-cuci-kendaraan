@extends('layouts.app')

@section('title', 'Home - iWash')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

    <section id="home" class="py-5">
        <div class="container-home">
            <div class="tagline">
                <h4>Cuci dan Salon Mobil Profesional<img src="image/patch-check-fill.svg" alt=""></h4>
                <p>Tidak perlu menunggu lama lagi saat ingin mencuci kendaraan Anda<br>Dan kami siap membersihkan
                    kendaraan Anda kapanpun dibutuhkan.</p>
                <button class="btn btn-secondary btn-pesan">Pelajari Lebih Lanjut</button>
            </div>
            <div class="image-container">
                <img src="image/car-wash-ill.png" alt="" class="half-size">
            </div>
        </div>
    </section>
    <section id="layanan" class="py-5">
        <div class="container-layanan text-center">
            <h2 class="mb-4">Sekarang, cuci kendaraan lebih mudah dan terjadwal tanpa ribet antri.</h2>
            <p>Banyak orang sudah menggunakan layanan kami. <br>Apa yang kami tawarkan?</p>
            <ul class="text-service">
                <li><img src="image/fast-time-ill.png" alt="">Cepat Tanpa Repot Antri</li>
                <li><img src="image/calendar-check-ill.png" alt="">Bebas Atur Jadwal</li>
                <li><img src="image/shield-check-ill.png" alt="">Kendaraan Aman Terjaga</li>
                <li><img src="image/group-ill.png" alt="">Profesional dan Tanggap</li>
                <li><img src="image/drips-ill.png" alt="">Sabun/Foam Premium</li>
                <li><img src="image/verify-ill.png" alt="">Garansi Cuci Kembali</li>
            </ul>
        </div>
    </section>
    <section id="harga" class="py-5">
        <div class="container-harga">
            <h2 class="mb-4">Harga bersahabat hasil mantap.</h2>
            <p>Kami menawarkan paket pencucian sesuai dengan kebutuhan Anda.</p>
            <div class="harga-content">
                <img src="image/character-top-ill.svg" alt="" style="margin-left: -100px;">
                <div class="card-container">
                    <div class="card">
                        <div class="card-title">
                            <img src="image/p-basic.png" alt="">
                            <h4>Basic</h4>
                            <p>Membersihkan seluruh bagian mobil (eksterior dan interior) menggunakan sampo
                                Meguiar's Gold Class dan peralatan standar profesional.</p>
                        </div>
                        <ul class="text-card">
                            <li><img src="image/check-ill.png" alt="">Hand Wash</li>
                            <li><img src="image/check-ill.png" alt="">Interior Cleaning</li>
                            <li><img src="image/check-ill.png" alt="">vacuum</li>
                            <li><img src="image/check-ill.png" alt="">Tire Polish</li>
                        </ul>
                        <p class="price">Rp 50.000</p>
                    </div>
                    <div class="card">
                        <div class="card-title">
                            <img src="image/p-standard.png" alt="">
                            <h4>Standard</h4>
                            <p>Paket Basic + membersihkan bercak atau noda berkerak pada permukaan cat dan bagian
                                mesin.</p>
                        </div>
                        <ul class="text-card">
                            <li style="font-weight: 600"><img src="image/check-ill.png" alt="">All in
                                Basic</li>
                            <li><img src="image/check-ill.png" alt="">Foam Wash</li>
                            <li><img src="image/check-ill.png" alt="">Spot Remover (Body)</li>
                            <li><img src="image/check-ill.png" alt="">Engine Cleaning</li>
                        </ul>
                        <p class="price">Rp 75.000</p>
                    </div>
                    <div class="card">
                        <div class="card-title">
                            <img src="image/p-professional.png" alt="">
                            <h4>Professional</h4>
                            <p>Paket Standard + membersihkan jamur, kerak pada kaca mobil dan noda aspal pada
                                permukaan cat mobil.</p>
                        </div>
                        <ul class="text-card">
                            <li style="font-weight: 600"><img src="image/check-ill.png" alt="">All in
                                Standard</li>
                            <li><img src="image/check-ill.png" alt="">Spot Remover (Window)</li>
                            <li><img src="image/check-ill.png" alt="">Tar Remover</li>
                        </ul>
                        <p class="price">Rp 100.000</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="testimoni" class="py-5">
        <div class="container-testimoni">
            <div class="testimoni-title">
                <h3>Kata mereka yang telah<br>menggunakan iWash</h3>
            </div>
        </div>
        {{-- Slide Testimoni --}}
    </section>
@endsection
